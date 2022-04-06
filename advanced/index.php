<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPs | PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include_once 'calculation_class.php'; ?>
    <?php include_once 'person_class.php'; ?>
    <?php include_once 'employee_class.php'; ?>
    <?php include_once 'manager_class.php'; ?>
    <?php include_once 'access_modifier.php'; ?>
    <?php include_once 'abstract_class.php'; ?>
    <?php include_once 'car_class.php'; ?>
    <?php include_once 'member.php'; ?>
    <?php include_once 'test_class.php'; ?>
    <?php include_once 'product_class.php'; ?>
    <?php include_once 'method-chaining.php'; ?>
    <?php include_once 'autoload-function.php'; ?>
    <?php include_once 'oop_conditional_f.php'; ?>

    <header>
        <div class="logo-brand">
            <div class="logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -1 100 50">
                    <path d="m7.579 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053" />
                    <path d="m41.093 0 7.314 0-2.067 10.123 6.572 0c3.604 0.071 6.289 0.813 8.056 2.226 1.802 1.413 2.332 4.099 1.59 8.056l-3.551 17.649-7.42 0 3.392-16.854c0.353-1.767 0.247-3.021-0.318-3.763-0.565-0.742-1.784-1.113-3.657-1.113l-5.883-0.053-4.346 21.783-7.314 0 7.632-38.054 0 0" />
                    <path d="m70.412 10.123 14.204 0c4.169 0.035 7.19 1.237 9.063 3.604 1.873 2.367 2.491 5.6 1.855 9.699-0.247 1.873-0.795 3.71-1.643 5.512-0.813 1.802-1.943 3.427-3.392 4.876-1.767 1.837-3.657 3.003-5.671 3.498-2.014 0.495-4.099 0.742-6.254 0.742l-6.36 0-2.014 10.07-7.367 0 7.579-38.001 0 0m6.201 6.042-3.18 15.9c0.212 0.035 0.424 0.053 0.636 0.053 0.247 0 0.495 0 0.742 0 3.392 0.035 6.219-0.3 8.48-1.007 2.261-0.742 3.781-3.321 4.558-7.738 0.636-3.71 0-5.848-1.908-6.413-1.873-0.565-4.222-0.83-7.049-0.795-0.424 0.035-0.83 0.053-1.219 0.053-0.353 0-0.724 0-1.113 0l0.053-0.053" />
                </svg>
            </div>
        </div>
        <div class="logo-title">
            <marquee behavior="scroll" direction="right" scrollamount="12">
                Php with Object-oriented programming language concept
            </marquee>
        </div>

    </header>

    <div class="content">
        <h2>
            Object oriented programming concept
        </h2>
    <?php
        
        // class object
        $obj1 = new calculation();
        $obj2 = new person("Waleed ali sarwar", 21);
        $obj3 = new person();
        $obj4 = new employee("Waleed", 22, 20000, "Management");
        $obj5 = new manager("Waleed", 22, 2000, "Management");
        $obj6 = new base_class("Base-Class", "Php programming-OOPs");
        $obj7 = new derived_class("Derived-Class", "CSharp programming-OOPs");
        $obj8 = new second_class("Second-Class", "ASP.NET programming-OOPs");
        $obj9 = new user("Waleed Ali Sarwar", 21, "25-04-2000", "Rawalpindi");
        $obj10 = new Cars();
        $obj11 = new personal();
        $obj12 = new person("Umer Ali", 20);
        // with namespace
        $obj13 = new product_1\product();
        $obj14 = new  product_2\product();
        echo "<br>";



        // declaration
        $obj1->a = 12;
        $obj1->b = 2;

        // declaration
        echo  'Value of Obj1 is : ' . $obj1->add() . "<br>";
        echo  'Value of Obj1 is : ' . $obj1->subtact() . "<br>";

        $obj2->show_person();
        $obj3->show_person();
        $obj4->info();
        $obj5->info();
        $obj6->print_item();
        $obj7->print_item();
        echo $obj8->print_item();
        $obj9->get();
        $obj10->start_car();
        $obj10->resume_car();
        $obj10->stop_car();
        echo "<br>";
        echo "<br>";
        $obj12->show_person();
        $obj12->hi();
        $obj12->about();
        echo "<br>";
        $obj12->add(12);
        echo "<br>";

        // object
        $chain = new myClass();
        $obj14 = new MyClass1(" Waleed<br>");
        echo $obj14->App("This is a method for Application in Php");

        // conditional method - method exists
        if (method_exists($obj14,"App")){
            echo "<h2>Method is Exist.</h2>";
        }else{
            echo "<h2>Method is not Exist.</h2>";
        }

        // conditional method - Class exists
        if (class_exists("MyClass")){
            echo "<h2>Class is Exist.</h2>";
        }else{
            echo "<h2>Class is not Exist.</h2>";
        }

        // conditional method - Interface exists
        if (interface_exists("MyClassInterface")){
            echo "<h2>Interface is Exist.</h2>";
        }else{
            echo "<h2>Interface is not Exist.</h2>";
        }

        // conditional method - Trait exists
        if (trait_exists("functionsListTrait")){
            echo "<h2>Trait is Exist.</h2>";
        }else{
            echo "<h2>Trait is not Exist.</h2>";
        }
        $obj13->name;
        $chain->first()->second()->third();

    ?>
    </div>

    <footer>
        <h4>
            Waleed-programmingHub @GitHub | Php
        </h4>
    </footer>
</body>

</html>