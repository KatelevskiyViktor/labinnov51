/*
$(document).ready(function() {

    let items = [];
    for (let i = 1; i <= 176; i++) {
        items.push({
            url: 'storage/images/techbattles_23_10_2021/large/img-' + i + '.jpg',
            thumbUrl: 'storage/images/techbattles_23_10_2021/thumbs/img-' + i + '.jpg',
            title: 'Фото ' + i,
            hash: 'photo-' + i
        })
    }
    let items2 = [];
    for (let i = 1; i <= 30; i++) {
        items2.push({
            url: 'storage/images/techbattles_28_09_2021/large/img-' + i + '.jpg',
            thumbUrl: 'storage/images/techbattles_28_09_2021/thumbs/img-' + i + '.jpg',
            title: 'Фото ' + i,
            hash: 'photo-' + i
        })
    }

    let items3 = [];
    for (let i = 1; i <= 166; i++) {
        items3.push({
            url: 'storage/images/techbattles_28_10_2021/large/img-' + i + '.jpg',
            thumbUrl: 'storage/images/techbattles_28_10_2021/thumbs/img-' + i + '.jpg',
            title: 'Фото ' + i,
            hash: 'photo-' + i
        })
    }

    let items4 = [];
    for (let i = 1; i <= 192; i++) {
        items4.push({
            url: 'storage/images/techbattles_06_11_2021/large/img-' + i + '.jpg',
            thumbUrl: 'storage/images/techbattles_06_11_2021/thumbs/img-' + i + '.jpg',
            title: 'Фото ' + i,
            hash: 'photo-' + i
        })
    }

    let items5 = [];
    for (let i = 1; i <= 24; i++) {
        items5.push({
            url: 'storage/images/marshmallows_challenge/large/img-' + i + '.jpg',
            thumbUrl: 'storage/images/marshmallows_challenge/thumbs/img-' + i + '.jpg',
            title: 'Фото ' + i,
            hash: 'photo-' + i
        })
    }

    let items6 = [];
    for (let i = 1; i <= 58; i++) {
        items6.push({
            url: 'storage/images/techbattles_15_11_2021/large/img-' + i + '.jpg',
            thumbUrl: 'storage/images/techbattles_15_11_2021/thumbs/img-' + i + '.jpg',
            title: 'Фото ' + i,
            hash: 'photo-' + i
        })
    }

    let items7 = [];
    for (let i = 1; i <= 217; i++) {
        items7.push({
            url: 'storage/images/techbattles_20_11_2021/large/img-' + i + '.jpg',
            thumbUrl: 'storage/images/techbattles_20_11_2021/thumbs/img-' + i + '.jpg',
            title: 'Фото ' + i,
            hash: 'photo-' + i
        })
    }


    document.querySelector('#gallery').appendChild(JGallery.create([
        {
            title: 'Технобаттлы - 2020 / Финал / 20.11.2021',
            items: items7

        },
        {
            title: 'Технобаттлы - 2020 / Студенческие отряды / 15.11.2021',
            items: items6

        },
        {
            title: 'Технобатлы 2020 / Школьники / 06.11.2021',
            items: items4

        },
        {
            title: 'Марш-меллоу челлендж / 31.10.2021',
            items: items5

        },
        {
            title: 'Технобатлы 2020 / СУЗы / 28.10.2021',
            items: items3

        },
        {
            title: 'Технобатлы 2020 / ВУЗы / 23.10.2021',
            items: items

        },
        {
            title: 'Технобатлы 2020 / Семинар для педагогов / 28.09.2021',
            items: items2

        },

        {
            title: 'Видео Технобатлы 2021',
            items: [
                {
                    element: JGallery.createElement('<iframe class="video_gal" src="https://vk.com/video_ext.php?oid=-207185469&id=456239017&hash=5d83dba19f3383ce&hd=2" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>'),
                    thumbElement: JGallery.createElement('<span>1</span>'),
                    title: 'Приветствие',
                    hash: 'video'
                },
                {
                    element: JGallery.createElement('<iframe class="video_gal" src="https://vk.com/video_ext.php?oid=-207185469&id=456239018&hash=f298ff9639d0775a&hd=2" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>'),
                    thumbElement: JGallery.createElement('<span>2</span>'),
                    title: 'Утро на варничной',
                    hash: 'video1'
                },
                {
                    element: JGallery.createElement('<iframe class="video_gal" src="https://vk.com/video_ext.php?oid=-207185469&id=456239019&hash=dc1c2151f83ac74d&hd=2" width="853" height="480" allow="autoplay; encrypted-media; fullscreen; picture-in-picture;" frameborder="0" allowfullscreen></iframe>'),
                    thumbElement: JGallery.createElement('<span>3</span>'),
                    title: 'Краш тест',
                    hash: 'video2'
                },
        ]
    }],{
        "tooltipChangeSize": 'Изменить размер',
        "tooltipSlideShowStart": 'Запустить слайдшоу',
        "tooltipThumbnailsToggle": 'Убрать миниатюры',
        "tooltipSeeAllItems": 'Посмотреть все',
        "tooltipSeeOtherAlbums": 'Посмотреть все альбомы'
    }).getElement());

   $('div.j-gallery-controls').css('z-index', '3');
});


*/
