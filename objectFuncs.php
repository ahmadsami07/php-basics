<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    
    <?php
        class Student{
            var $name;
            var $major;
            var $gpa;

            function __construct($aName,$aMajor,$agpa)
            {
                $this->name=$aName;
                $this->major=$aMajor;
                $this->gpa=$agpa;
            }

            function hasHonorRoll(){
                if($this->gpa>=3.5)
                {
                    return "true";
                }
                return "false";
            }
        }

        $student1= new Student("Jim","Business",2.8);
        $student2= new Student("Pam","Art",3.6);

        echo $student2->hasHonorRoll();



    ?>
</body>
</html>