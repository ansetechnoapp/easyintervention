export default class Modal {

    constructor(options) {
        let defaults = { element: null, effect: 'zoom', state: 'closed', size: 'medium', content: null, footer: null, header: null, title: null };
        this.options = Object.assign(defaults, options);
        if (this.options.element == null) {
            this.options.element = document.createElement('div');
            this.options.element.classList.add('modal');
            this.options.element.innerHTML = `
                <div class="container">
                    <div class="header">
                        <button class="close">&times;</button> 
                    </div>
                    <div class="content"></div>
                    <div class="footer">
                        <button class="close">Close</button>
                    </div>
                </div>                        
            `;
            document.body.appendChild(this.options.element);
        }
        this.options.element.querySelector('.container').classList.remove('zoom', 'slide');
        this.options.element.querySelector('.container').classList.add(this.options.effect);
        if (this.options.header != null) {
            this.header = this.options.header;
        }
        if (this.options.content != null) {
            this.content = this.options.content;
        }
        if (this.options.footer != null) {
            this.footer = this.options.footer;
        }
        if (this.options.title != null) {
            this.title = this.options.title;
        }
        this.size = this.options.size;
        this._eventHandlers();
    }

    open() {
        this.options.state = 'open';
        this.options.element.style.display = 'flex';
        this.options.element.getBoundingClientRect();
        this.options.element.classList.add('open');
        if (this.options.onOpen) {
            this.options.onOpen(this);
        }
    }

    close() {
        this.options.state = 'closed';
        this.options.element.classList.remove('open');
        this.options.element.style.display = 'none';
        if (this.options.onClose) {
            this.options.onClose(this);
        }
    }

    _eventHandlers() {
        this.options.element.querySelectorAll('.close').forEach(element => {
            element.onclick = event => {
                event.preventDefault();
                this.close();
            };
        });
    }

    initElements() {
        document.querySelectorAll('[data-modal]').forEach(element => {
            element.addEventListener('click', event => {
                event.preventDefault();
                let modalElement = document.querySelector(element.dataset.modal);
                let modal = new Modal({ element: modalElement });
                for (let data in modalElement.dataset) {
                    if (modal[data]) {
                        modal[data] = modalElement.dataset[data];
                    }                           
                }
                modal.open();
            });
        });
    }

    get state() {
        return this.options.state;
    }

    set size(value) {
        this.options.size = value;
        this.options.element.classList.remove('small', 'large', 'medium', 'full');
        this.options.element.classList.add(value);
    }

    set content(value) {
        if (!value) {
            this.options.element.querySelector('.content').remove();
        } else {
            if (!this.options.element.querySelector('.content')) {
                this.options.element.querySelector('.container').insertAdjacentHTML('afterbegin', `<div class="content"></div>`);
            }
            this.options.element.querySelector('.content').innerHTML = value;
        }
    }

    set header(value) {
        if (!value) {
            this.options.element.querySelector('.header').remove();
        } else {
            if (!this.options.element.querySelector('.header')) {
                this.options.element.querySelector('.container').insertAdjacentHTML('afterbegin', `<div class="header"></div>`);
            }
            this.options.element.querySelector('.header').innerHTML = value;
        }
    }

    set title(value) {
        if (!this.options.element.querySelector('.header .title')) {
            this.options.element.querySelector('.header').insertAdjacentHTML('afterbegin', `<h1 class="title"></h1>`);
        }
        this.options.element.querySelector('.header .title').innerHTML = value;
    }

    set footer(value) {
        if (!value) {
            this.options.element.querySelector('.footer').remove();
        } else {
            if (!this.options.element.querySelector('.footer')) {
                this.options.element.querySelector('.container').insertAdjacentHTML('beforeend', `<div class="footer"></div>`);
            }
            this.options.element.querySelector('.footer').innerHTML = value;
        }
    }

}