<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_064306b11b2fc307636309c1f554ac643bb58d326efb324da11179df7e587ec7 extends Twig_Template
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
        $__internal_ba4b8b297e41d2d82b72cfe3123738db6c93f85e5a1099073cb2af5504224100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba4b8b297e41d2d82b72cfe3123738db6c93f85e5a1099073cb2af5504224100->enter($__internal_ba4b8b297e41d2d82b72cfe3123738db6c93f85e5a1099073cb2af5504224100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_d8355a643ad3962f36fed842c49834b651f9769d48150047e95b0a390f5c0c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8355a643ad3962f36fed842c49834b651f9769d48150047e95b0a390f5c0c14->enter($__internal_d8355a643ad3962f36fed842c49834b651f9769d48150047e95b0a390f5c0c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ba4b8b297e41d2d82b72cfe3123738db6c93f85e5a1099073cb2af5504224100->leave($__internal_ba4b8b297e41d2d82b72cfe3123738db6c93f85e5a1099073cb2af5504224100_prof);

        
        $__internal_d8355a643ad3962f36fed842c49834b651f9769d48150047e95b0a390f5c0c14->leave($__internal_d8355a643ad3962f36fed842c49834b651f9769d48150047e95b0a390f5c0c14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
