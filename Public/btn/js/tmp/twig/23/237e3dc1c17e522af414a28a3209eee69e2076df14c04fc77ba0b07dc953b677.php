<?php

/* display/results/empty_display.twig */
class __TwigTemplate_7d4961afda0b55f70e0b3c4289c747008a20144ac73677b4508d15b57ef79215 extends Twig_Template
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
        // line 1
        echo "<td ";
        echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : null), "html", null, true);
        echo " class=\"";
        echo twig_escape_filter($this->env, (isset($context["classes"]) ? $context["classes"] : null), "html", null, true);
        echo "\"></td>
";
    }

    public function getTemplateName()
    {
        return "display/results/empty_display.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/results/empty_display.twig", "D:\\phpStudy\\PHPTutorial\\WWW\\phpMyAdmin-4.8.4-all-languages\\templates\\display\\results\\empty_display.twig");
    }
}
