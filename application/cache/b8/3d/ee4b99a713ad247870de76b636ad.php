<?php

/* main.twig */
class __TwigTemplate_b83dee4b99a713ad247870de76b636ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head><title>";
        // line 2
        if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
        echo twig_escape_filter($this->env, $_title_, "html", null, true);
        echo "</title></head>
<body>
<h1>";
        // line 4
        if (isset($context["header"])) { $_header_ = $context["header"]; } else { $_header_ = null; }
        echo twig_escape_filter($this->env, $_header_, "html", null, true);
        echo "</h1>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  22 => 2,  19 => 1,);
    }
}
