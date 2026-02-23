# Capinest

**Capinest** is a lightweight investment wallet and money tracking API built with Laravel.  
It enables users to manage multiple wallets (accounts), record income and expenses, and monitor balances across their investment portfolios.

Designed as a clean backend-only service, Capinest provides structured RESTful endpoints that can be consumed by any frontend application (web, mobile, or third-party services).

---

## 🚀 Overview

Capinest allows users to:

- Create a user profile
- Manage multiple wallets (e.g., Business, Stocks, Personal Investments)
- Record transactions (income or expense)
- Track wallet balances
- View total balance across all wallets

The system calculates balances dynamically to ensure accuracy and data integrity.

---

## 🧩 Core Features

### 👤 User Management
- Create user accounts
- View user profile
- Retrieve all wallets belonging to a user
- View overall balance across wallets

### 💼 Multi-Wallet Support
- Create multiple wallets per user
- Separate funds by business, portfolio, or purpose
- View individual wallet balances

### 💳 Transaction Tracking
- Add income transactions (adds to balance)
- Add expense transactions (subtracts from balance)
- View all transactions per wallet
- Validation for:
  - Required fields
  - Positive amounts
  - Valid transaction types

### 📊 Dynamic Balance Calculation
- Wallet balance = total income − total expenses
- User total balance = sum of all wallet balances
- No stored balances (ensures data consistency)

### 🔗 RESTful API Design
- Clean, structured endpoints
- JSON responses
- Route model binding
- Proper database relationships

---

## 🛠 Tech Stack

- PHP
- Laravel
- MySQL / PostgreSQL
- REST API Architecture

---

## 📌 Project Objective

Capinest was built as a backend-focused API assessment demonstrating:

- Proper database design
- Clean model relationships
- Validation best practices
- Structured controllers
- Accurate financial calculations
- Clear and organized commit history

---

## 📈 Future Expansion Possibilities

Capinest can be extended to support:

- Stock portfolio tracking
- ROI & gain/loss analytics
- Dividends tracking
- Transaction filtering & reporting
- Authentication & role management

---

**Capinest — Organize capital. Track growth. Build wealth.**# CapiNest
