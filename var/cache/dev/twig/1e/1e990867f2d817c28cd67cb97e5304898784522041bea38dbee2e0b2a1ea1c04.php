<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_94c9df8239fbc331265e709adef3c7ae5ed284f9112d5ffbab5616aac1f1bf6e extends Twig_Template
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
        $__internal_599cb58c17f398798aed6c0c468aae12150fe8a3c0756fe11bc7c5f70e7e47ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599cb58c17f398798aed6c0c468aae12150fe8a3c0756fe11bc7c5f70e7e47ed->enter($__internal_599cb58c17f398798aed6c0c468aae12150fe8a3c0756fe11bc7c5f70e7e47ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_9491775225e106a29892a42f1cc3e9ffc1f18e7aa207f430198edba03b598122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9491775225e106a29892a42f1cc3e9ffc1f18e7aa207f430198edba03b598122->enter($__internal_9491775225e106a29892a42f1cc3e9ffc1f18e7aa207f430198edba03b598122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_599cb58c17f398798aed6c0c468aae12150fe8a3c0756fe11bc7c5f70e7e47ed->leave($__internal_599cb58c17f398798aed6c0c468aae12150fe8a3c0756fe11bc7c5f70e7e47ed_prof);

        
        $__internal_9491775225e106a29892a42f1cc3e9ffc1f18e7aa207f430198edba03b598122->leave($__internal_9491775225e106a29892a42f1cc3e9ffc1f18e7aa207f430198edba03b598122_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
