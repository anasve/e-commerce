# Simple E-Commerce Management System

## Description
This project is a **Simple E-Commerce Management System** built with **Laravel** that provides a **RESTful API** for managing users, products, categories, and orders. It supports **CRUD operations** (Create, Read, Update, Delete) for products and categories, allowing customers to place orders for products. The system uses **role-based access control** to distinguish between **Admin** and **Customer** users and employs **Laravel Sanctum** for API authentication.

### Key Features
- **User Roles**:
  - **Admin**: Manage products, categories, and view all orders.
  - **Customer**: Browse products and place orders.
- **CRUD Operations**:
  - Manage products, categories, and orders with full CRUD functionality.
- **Product-Category Relationships**:
  - Products can belong to multiple categories, and each category can contain multiple products.
- **Order Management**:
  - Customers can place orders, each associated with a single product.
- **Soft Delete**:
  - Soft delete functionality for products to allow recovery of deleted items.
- **Role-Based Access Control**:
  - Middleware restricts access to admin-specific features.
- **Authentication**:
  - Uses **Laravel Sanctum** for secure API authentication.
- **API Endpoints**:
  - Includes endpoints for authentication, listing products, and placing orders.

### Technologies Used
- **Laravel**
- **PHP**
- **MySQL**
- **Composer** (PHP dependency manager)
- **Postman**: For testing API endpoints.

---

## Installation

### Prerequisites

Ensure you have the following installed on your machine:
- **XAMPP**: For running MySQL and Apache servers locally.
- **Composer**: For PHP dependency management.
- **PHP**: Required for running Laravel.
- **MySQL**: Database for the project.
- **Postman**: For testing API requests.

### Steps to Run the Project

1. **Clone the Repository**
   ```bash
   git clone https://github.com/anasve/ecommercce.git
