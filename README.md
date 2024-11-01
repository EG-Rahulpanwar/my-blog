# Git and GitHub Task Basic Documentation

## Task 1: Setting Up Git on Your Machine

### Steps to Install and Configure Git

1. **Set Up Your Git Identity**
   Configure your username and email:

   git config --global user.name "Your Name"

   git config --global user.email "<your-email@example.com>"

2. **Verify Git Setup**

   Check if Git is installed correctly:

   git --version

3. **Check Git Configuration**
   View your global Git configuration:

   git config --global --list

---

## Task 2: Create a New Git Repository and Push to GitHub

### Steps to Create and Push a Repository

1. **Create a New Directory**

   mkdir my-blog

   cd my-blog

2. **Initialize the Git Repository**

   git init

3. **Create a README File**

   echo "# My Simple Blog" > README.md

4. **Stage the README File**

   git add README.md

5. **Commit the Changes**

   git commit -m "Initial commit"

6. **Add the Remote Repository**

   git remote add origin <https://github.com/"youremail"/my-blog.git>

7. **Rename the Branch to `main`**

   git branch -M main

8. **Push to GitHub**

   git push -u origin main

---

## Task 3: Basic Git Commands

### Overview of Basic Git Commands

1. **Clone a Repository**

   git clone <https://github.com/youremail/my-blog.git>

2. **Stage Changes**

   git add .
   or for specific files:
   git add filename.txt

3. **Commit Changes**

   git commit -m "Description of changes"

4. **Push Changes to GitHub**

   git push

5. **Pull Changes from GitHub**

   git pull

6. **Check the Status of Your Repository**

   git status

7. **View Commit History**

   git log

---
You have successfully set up Git, created a repository, and learned to use basic Git commands.thank you
