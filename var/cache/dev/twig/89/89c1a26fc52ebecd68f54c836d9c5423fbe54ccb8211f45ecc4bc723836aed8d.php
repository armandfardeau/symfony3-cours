<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3446e4d69d2d833a2dba2a1d082279dddc41a642df6adbfd116f1f3038022827 extends Twig_Template
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
        $__internal_2452dc1e1026889f781746070224ee33044ec04ac572089cf081a959304892c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2452dc1e1026889f781746070224ee33044ec04ac572089cf081a959304892c9->enter($__internal_2452dc1e1026889f781746070224ee33044ec04ac572089cf081a959304892c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_ccd5abc0f0deb2f681a322b55dc170951a09b1a7f35c3cf25ff854d6b91dbe5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd5abc0f0deb2f681a322b55dc170951a09b1a7f35c3cf25ff854d6b91dbe5e->enter($__internal_ccd5abc0f0deb2f681a322b55dc170951a09b1a7f35c3cf25ff854d6b91dbe5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2452dc1e1026889f781746070224ee33044ec04ac572089cf081a959304892c9->leave($__internal_2452dc1e1026889f781746070224ee33044ec04ac572089cf081a959304892c9_prof);

        
        $__internal_ccd5abc0f0deb2f681a322b55dc170951a09b1a7f35c3cf25ff854d6b91dbe5e->leave($__internal_ccd5abc0f0deb2f681a322b55dc170951a09b1a7f35c3cf25ff854d6b91dbe5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
