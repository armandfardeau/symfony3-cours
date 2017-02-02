<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ffda8159062be7a32a793340756b9e056b24bff6d68385f4c5f0a96042de7370 extends Twig_Template
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
        $__internal_6e1e3cda545d8366dd0eae8784ce155d06c31ceb0d46e8cec83472b4a9157678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1e3cda545d8366dd0eae8784ce155d06c31ceb0d46e8cec83472b4a9157678->enter($__internal_6e1e3cda545d8366dd0eae8784ce155d06c31ceb0d46e8cec83472b4a9157678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d0bc7243274f147e4bbd4bea03b6b09de72ae3f70e81fd227da017363b1f4986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0bc7243274f147e4bbd4bea03b6b09de72ae3f70e81fd227da017363b1f4986->enter($__internal_d0bc7243274f147e4bbd4bea03b6b09de72ae3f70e81fd227da017363b1f4986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6e1e3cda545d8366dd0eae8784ce155d06c31ceb0d46e8cec83472b4a9157678->leave($__internal_6e1e3cda545d8366dd0eae8784ce155d06c31ceb0d46e8cec83472b4a9157678_prof);

        
        $__internal_d0bc7243274f147e4bbd4bea03b6b09de72ae3f70e81fd227da017363b1f4986->leave($__internal_d0bc7243274f147e4bbd4bea03b6b09de72ae3f70e81fd227da017363b1f4986_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
