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
        $__internal_28fb3137f325492b475488ee6694cb5e2de82f971c794b3920003448b4ebff4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28fb3137f325492b475488ee6694cb5e2de82f971c794b3920003448b4ebff4d->enter($__internal_28fb3137f325492b475488ee6694cb5e2de82f971c794b3920003448b4ebff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7a3c9b85bd8232096ca4a50218e6ad0df569875d41db5f8778aefb024cd65a2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3c9b85bd8232096ca4a50218e6ad0df569875d41db5f8778aefb024cd65a2d->enter($__internal_7a3c9b85bd8232096ca4a50218e6ad0df569875d41db5f8778aefb024cd65a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_28fb3137f325492b475488ee6694cb5e2de82f971c794b3920003448b4ebff4d->leave($__internal_28fb3137f325492b475488ee6694cb5e2de82f971c794b3920003448b4ebff4d_prof);

        
        $__internal_7a3c9b85bd8232096ca4a50218e6ad0df569875d41db5f8778aefb024cd65a2d->leave($__internal_7a3c9b85bd8232096ca4a50218e6ad0df569875d41db5f8778aefb024cd65a2d_prof);

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
