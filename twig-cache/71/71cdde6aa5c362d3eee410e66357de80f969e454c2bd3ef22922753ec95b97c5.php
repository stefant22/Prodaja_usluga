<?php

/* Category/highToLow.html */
class __TwigTemplate_9cbb26cb37f6f6d2b8a4ac44b3b5f4d4e904a1d46417bb4c6128ec38fd2088ad extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Category/highToLow.html", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_main($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row border-bottom\">
<h1 class=\"col-12\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()));
        echo "</h1>

   <div class=\" col-sm-12 col-md-8 col-lg-9\">number of items: ";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["productsInCategory"] ?? null)), "html", null, true);
        echo " </div>
       <div class=\"col-sm-12 col-md-4 col-lg-3 float-right\">
           Sort by price 
           <a class=\"p-0 m-2\" href=";
        // line 10
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "category/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "category_id", array()), "html", null, true);
        echo "/order-by-price-low-to-high/><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></i></a>
           <a class=\"p-0 m-2\" href=";
        // line 11
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "category/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "category_id", array()), "html", null, true);
        echo "/order-by-price-high-to-low/><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></i></a>
        
        </div> 


</div>
<ul>
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productsInCategory"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "    <li>
        <a href=";
            // line 20
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "product/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array()), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "title", array()));
            echo "</a>
        <br>
        
    
        <p>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", array()), "html", null, true);
            echo "</p>
        <p>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", array()), "html", null, true);
            echo "</p>
        
    </li>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ul>

";
    }

    // line 35
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "Category/highToLow.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  101 => 30,  90 => 25,  86 => 24,  75 => 20,  72 => 19,  68 => 18,  56 => 11,  50 => 10,  44 => 7,  39 => 5,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Category/highToLow.html", "C:\\xampp\\htdocs\\Prodaja_usluga\\views\\Category\\highToLow.html");
    }
}
