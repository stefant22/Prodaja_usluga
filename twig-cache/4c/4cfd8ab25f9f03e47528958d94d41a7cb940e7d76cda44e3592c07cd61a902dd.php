<?php

/* Main/home.html */
class __TwigTemplate_a6db7f7b6da8726a3eac32f3cea40895468ad2bf493fa40c9baaad195906392d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Main/home.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        echo " 
";
        // line 3
        ob_start();
        // line 4
        echo "<div class=\"row \">
   
        
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "        

        <div class=\"p-0 mb-1 card border-primary mb-2 col-12 col-sm-6 col-md-4 col-lg-3 text-center categories\" >
                <img class=\"card-img-top cardImage\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "image_path", array()), "html", null, true);
            echo "\" alt=\"Card image cap\">
              
               <div class=\"card-body\">
                <div class=\"card-title\">
                        <a class=\"nav-link\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()));
            echo "
                        </a>
                    </div>
                </div>
                </div>
            
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "           
              </div>





   <!--    <ul class=\"nav nav-tabs\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 32
            echo "
     <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category_id", array()), "html", null, true);
            echo "\">
                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()));
            echo "
            </a>
        </li> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </ul>
-->

</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 43
        echo " ";
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  113 => 39,  103 => 35,  97 => 34,  93 => 32,  89 => 31,  79 => 23,  66 => 16,  60 => 15,  53 => 11,  48 => 8,  44 => 7,  39 => 4,  37 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Main/home.html", "C:\\xampp\\htdocs\\Prodaja_usluga\\views\\Main\\home.html");
    }
}
