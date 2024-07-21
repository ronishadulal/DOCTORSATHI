// src/app.js

import { fetchUsers } from './api';
import { getUsername } from './api'; // Import getUsername function

const baseUrl = "https://localhost:3308/Login/getUsername";

async function getUsersAndDisplay() {
    try {
        const users = await fetchUsers();
        console.log('Users:', users);
        // Display users on the UI or process data further
    } catch (error) {
        console.error('Failed to fetch users:', error);
        // Handle error (e.g., display error message)
    }
}

async function updateUserDisplay() {
    try {
        const username = await getUsername(baseUrl); // Await for username
        const login = document.getElementById("login");
        const userLogo = document.getElementById("userLogo");

        if (username) {
            localStorage.setItem("username", username);
            login.style.display = "none";
            userLogo.innerHTML = username;
            userLogo.style.display = "block";
        } else {
            login.style.display = "block";
            userLogo.style.display = "none";
        }
    } catch (error) {
        console.error("Error updating user display:", error);
    }
}

updateUserDisplay();

document.getElementById("logout").addEventListener("click", function () {
    localStorage.removeItem("username");
    updateUserDisplay();
});
