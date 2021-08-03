<html>
    <head><title>About Me</title></head>
    <style>
        .main{
            margin: auto;
            margin-top: 50px;
            width: 50%;
            border-style: solid;
            border-color: green;
            padding: 70px;
            text-align: justify;
            
        }
    </style>
    <body>
        <div class = "main">
            
            <center><h2> Things about me 
            <br><br></h2></center>
            
        <?php
            $name = 'Carmela Reyes';
            $age = 21;
            $birth = 'April 29,2000';
            $school = 'University of Makati';
            $year = '4th';
            $course = 'BS in Computer Science major in Application Development';
            
            $food = 'Takoyaki';
            $color = 'Blue';
            $hobby = array('Playing Instruments','Singing','Watching Anime', 'Playing Games', 'Photo and Video Editing', '3D Modelling', 'Learning Japanese Language');
            
            

            echo "Hello there! My name is <b>$name</b>. Im <b>$age</b> years old. My birthdate is <b>$birth</b>. I'm a <b>$year</b> year student currently studying at <b>$school</b> taking up <b>$course</b>. <br /><br /> ";
            
            echo "Since you know me better, let me tell you my favorites! When i am sad, the food that makes me happy is eating <b>$food</b>. Ever since i was a child, my favorite color is <b>$color</b> but my Dad always likes me to wear pink! Funny right? <br><br>";
            
            echo "Theres's one last thing I want to share with you. My hobbies! When the pandemic started, I always left alone because my parents have to go work. <b>$hobby[0]</b> and <b>$hobby[1]</b> is the most thing I always do at home. It gives me relaxation and peace. <b>$hobby[2]</b> and <b>$hobby[3]</b> gives me entertainment when i am bored at home. Lastly, I do <b>$hobby[4]</b>, <b>$hobby[5]</b> and <b>$hobby[6]</b> for fun because I'm interested to do these things.";
            
        ?>
        </div>
    </body>
</html>