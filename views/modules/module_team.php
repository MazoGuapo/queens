<?php
    $options = get_sub_field('opciones');
    $align = get_sub_field('align_title');
    $content = get_sub_field('content');
    $miembro = get_sub_field('miembro');
    $align_text = $align['align_text_title'];
    $full_height = $options['full_height'];
?>

<section class="module module-block module_team flex flex-col min-h-<?php echo $full_height; ?> w-full bg-<?php echo $options['bg_color']; ?> <?php echo $align_text; ?> <?php echo $align['horizontal_title']; ?>">

    <!-- CONTENIDOS -->
    <div class="wrapper_content pb-40 flex flex-col <?php echo $align_text; ?> <?php echo $align['horizontal_title']; ?>  items-center text-center  w-2/5">

        <?php if($content['sobretitulo']) { ?>
            <div class="surtitle pb-20">
                <p class="font-primary text-secondary italic"><?php echo $content['sobretitulo']; ?></p>
            </div>
        <?php } ?>

        <?php if($content['titulo']) { ?>
            <div class="title pb-10">
                <p class="text-<?php echo $content['tamano_titulo']; ?> font-primary font-thin text-white">
                    <?php echo $content['titulo']; ?>
                </p>
            </div>
        <?php } ?>

        <?php if($content['subtitulo']) { ?>
            <div class="subtitle pb-16">
                <p class="text-white"><?php echo $content['subtitulo']; ?></p>
            </div>
        <?php } ?>

        <?php if($content['cuerpo']) { ?>
        <div class="body">
            <p class=""><?php echo $content['cuerpo']; ?></p>
        </div>
        <?php } ?>

    </div>

    <!-- ICONOS -->
    <div class="wrapper_icons w-full">
        <div class="grid grid-cols-2 laptop:grid-cols-4 grid-flow-row gap-y-40">
            <?php $n=1; foreach($miembro as $member) { ?>
            <div class="member flex flex-col items-start">
                
                <a href="<?php echo $member['link']['enlace'] ?>" class="font-primary italic text-white text-h5 mb-32">
                    <?php echo $member['link']['texto'] ?>
                </a>

                <p class="font-primary text-white text-h3 mb-32">
                    <?php echo $member['titulo'] ?>
                </p>

                <button onclick="openModal('modal_member<?php echo $n; ?>')" class="member_view_more">
                    <img src="<?php bloginfo('template_url') ?>/src/assets/images/arrow_right.png" alt="">
                </button>

            </div>
            <?php $n++; } ?>
        </div>
    </div>


</section>

<?php $n=1; foreach($miembro as $member) { ?>
    <dialog id="modal_member<?php echo $n; ?>" class="bg-transparent z-0 relative w-screen h-screen">
    <div class="flex justify-center items-start overflow-x-hidden overflow-y-auto fixed left-0 top-0 w-full h-full bg-gray-900 bg-opacity-50 z-50 transition-opacity duration-300 opacity-0">
        <div class="bg-primary bg-opacity-50 flex w-screen min-h-full relative flex flex-col justify-center items-center text-white">

            <a class="absolute top-8 right-8 text-h6 cursor-pointer" onclick="modalClose('modal_member<?php echo $n; ?>')">Cerrar</a>

            <div class="w-4/12 text-center">

                <a href="<?php echo $member['link']['enlace'] ?>" class="font-primary italic text-white text-h5 mb-10 block">
                    <?php echo $member['link']['texto'] ?>
                </a>

                <p class="font-primary text-white font-thin text-h1 uppercase mb-10 pb-10 border-white border-b border-solid block">
                    <?php echo $member['titulo'] ?>
                </p>

                <div class="text-white">
                    <?php echo $member['bio'] ?>
                </div>

            </div>
            
            <!-- <div class="p-7 flex items-center w-full">
                    <div class="text-gray-900 font-bold text-lg">Modal Top</div>
                    <svg onclick="modalClose('modal_member<?php echo $n; ?>')" class="ml-auto fill-current text-gray-700 w-5 h-5 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z" />
                    </svg>
                </div> -->
        </div>
    </div>
</dialog>
<?php $n++; } ?>

<script>
    function openModal(key) {
    document.getElementById(key).showModal(); 
    document.body.setAttribute('style', 'overflow: hidden;'); 
    document.getElementById(key).children[0].scrollTop = 0; 
    document.getElementById(key).children[0].classList.remove('opacity-0'); 
    document.getElementById(key).children[0].classList.add('opacity-100')
    }

    function modalClose(key) {
    document.getElementById(key).children[0].classList.remove('opacity-100');
    document.getElementById(key).children[0].classList.add('opacity-0');
    setTimeout(function () {
        document.getElementById(key).close();
        document.body.removeAttribute('style');
    }, 100);
    }

</script>