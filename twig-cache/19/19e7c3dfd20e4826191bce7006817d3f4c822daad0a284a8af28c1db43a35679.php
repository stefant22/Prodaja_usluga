<?php

/* Product/show.html */
class __TwigTemplate_31b1ae35a68191fceeb5be0d4817eceabcfaf432bed8eeffc16726bc90bcf697 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("_global/index.html", "Product/show.html", 1);
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
        echo "
<ul>
 
    <li>
        <h1> ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", array()));
        echo "</h1>
        ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", array()));
        echo "
        <br>
        ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", array()));
        echo "
        
    </li>


</ul>
";
    }

    // line 20
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "Product/show.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  51 => 11,  46 => 9,  42 => 8,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Product/show.html", "C:\\xampp\\htdocs\\Prodaja_usluga\\views\\Product\\show.html");
    }
}
