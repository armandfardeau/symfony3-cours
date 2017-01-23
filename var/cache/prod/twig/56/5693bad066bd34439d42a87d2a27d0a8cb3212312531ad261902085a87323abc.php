<?php

/* JustBundle:Default:index.html.twig */
class __TwigTemplate_2a018a3b696306805380a0b9f07aa3d697dd4d2454a59eb390c9ea877ec57c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "
</body>

</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"\">
    ";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <button class=\"btn btn-lg btn-primary\"></button>";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        echo "<script src=\"../../../src/JustBundle/Resources/Public/js/jquery-3.1.1.min%20(1).js\"></script>";
    }

    public function getTemplateName()
    {
        return "JustBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 15,  74 => 13,  71 => 12,  63 => 7,  60 => 6,  54 => 5,  46 => 16,  44 => 15,  41 => 14,  39 => 12,  35 => 10,  33 => 6,  29 => 5,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JustBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/ProjetSymfony/src/JustBundle/Resources/views/Default/index.html.twig");
    }
}
