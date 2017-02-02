<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_d80f5488a760cbb06855744c9b6b151a0ef2c891c65aff590a206b2f7f9a65b0 extends Twig_Template
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
        $__internal_348fbc57019c4a46c17b077295b7c56ca890f13e57f2a782dbfcd56186e7c03a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_348fbc57019c4a46c17b077295b7c56ca890f13e57f2a782dbfcd56186e7c03a->enter($__internal_348fbc57019c4a46c17b077295b7c56ca890f13e57f2a782dbfcd56186e7c03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_bd68db1d64829d3e2407d7858bffe870f2af21440b8d9b08ea826fe95ad1621d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd68db1d64829d3e2407d7858bffe870f2af21440b8d9b08ea826fe95ad1621d->enter($__internal_bd68db1d64829d3e2407d7858bffe870f2af21440b8d9b08ea826fe95ad1621d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_348fbc57019c4a46c17b077295b7c56ca890f13e57f2a782dbfcd56186e7c03a->leave($__internal_348fbc57019c4a46c17b077295b7c56ca890f13e57f2a782dbfcd56186e7c03a_prof);

        
        $__internal_bd68db1d64829d3e2407d7858bffe870f2af21440b8d9b08ea826fe95ad1621d->leave($__internal_bd68db1d64829d3e2407d7858bffe870f2af21440b8d9b08ea826fe95ad1621d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
