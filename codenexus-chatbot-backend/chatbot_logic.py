from openai import OpenAIError
import openai


# def is_programming_question(text):
#     programming_keywords = [
#         "python", "java", "javascript", "c++", "code", "program", "compile", "bug",
#         "html", "css", "sql", "database", "loop", "function", "variable", "logic",
#         "api", "framework", "react", "django", "flask", "node", "php", "backend", "frontend"
#     ]
#     text_lower = text.lower()
#     return any(keyword in text_lower for keyword in programming_keywords)

def get_bot_response(user_input):
    # Optional hardcoded reply
    if user_input.strip().lower() == "who are you?":
        return "I am your personalized CodeNexus AI Assistant."

    # Check if it's a programming-related question
    # if not is_programming_question(user_input):
    #     return "I'm here to help with programming-related questions. Let’s stick to coding! 😊"

    try:
        response = openai.ChatCompletion.create(
            model="gpt-3.5-turbo",
            messages=[
                
               # {"role": "system", "content": "You are a helpful assistant who only answers programming and coding-related questions. If asked anything else, kindly reply that you're here to assist with programming topics only."},
                {"role": "user", "content": user_input}
            ]
        )
        return response.choices[0].message['content'].strip()

    except OpenAIError as e:
        return f"Error: {str(e)}"
