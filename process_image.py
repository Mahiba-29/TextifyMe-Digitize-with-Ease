import sys
from google.cloud import vision_v1 as vision

# Set authentication using downloaded JSON file
credentials_path = "Google vision.json"
vision_client = vision.ImageAnnotatorClient.from_service_account_json(credentials_path)

def process_image(image_path):
    # Read the image file
    with open(image_path, 'rb') as image_file:
        content = image_file.read()

    # Create an Image object from the image file contents
    image = vision.Image(content=content)

    # Create a Feature object specifying the type of feature to be detected
    feature = vision.Feature(type_=vision.Feature.Type.TEXT_DETECTION)

    # Create an AnnotateImageRequest object with the image and feature objects
    request = vision.AnnotateImageRequest(image=image, features=[feature])

    # Make an API request
    response = vision_client.annotate_image(request=request)

    # Process the response from the API call to extract the detected text
    recognized_text = ""
    for text_annotation in response.text_annotations:
        recognized_text += text_annotation.description + "\n"

    return recognized_text.strip()

if __name__ == "__main__":
    # Accept the image file path as a command-line argument
    image_path = sys.argv[1]
    # Process the image and print the recognized text
    recognized_text = process_image(image_path)
    print(recognized_text)
