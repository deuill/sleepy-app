/*
 * Default jQuery plugin template - Version 1.0.0.
 * 
 * Made by <author>.
 * Licenced under the <licence> licence.
 */
;define((function ($, window, document, undefined) {
	var pluginName = "defaultPluginName",
		defaults = {
			// Default values for options go here.
			propertyName: "value"
		};

	function Plugin(element, options) {
		this.element   = element;
		this.settings  = $.extend({}, defaults, options);
		this._defaults = defaults;
		this._name     = pluginName;
		this.init();
	}

	Plugin.prototype = {
			init: function() {
				// Place initialization logic here.
			},
			yourOtherFunction: function() {
				// Extra function logic.
			}
	};

	$.fn[pluginName] = function(options) {
		return this.each(function() {
			if (!$.data(this, "plugin_" + pluginName)) {
				$.data(this, "plugin_" + pluginName, new Plugin(this, options));
			}
		});
	};
})(jQuery, window, document));