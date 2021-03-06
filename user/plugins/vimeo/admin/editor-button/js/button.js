// Generated by CoffeeScript 1.11.1
(function($) {
  $(function() {
    $('body').on('grav-editor-ready', function() {
      var Instance;
      Instance = Grav["default"].Forms.Fields.EditorField.Instance;
      Instance.addButton({
        vimeo: {
          identifier: 'vimeo-video',
          title: GravVimeoPlugin.translations.EDITOR_BUTTON_TOOLTIP,
          label: '<i class="fa fa-fw fa-vimeo"></i>',
          modes: ['gfm', 'markdown'],
          action: function(e) {
            e.button.on('click.editor.vimeo', function() {
              var i, l, pos, posend, ref, ref1, text, videoId;
              videoId = prompt(GravVimeoPlugin.translations.EDITOR_BUTTON_PROMPT);
              if (videoId) {
                text = "[plugin:vimeo](https://vimeo.com/" + videoId + ")";
                pos = e.codemirror.getDoc().getCursor(true);
                posend = e.codemirror.getDoc().getCursor(false);
                for (l = i = ref = pos.line, ref1 = posend.line; ref <= ref1 ? i <= ref1 : i >= ref1; l = ref <= ref1 ? ++i : --i) {
                  e.codemirror.replaceRange(text + e.codemirror.getLine(l), {
                    line: l,
                    ch: 0
                  }, {
                    line: l,
                    ch: e.codemirror.getLine(l).length
                  });
                }
                e.codemirror.setCursor({
                  line: posend.line,
                  ch: e.codemirror.getLine(posend.line).length
                });
                e.codemirror.focus();
              }
            });
          }
        }
      });
    });
  });
})(jQuery);
