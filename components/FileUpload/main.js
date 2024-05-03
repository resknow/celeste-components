import Dropzone from "dropzone";

class FileUpload extends HTMLElement {
    constructor() {
        super();
        this.endpoint = this.getAttribute("endpoint");
        this.dropzone = new Dropzone(this, {
            url: this.endpoint,
            previewTemplate: this.previewTemplate()
        });
    }

    previewTemplate() {
        let template = this.querySelector('template');
        return template.innerHTML;
    }
}

customElements.get("celeste-file-upload") || customElements.define("celeste-file-upload", FileUpload);