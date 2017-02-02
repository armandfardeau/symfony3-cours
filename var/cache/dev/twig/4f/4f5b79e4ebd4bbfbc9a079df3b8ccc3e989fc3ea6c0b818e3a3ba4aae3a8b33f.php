<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_256745554f04cfe790ef5d40e1da1c3674a582da1973d7786a8b99432a698a91 extends Twig_Template
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
        $__internal_c34b920d8d6086e833d6bf5e9532f0637a35d2a60426537794d57a53e232f3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c34b920d8d6086e833d6bf5e9532f0637a35d2a60426537794d57a53e232f3b4->enter($__internal_c34b920d8d6086e833d6bf5e9532f0637a35d2a60426537794d57a53e232f3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ee6ce9da756ba36b52ca508010b4d1112a3b28b4fded3597effa0f1ecaeac74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6ce9da756ba36b52ca508010b4d1112a3b28b4fded3597effa0f1ecaeac74c->enter($__internal_ee6ce9da756ba36b52ca508010b4d1112a3b28b4fded3597effa0f1ecaeac74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c34b920d8d6086e833d6bf5e9532f0637a35d2a60426537794d57a53e232f3b4->leave($__internal_c34b920d8d6086e833d6bf5e9532f0637a35d2a60426537794d57a53e232f3b4_prof);

        
        $__internal_ee6ce9da756ba36b52ca508010b4d1112a3b28b4fded3597effa0f1ecaeac74c->leave($__internal_ee6ce9da756ba36b52ca508010b4d1112a3b28b4fded3597effa0f1ecaeac74c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
