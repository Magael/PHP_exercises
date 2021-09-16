# PHP
## Exercises done during the BECODE learning process

### PHP Fundamentals

1. Variables
  
  - Create a file called variable_types.php and try to do this:

  - Store your first name in a variable, then display its value (echo) in a <p> html tag so that the screen shows:
      Hi! My name is ______.

  - Then add another variable to contain your age, then display it in a second <p> tag :
      I am ____ years old.

  - Then add yet another variable that describes the colour of your eyes, then display it in another <p> tag :
      My eyes are ____

  - Then add yet another variable that contains the name of all the people in your family. What type of variable would you use for that ?
       * Display the value stored at the first index in another <p> tag :
              The first person in my family is ____

  - And finally : what type of variable would you use to store the information whether you are hungry or not ?
  
  
2. Drill Conditions

  - mastery of expressing conditions in PHP for many sorts of use case.
    * Clean your room! Exercise
    * Display a different greeting message depending on the time of the day. Exercise
    * Display a different greeting according to the user's age. Exercise
    * Display a different greeting according to the user's age and gender. Exercise
    * Display a different greeting according to the user's age, gender and mothertongue. Exercise
    * The Girl Soccer team Exercise
    * "School sucks!" Exercise
    * Ternary exercises "Unicorn"
    
**-** Fake Excuse Notes Generator

  Parents must sometimes write notes to excuse their child out of specific school activities. Create a short form that offers pre-defined excuse notes to help Parents get this done faster.

  In an "excuse.php" file, create an "apology generator" to make life easier for parents of children in primary school.

  You need a form with these questions:

  - name of the child
  - Gender of the child (girl or boy)
  - name of the teacher
  - a reason for the absence to be chosen among options (radio type input):
    * illness
    * death of the pet (or a family member)
    * significant extra-curricular activity
    * any other excuse of your choice
    
  For each option, invent an appropriate excuse according to the chosen option (inspiration).
  
3. Arrays

  - Countries Exercise
  
4. Loops
  
  - Write a script that prints the numbers from 1 to 120 using  while
  - Write a script that prints the numbers from 1 to 120 using  for
  - Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.
  - Create an array containing at least 10 countries. Then, generate the html that will render a select box inside an html form (see mockup below). Of course, a loop will be useful...
  - Now, edit your array so that it becomes an associative array: use the country ISO code as array key, and the country name as value. For example :
    ```$pays = array('BE'=>'Belgique');``` 
  - Now, adapt your html select box so that the country ISO code becomes the <option> element value, and the country name be the visible part of the <option>.
  
5. Functions

  - Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
  - Use the native function allowing you to display the current year.
  - Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
  - Create a "Sum" function that takes 2 numbers and returns their sum.
  - Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is the not a number."
  - Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
        Example: "In code we trust!" should return: ICWT).
  - Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".
  - Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca
  - Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :
    ```echo feedback("Incorrect email address", "error");```
    which will produce this html :

    ```<div class="error">Error: Incorrect email address.</div>```
    
  - Improve that function by giving the default class the value of "info". Look into the documentation documentation php.
  - Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").
  - De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"
  - In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :
  ```
    // Volume of a cone which ray is 5 and height is 2 
    $volume = 5 * 5 * 3.14 * 2 * (1/3);  
    echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
    // Volume of a cone which ray is 3 and height is 4  
    $volume = 3 * 3 * 3.14 * 4 * (1/3);  
    echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';  
  ```
    
