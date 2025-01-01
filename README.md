# Bill of Lading Management System (BOLMS) Documentation

## Overview
The Bill of Lading Management System (BOLMS) is a web-based application designed to streamline the creation, management, and printing of Bills of Lading (B/L) for sea and air shipments. It also includes a user management module to handle access control and system administration.

## Key Features
1. **Sea B/L Management**
   - Add, edit, delete, clone, show, and print Sea Bills of Lading.
2. **Air B/L Management**
   - Add, edit, delete, clone, show, and print Air Bills of Lading.
3. **User Management**
   - Add, edit, and delete user accounts.

## Modules

### 1. Sea B/L Management
This module is responsible for managing Bills of Lading for sea shipments.

#### Functionalities:
- **Add Sea B/L:** Input the shipment details including shipper, consignee, vessel name, cargo description, and other relevant fields.
- **Edit Sea B/L:** Update existing Sea B/L information.
- **Delete Sea B/L:** Permanently remove a Sea B/L record.
- **Clone Sea B/L:** Duplicate an existing Sea B/L for similar shipments.
- **Show Sea B/L:** Display the details of a specific Sea B/L in a user-friendly format.
- **Print Sea B/L:** Generate a printable version of the Sea B/L.

### 2. Air B/L Management
This module focuses on managing Bills of Lading for air shipments.

#### Functionalities:
- **Add Air B/L:** Input the shipment details including shipper, consignee, airline, cargo description, and other relevant fields.
- **Edit Air B/L:** Update existing Air B/L information.
- **Delete Air B/L:** Permanently remove an Air B/L record.
- **Clone Air B/L:** Duplicate an existing Air B/L for similar shipments.
- **Show Air B/L:** Display the details of a specific Air B/L in a user-friendly format.
- **Print Air B/L:** Generate a printable version of the Air B/L.

### 3. User Management
This module handles user administration and access control.

#### Functionalities:
- **Add User:** Create new user accounts with roles and permissions.
- **Edit User:** Modify existing user details and update roles or permissions.
- **Delete User:** Remove user accounts from the system.

## System Requirements

### Client-Side:
- **Browser Support:** Chrome, Firefox, Edge, Safari.
- **Minimum Screen Resolution:** 1024x768.

### Server-Side:
- **Programming Language:** PHP 8
- **Database:** MySQL 5.7 or later
- **Web Server:** Apache 2.4 or Nginx
- **Operating System:** Linux-based server

## User Roles and Permissions

### Admin
- Full access to all modules and functionalities.
- Can manage users.

### Operator
- Access to Sea B/L and Air B/L Management modules.
- Cannot manage users.

## Database Schema

### Tables:
1. **sea_bls**: Stores data related to sea Bills of Lading.   - Fields: id, shipper, consignee, vessel, cargo, created_at, updated_at.
2. **air_bls**: Stores data related to air Bills of Lading.   - Fields: id, shipper, consignee, airline, cargo, created_at, updated_at.
3. **users**: Stores user account information.   - Fields: id, username, password_hash, role, created_at, updated_at.

## API Endpoints

### Sea B/L Management:
- **POST /sea-bls:** Add a new Sea B/L.
- **PUT /sea-bls/{id}:** Edit an existing Sea B/L.
- **DELETE /sea-bls/{id}:** Delete a Sea B/L.
- **GET /sea-bls/{id}:** Get details of a specific Sea B/L.
- **GET /sea-bls:** List all Sea B/Ls.

### Air B/L Management:
- **POST /air-bls:** Add a new Air B/L.
- **PUT /air-bls/{id}:** Edit an existing Air B/L.
- **DELETE /air-bls/{id}:** Delete an Air B/L.
- **GET /air-bls/{id}:** Get details of a specific Air B/L.
- **GET /air-bls:** List all Air B/Ls.

### User Management:
- **POST /users:** Add a new user.
- **PUT /users/{id}:** Edit an existing user.
- **DELETE /users/{id}:** Delete a user.
- **GET /users:** List all users.

## Workflow

1. **Admin Login:** Admin logs into the system.
2. **User Creation:** Admin adds users with appropriate roles.
3. **B/L Creation:** Operator creates Sea or Air Bills of Lading.
4. **Modification:** Existing B/Ls are edited or cloned as needed.
5. **Printing:** B/Ls are printed for shipment.

## Future Enhancements
- Integration with third-party shipping APIs for real-time updates.
- Enhanced reporting and analytics.
- Multi-language support.
- Role-based access control with finer granularity.
