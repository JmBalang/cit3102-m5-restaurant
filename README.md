## 1. Project Information
* **Project Title:** Restaurant Resource API
* **Partner 1:** Jhon Michael V. Balang
* **Partner 2:** [Partner's Full Name]
* **Section:** [Your Section, e.g., BSIT 3-A]
* **Resource:** Restaurant (Fields: `Customer_ID` [Int], `Customer_name` [String], `Order` [String], `Payment` [Float])

## 2. Setup Steps (Fresh Clone)
1. Clone the repository:
   git clone https://github.com/JmBalang/cit3102-m5-restaurant.git
2. Install PHP dependencies:
   composer install
3. Configure environment:
   cp .env.example .env
   php artisan key:generate
4. Update database credentials in `.env` (DB_DATABASE=restaurant_api).
5. Run migrations:
   php artisan migrate
6. Start the development server:
   php artisan serve

## 3. API Routes Table

| Verb | Path | What it does | Needs Token? |
| :--- | :--- | :--- | :--- |
| POST | /api/register | Registers a new user | No |
| POST | /api/login | Authenticates user and returns API token | No |
| POST | /api/logout | Revokes the active API token | Yes |
| GET | /api/restaurants | Retrieves all restaurant records | Yes |
| POST | /api/restaurants | Creates a new restaurant record | Yes |
| GET | /api/restaurants/{id} | Retrieves a single restaurant record | Yes |
| PUT | /api/restaurants/{id} | Updates a restaurant record completely | Yes |
| PATCH | /api/restaurants/{id} | Partially updates a restaurant record | Yes |
| DELETE | /api/restaurants/{id} | Deletes a restaurant record | Yes |

## 4. API Testing Screenshots


<img width="637" height="360" alt="Screenshot 2026-10-15 101225" src="https://github.com/user-attachments/assets/cabd396b-d9b7-4666-8a4c-5503ecefab28" />
<img width="622" height="280" alt="Screenshot 2026-10-15 101219" src="https://github.com/user-attachments/assets/9bcef21a-4d46-453d-82ce-b6b4ff7a94d9" />
<img width="623" height="272" alt="Screenshot 2026-10-15 101231" src="https://github.com/user-attachments/assets/f8869129-ad68-42cf-9751-a9eca7a5bbe1" />
<img width="641" height="307" alt="Screenshot 2026-10-15 101237" src="https://github.com/user-attachments/assets/e3dfb5f0-6202-4184-9833-a0c11c98ef23" />
<img width="645" height="262" alt="Screenshot 2026-10-15 104342" src="https://github.com/user-attachments/assets/ab14b514-ec64-4e87-bbad-558e639f57aa" />
<img width="656" height="267" alt="Screenshot 2026-10-15 104348" src="https://github.com/user-attachments/assets/543cab36-f6ae-4970-9ae2-c5cf2693fd93" />
<img width="668" height="283" alt="Screenshot 2026-10-15 104355" src="https://github.com/user-attachments/assets/a02e9a15-7d41-4f4e-8297-9e20e7e2fd6b" />
<img width="645" height="283" alt="Screenshot 2026-10-15 104400" src="https://github.com/user-attachments/assets/a2351f21-96b9-4c7d-9f2f-3c8e358dd9e1" />
<img width="646" height="297" alt="Screenshot 2026-10-15 104404" src="https://github.com/user-attachments/assets/c9da7cd5-0d12-4b19-98a2-410d9813f807" />
<img width="631" height="322" alt="Screenshot 2026-10-15 104408" src="https://github.com/user-attachments/assets/8986e779-f650-4304-ab5a-081173eaec49" />

























## 5. Why DELETE returns 204 and not 200?
The DELETE HTTP request method returns a 204 No Content status code because the server has successfully processed the request to remove the target resource, and there is no data payload left to send back to the client. Unlike a 200 OK response which returns updated or retrieved entity data in the response body, 204 explicitly confirms that the resource was deleted while avoiding unnecessary bandwidth usage. Returning 204 No Content directly signals to the client that the action was successful and the resource no longer exists.

