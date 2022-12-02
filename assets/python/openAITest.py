import requests

api_key = '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' # Replace with your own API key

# Set up the parameters for the request
params = {
    'prompt': 'comment tu vas ?',
    'max_tokens': 100,
    'temperature': 0.7,
    'top_p': 0.9
}

# Make the request
response = requests.post('https://api.openai.com/v1/engines/davinci/completions',
                         json=params,
                         headers={'Authorization': 'Bearer ' + api_key})

# Print the response
print(response.json()['choices'][0]['text'])