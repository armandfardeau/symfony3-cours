<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5aca845113715f6b4d0f6c77c21d5061d3b5865b850bd4ae945a86d72a168d95 extends Twig_Template
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
        $__internal_9f9649ea44f4010881186f3986faf01184babaa86c9af3ff4655a808f76244f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9649ea44f4010881186f3986faf01184babaa86c9af3ff4655a808f76244f8->enter($__internal_9f9649ea44f4010881186f3986faf01184babaa86c9af3ff4655a808f76244f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5371563d4f00574086ee4f44debf0de2ea72bb59b5166d04c95eade49415d2cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5371563d4f00574086ee4f44debf0de2ea72bb59b5166d04c95eade49415d2cf->enter($__internal_5371563d4f00574086ee4f44debf0de2ea72bb59b5166d04c95eade49415d2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_9f9649ea44f4010881186f3986faf01184babaa86c9af3ff4655a808f76244f8->leave($__internal_9f9649ea44f4010881186f3986faf01184babaa86c9af3ff4655a808f76244f8_prof);

        
        $__internal_5371563d4f00574086ee4f44debf0de2ea72bb59b5166d04c95eade49415d2cf->leave($__internal_5371563d4f00574086ee4f44debf0de2ea72bb59b5166d04c95eade49415d2cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
