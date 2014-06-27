var editor = CodeMirror.fromTextArea(document.getElementById("paste_post"), {
    lineNumbers: true,
    extraKeys: {
        "F11": function(cm) {
            cm.setOption("fullScreen", !cm.getOption("fullScreen"));
        },
        "Esc": function(cm) {
            if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
        }
    },
    styleActiveLine: true,
    autoCloseBrackets: true,
    //viewportMargin: Infinity,
    theme: "monokai",
    continuousScanning: 500
});