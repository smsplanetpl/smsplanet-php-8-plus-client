#!/bin/bash
# Initialize Git repository and push to GitHub

git init
git add .
git commit -m "Initial commit"
git branch -M main
# Replace the URL below with your actual GitHub repository URL
git remote add origin https://github.com/YOUR_USERNAME/smsplanet-php-8-plus-client.git
git push -u origin main
