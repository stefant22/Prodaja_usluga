<?php

/* _global/index.html */
class __TwigTemplate_434838722bd9aaead6a86a9539effc512a288434396f9ea2109db4c2563eacf1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html> ";
        ob_start();
        // line 2
        echo "<html>

<head>
    <title>Sajt - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/css/main.css\">
</head>

<body class=\"container\">
   

<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary p-0 border-bottom \">
        <div class=\"social ml-auto d-none d-md-block \">
           <a href=\"#\" class=\"float-right icon\"> <i class=\"fa fa-twitter-square \" aria-hidden=\"true\"></i></a>
           <a href=\"#\" class=\"float-right icon\"> <i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i></a>
           <a href=\"#\" class=\"float-right icon\"> <i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a>
        </div>

</nav>

    <nav class=\" navbar navbar-expand-lg navbar-dark bg-primary mb-2\">
        
        <a class=\"navbar-brand\" href=\"#\">
            <i class=\"fa fa-home\" aria-hidden=\"true\"></i>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\"
            aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
            <div class=\"navbar-nav\">
                <a class=\"nav-item nav-link\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "\">Pocetna</a>
                <a class=\"nav-item nav-link\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "categories\">Kategorije</a>
                <a class=\"nav-item nav-link\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "cart\">Korpa</a>
                <a class=\"nav-item nav-link\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "contact\">Konktakt</a>
                


            </div>
            <form class=\"form-inline ml-auto\">
                    <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                    <button class=\"btn btn-outline-light my-2 my-sm-0\" type=\"submit\">Search</button>
                </form>
        </div>


   
      


    </nav>


    
<!-- 
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary navigacija p-0\">
        <div class=\"social ml-auto\">
           <a href=\"#\" class=\"float-right icon\"> <i class=\"fa fa-twitter-square \" aria-hidden=\"true\"></i></a>
        </div>

</nav>
    -->
    <main>

        ";
        // line 68
        $this->displayBlock('main', $context, $blocks);
        // line 69
        echo "
    </main>
    <footer>
            <nav  class=\"navbar navbar-expand-lg navbar-dark bg-primary p-0 align-bottom \">
                    <div class=\"social ml-auto\">
                       <a href=\"#\" class=\"float-right icon\"> <i class=\"fa fa-twitter-square \" aria-hidden=\"true\"></i></a>
                       <a href=\"#\" class=\"float-right icon\"> <i class=\"fa fa-facebook-official\" aria-hidden=\"true\"></i></a>
                       <a href=\"#\" class=\"float-right icon\"> <i class=\"fa fa-youtube\" aria-hidden=\"true\"></i></a>
                    </div>
            
            </nav>
    </footer>

    </div>

    <script src=\" ";
        // line 84
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/libs/jquery/dist/jquery.min.js\"></script>
    <script src=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "assets/libs/bootstrap/dist/js/bootstrap.min.js\"></script>


</body>

</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "home";
    }

    // line 68
    public function block_main($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 68,  155 => 5,  143 => 85,  139 => 84,  122 => 69,  120 => 68,  87 => 38,  83 => 37,  79 => 36,  75 => 35,  46 => 9,  42 => 8,  38 => 7,  33 => 5,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_global/index.html", "C:\\xampp\\htdocs\\Prodaja_usluga\\views\\_global\\index.html");
    }
}
