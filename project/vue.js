new Vue({
    el: '#app',
    data:{
        modal: false,
        lists: [
            {
                id: 1,
                nameproduct: 'Футурама',
                src: "../img/tov1.png"
            },
            {
                id: 2,
                nameproduct: 'Гриффины',
                src: "../img/tov2.png"
            },
            {
                id: 3,
                nameproduct: 'Симпсоны',
                src: "../img/tov3.png"
            },
            {
                id: 4,
                nameproduct: 'Микс',
                src: "../img/categ3.png"
            },
            {
                id: 5,
                nameproduct: 'Термонаклейки',
                src: "../img/categ4.png"
            },
            {
                id: 6,
                nameproduct: 'Временное тату',
                src: "../img/categ5.png"
            },
            {
                id: 7,
                nameproduct: 'Гравитти Фолз',
                src: "../img/tov4.png"
            }
            ,
            {
                id: 8,
                nameproduct: 'Время приключений',
                src: "../img/tov5.png"
            }
            ,
            {
                id: 7,
                nameproduct: 'Пикабу',
                src: "../img/categ6.png"
            }
        ],
        products: [
            {
                id: 1,
                nameproduct: 'Нашивка на одежду',
                src: "img/categ1.png"
            },
            {
                id: 2,
                nameproduct: 'Стикеры',
                src: "img/categ2.png"
            },
            {
                id: 3,
                nameproduct: 'Стикеры',
                src: "img/categ3.png"
            },
            {
                id: 4,
                nameproduct: 'Термонаклейка',
                src: "img/categ4.png"
            },
            {
                id: 5,
                nameproduct: 'Временное тату',
                src: "img/categ5.png"
            },
            {
                id: 6,
                nameproduct: 'Пикабу',
                src: "img/categ6.png"
            }
        ],
        recomend:[
            {
                id: 1,
                nameproduct: 'Футурама',
                src: "img/tov1.png"
            },
            {
                id: 2,
                nameproduct: 'Гриффины',
                src: "img/tov2.png"
            },
            {
                id: 3,
                nameproduct: 'Симпсоны',
                src: "img/tov3.png"
            },
            {
                id: 4,
                nameproduct: 'Гравити Фолз',
                src: "img/tov4.png"
            },
            {
                id: 5,
                nameproduct: 'Время приключений',
                src: "img/tov5.png"
            },
            {
                id: 6,
                nameproduct: 'Рик и Морти',
                src: "img/tov6.png"
            },
        ],
        hextid: 3,
    },
    methods:{
       modalwindow: function(){
           console.log('click')
           console.log(this.modal)
            if(this.modal == true){
                this.modal = false
            }
            if(this.modal == false){
                this.modal = true
            }
       },
    }
})