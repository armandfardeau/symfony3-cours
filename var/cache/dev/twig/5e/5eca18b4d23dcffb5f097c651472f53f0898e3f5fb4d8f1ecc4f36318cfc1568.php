<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d4517dc8d29ac5ea8236bf21c91bba556b72131f57c116c3110b3b42ea024f59 extends Twig_Template
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
        $__internal_8e5b361575aade12d61d94c7d1ccf4e282440acc1a46bd8c6730e4aa0a317df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5b361575aade12d61d94c7d1ccf4e282440acc1a46bd8c6730e4aa0a317df8->enter($__internal_8e5b361575aade12d61d94c7d1ccf4e282440acc1a46bd8c6730e4aa0a317df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e6c3907e11984086f71aaa449dd305872b3de34e32a7e600e8ae8b9ace19a461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c3907e11984086f71aaa449dd305872b3de34e32a7e600e8ae8b9ace19a461->enter($__internal_e6c3907e11984086f71aaa449dd305872b3de34e32a7e600e8ae8b9ace19a461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_8e5b361575aade12d61d94c7d1ccf4e282440acc1a46bd8c6730e4aa0a317df8->leave($__internal_8e5b361575aade12d61d94c7d1ccf4e282440acc1a46bd8c6730e4aa0a317df8_prof);

        
        $__internal_e6c3907e11984086f71aaa449dd305872b3de34e32a7e600e8ae8b9ace19a461->leave($__internal_e6c3907e11984086f71aaa449dd305872b3de34e32a7e600e8ae8b9ace19a461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
