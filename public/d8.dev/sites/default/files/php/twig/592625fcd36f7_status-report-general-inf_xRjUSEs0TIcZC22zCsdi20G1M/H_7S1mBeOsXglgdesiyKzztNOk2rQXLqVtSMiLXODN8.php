<?php

/* core/themes/seven/templates/status-report-general-info.html.twig */
class __TwigTemplate_3a5e707ee668fd8dc7a453b6fa8237c1343d42ae5d1010baba3f6a53d961ae9a extends Twig_Template
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
        $tags = array("if" => 40);
        $filters = array("t" => 33);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 32
        echo "<div class=\"system-status-general-info\">
  <h2 class=\"system-status-general-info__header\">";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("General System Information")));
        echo "</h2>
  <div class=\"system-status-general-info__items\">
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--d8\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Drupal Version")));
        echo "</h3>
        ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["drupal"]) ? $context["drupal"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 40
        if ($this->getAttribute((isset($context["drupal"]) ? $context["drupal"] : null), "description", array())) {
            // line 41
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["drupal"]) ? $context["drupal"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 43
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--clock\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Last Cron Run")));
        echo "</h3>
        ";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 50
        if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "run_cron", array())) {
            // line 51
            echo "          <div class=\"system-status-general-info__run-cron\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "run_cron", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 53
        echo "        ";
        if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "description", array())) {
            // line 54
            echo "          <div class=\"system-status-general-info__description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 56
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--server\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Web Server")));
        echo "</h3>
        ";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["webserver"]) ? $context["webserver"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 63
        if ($this->getAttribute((isset($context["webserver"]) ? $context["webserver"] : null), "description", array())) {
            // line 64
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["webserver"]) ? $context["webserver"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 66
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--php\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("PHP")));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Version")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php"]) ? $context["php"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 73
        if ($this->getAttribute((isset($context["php"]) ? $context["php"] : null), "description", array())) {
            // line 74
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php"]) ? $context["php"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 76
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Memory limit")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php_memory_limit"]) ? $context["php_memory_limit"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 78
        if ($this->getAttribute((isset($context["php_memory_limit"]) ? $context["php_memory_limit"] : null), "description", array())) {
            // line 79
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php_memory_limit"]) ? $context["php_memory_limit"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 81
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--database\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Database")));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Version")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system_version"]) ? $context["database_system_version"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 88
        if ($this->getAttribute((isset($context["database_system_version"]) ? $context["database_system_version"] : null), "description", array())) {
            // line 89
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system_version"]) ? $context["database_system_version"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 91
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("System")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system"]) ? $context["database_system"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 93
        if ($this->getAttribute((isset($context["database_system"]) ? $context["database_system"] : null), "description", array())) {
            // line 94
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system"]) ? $context["database_system"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 96
        echo "      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/status-report-general-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 96,  203 => 94,  201 => 93,  195 => 92,  192 => 91,  186 => 89,  184 => 88,  178 => 87,  174 => 86,  167 => 81,  161 => 79,  159 => 78,  153 => 77,  150 => 76,  144 => 74,  142 => 73,  136 => 72,  132 => 71,  125 => 66,  119 => 64,  117 => 63,  113 => 62,  109 => 61,  102 => 56,  96 => 54,  93 => 53,  87 => 51,  85 => 50,  81 => 49,  77 => 48,  70 => 43,  64 => 41,  62 => 40,  58 => 39,  54 => 38,  46 => 33,  43 => 32,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for status report general info.
 *
 * Available variables:
 * - drupal: The status of Drupal installation:
 *   - value: The current status of Drupal installation.
 *   - description: The description for current status of Drupal installation.
 * - cron: The status of cron:
 *   - value: The current status of cron.
 *   - description: The description for current status of cron.
 *   - cron.run_cron: An array to render a button for running cron.
 * - database_system: The status of database system:
 *   - value: The current status of database sytem.
 *   - description: The description for current status of cron.
 * - database_system_version: The info about current database version:
 *   - value: The current version of database.
 *   - description: The description for current version of database.
 * - php: The current version of PHP:
 *   - value: The status of currently installed PHP version.
 *   - description: The description for current installed PHP version.
 * - php_memory_limit: The info about current PHP memory limit:
 *   - value: The status of currently set PHP memory limit.
 *   - description: The description for currently set PHP memory limit.
 * - webserver: The info about currently installed web server:
 *   - value: The status of currently installed web server.
 *   - description: The description for the status of currently installed web
 *     server.
 */
#}
<div class=\"system-status-general-info\">
  <h2 class=\"system-status-general-info__header\">{{ 'General System Information'|t }}</h2>
  <div class=\"system-status-general-info__items\">
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--d8\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Drupal Version'|t }}</h3>
        {{ drupal.value }}
        {% if drupal.description %}
          <div class=\"description\">{{ drupal.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--clock\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Last Cron Run'|t }}</h3>
        {{ cron.value }}
        {% if cron.run_cron %}
          <div class=\"system-status-general-info__run-cron\">{{ cron.run_cron }}</div>
        {% endif %}
        {% if cron.description %}
          <div class=\"system-status-general-info__description\">{{ cron.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--server\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Web Server'|t }}</h3>
        {{ webserver.value }}
        {% if webserver.description %}
          <div class=\"description\">{{ webserver.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--php\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'PHP'|t }}</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'Version'|t }}</h4>{{ php.value }}
        {% if php.description %}
          <div class=\"description\">{{ php.description }}</div>
        {% endif %}

        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'Memory limit'|t }}</h4>{{ php_memory_limit.value }}
        {% if php_memory_limit.description %}
          <div class=\"description\">{{ php_memory_limit.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--database\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Database'|t }}</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'Version'|t }}</h4>{{ database_system_version.value }}
        {% if database_system_version.description %}
          <div class=\"description\">{{ database_system_version.description }}</div>
        {% endif %}

        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'System'|t }}</h4>{{ database_system.value }}
        {% if database_system.description %}
          <div class=\"description\">{{ database_system.description }}</div>
        {% endif %}
      </div>
    </div>
  </div>
</div>
";
    }
}
