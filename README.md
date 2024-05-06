# hopekcc-web-test

## Pulling Files from Git To Apache Web Server

### Setting Up the Path in Apache

1. In a directory outside of the Apache server, set up a Git Repository.
2. Create a symbolic link inside the web server linking to this repository
`ln -s *path* *linkname*`
3. Make sure that the user running the Apache Web Server (found in **httpd.cnf**) can access the repository
4. To access files in the repository, enter the path from the webserver locating that file on the browser

### Bash Script to Pull From Github

A bash script was then created to pull changes from Github using `git pull`. The script was then called in **git-pull.php** script to run the bash script from Apache.

### Pulling from the repository on the browser

Go to ***serverpath*/git-pull.html** to access the UI to pull changes. After clicking the **Pull** button, **git-pull.php** will be called, which then initializes git pull from the server. The script output is displayed on the browser when finished.

**helloworld.html** was used to test the functionality. Changes were made on Github, then pulled to the local machine, and then viewed on the browser.

### Notes:
The path will have to set to Repository path on the local machine inside **pull-from-git.sh**.