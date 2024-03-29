'use strict';

class Search {

    constructor(obj) {
        this.el = document.querySelector(obj.el);
        this.list = obj.list;
        this.init();
    }

    init() {
        let input, listContainer;
        this.el.innerHTML = `
			<input placeholder="Buscar aqui" autocomplete="off" onclick="show();" type="search" id="is" class="input form-control mr-sm-2"/>
			<ul class="is-visible list-group haja" id="searchList"></ul>
		`;
        input = document.querySelector('.input');
        listContainer = document.querySelector('#searchList');
        this.watch(input, this.list, listContainer);
    }

    watch(input, list, search) {
        input.addEventListener('keyup', () => {
            search.innerHTML = '';
            let value = input.value.toLowerCase(),
                listT = list.length,
                existe = 0;

            for (let i = 0; i < listT; i++) {
                let text = list[i].toLowerCase();
                if (value != '') {
                    existe = ~text.indexOf(value);
                    if (existe != 0) {
                        this.updateList(search, list[i]);
                    }
                }
            }
        }, false);
    }

    updateList(el, text) {
        el.innerHTML += `<li>${text}</li>`;
    }


}
