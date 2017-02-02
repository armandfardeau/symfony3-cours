<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95e9beea6fea851dea1b5610c81cd0001fc06ea5098b875cd41f70e3cfcde408 extends Twig_Template
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
        $__internal_361ca9b661145fa23e2899ee1eeebda4772b6acfc6d5f21d426a0d59e712af96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361ca9b661145fa23e2899ee1eeebda4772b6acfc6d5f21d426a0d59e712af96->enter($__internal_361ca9b661145fa23e2899ee1eeebda4772b6acfc6d5f21d426a0d59e712af96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_a80168b4d32b5b4518c32b057cf4689ee2cc12b69b030d35f1b41983f3cbcf47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a80168b4d32b5b4518c32b057cf4689ee2cc12b69b030d35f1b41983f3cbcf47->enter($__internal_a80168b4d32b5b4518c32b057cf4689ee2cc12b69b030d35f1b41983f3cbcf47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_361ca9b661145fa23e2899ee1eeebda4772b6acfc6d5f21d426a0d59e712af96->leave($__internal_361ca9b661145fa23e2899ee1eeebda4772b6acfc6d5f21d426a0d59e712af96_prof);

        
        $__internal_a80168b4d32b5b4518c32b057cf4689ee2cc12b69b030d35f1b41983f3cbcf47->leave($__internal_a80168b4d32b5b4518c32b057cf4689ee2cc12b69b030d35f1b41983f3cbcf47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Applications/MAMP/htdocs/ProjetSymfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
