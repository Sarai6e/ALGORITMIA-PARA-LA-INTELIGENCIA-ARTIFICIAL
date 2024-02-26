# backend.py

class Product:
    def __init__(self, name, price):
        self.name = name
        self.price = price

# Sample product data
products = [
    Product("Hammer", 10),
    Product("Screwdriver", 5),
    Product("Wrench", 8),
    Product("Pliers", 7)
]

# Function to search for a product by name
def search_product(query):
    results = [product for product in products if query.lower() in product.name.lower()]
    return results

# Function to purchase a product
def purchase_product(product_name):
    for product in products:
        if product.name.lower() == product_name.lower():
            return f"You have purchased {product.name} for ${product.price}."
    return "Product not found."



# server.py

from backend import purchase_product, search_product
from flask import Flask, render_template, request

app = Flask(__name__)

# Render the HTML page
@app.route('/')
def index():
    return render_template('frontend.html')

# Handle product search
@app.route('/search')
def search():
    query = request.args.get('query')
    results = search_product(query)
    return render_template('frontend.html', results=results)

# Handle product purchase
@app.route('/purchase', methods=['POST'])
def purchase():
    product_name = request.form['product']
    message = purchase_product(product_name)
    return message

if __name__ == '__main__':
    app.run(debug=True)
