from flask import Flask, request, jsonify
from flask_cors import CORS
import sqlite3
from chatbot_logic import get_bot_response

app = Flask(__name__)
CORS(app)

# Handle chat
@app.route('/chat', methods=['POST'])
def chat():
    data = request.json
    user_id = data.get('user_id', 'anonymous')
    message = data.get('message', '')

    if not message:
        return jsonify({'error': 'Empty message'}), 400

    response = get_bot_response(message)

    # Save to DB
    conn = sqlite3.connect('chat.db')
    c = conn.cursor()
    c.execute("INSERT INTO chats (user_id, user_message, bot_response) VALUES (?, ?, ?)",
              (user_id, message, response))
    conn.commit()
    conn.close()

    return jsonify({'response': response})

# Fetch history
@app.route('/chat-history', methods=['POST'])
def get_history():
    user_id = request.args.get('user_id', 'anonymous')

    conn = sqlite3.connect('chat.db')
    c = conn.cursor()
    c.execute("SELECT user_message, bot_response, timestamp FROM chats WHERE user_id = ? ORDER BY timestamp DESC LIMIT 50", (user_id,))
    chats = c.fetchall()
    conn.close()

    return jsonify([
        {"user": msg, "bot": res, "time": time} for msg, res, time in chats
    ])

if __name__ == '__main__':
    app.run(debug=True)