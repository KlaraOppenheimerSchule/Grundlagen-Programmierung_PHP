# KochRezept Website (Schule)
Simple Website for the Internet with MVP and Other Patterns like Factory

## Requirements
- Docker (Windows or Linux)
- Make
- Composer
- PHP7.4

## Suggestions
- Consider using a Linux System for Development, it makes stuff way simpler
- Best way for Windows is to develop in a Linux Virtual Machine
- never store sensitive stuff in the public folder!
- Use Docker or Ansbile for storing passwords in a protected area

## Windows/Linux Dev Team
Dont Work in this mixture, best practice and honest opinion is to use Linux to develop,
there more than one reason. 
As Example:
- Docker Desktop hangs sometimes and you have to restart the hole PC

My Opinion is, that you can use Windows but with a VM where you will develop the software

## Troublshooting
1. Problems with mounts in docker-compose (Windows):
    
    Just add the Drive where this Project lies on to the Application. 
    Example: Add (Drive with Letter C:) in the Docker Desktop Application to the 
    Shared Drives and restart the Docker Desktop Application
    
2. autoloader problems/vendor missing or problems:
    
    run "composer install" when you have problems
    with the autoloader or vendor

3. Problems with CSS/JS:
    
    Add any CSS/JS Files to the public folder and use relative Path example.
    ./../../public/css/test.css

## Development:
Run following steps (without the numbers 1: 2: ... next to the command):

    1: composer install
    2: make startup_development
    
## Commands:
    every used command is listed in the Makefile