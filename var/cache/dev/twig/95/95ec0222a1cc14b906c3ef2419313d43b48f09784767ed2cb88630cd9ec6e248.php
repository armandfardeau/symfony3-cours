<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_9b08e2269bc05e4968025be112396ff3745c3437c2b9bdd2b542f75210a01609 extends Twig_Template
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
        $__internal_743c27d28c19ac5c34d30d4f105b73b10d46cdcd1789f0e263d1576a2c4d9f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743c27d28c19ac5c34d30d4f105b73b10d46cdcd1789f0e263d1576a2c4d9f65->enter($__internal_743c27d28c19ac5c34d30d4f105b73b10d46cdcd1789f0e263d1576a2c4d9f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d93f59aa89550de6a25fc1509724d325f59c7788488826a9e0a49d1ecc858e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93f59aa89550de6a25fc1509724d325f59c7788488826a9e0a49d1ecc858e7b->enter($__internal_d93f59aa89550de6a25fc1509724d325f59c7788488826a9e0a49d1ecc858e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_743c27d28c19ac5c34d30d4f105b73b10d46cdcd1789f0e263d1576a2c4d9f65->leave($__internal_743c27d28c19ac5c34d30d4f105b73b10d46cdcd1789f0e263d1576a2c4d9f65_prof);

        
        $__internal_d93f59aa89550de6a25fc1509724d325f59c7788488826a9e0a49d1ecc858e7b->leave($__internal_d93f59aa89550de6a25fc1509724d325f59c7788488826a9e0a49d1ecc858e7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
