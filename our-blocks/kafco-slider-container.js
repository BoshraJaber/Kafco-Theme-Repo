import { InnerBlocks } from "@wordpress/block-editor"
import { registerBlockType } from "@wordpress/blocks";
import Swiper from 'swiper';

// Initialize Swiper
const swiper = new Swiper('.swiper-container', {
    // Swiper options
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 5000,
    },
    // Add more options as needed
});

registerBlockType("ourblocktheme/kafco-slider-container", {
    title: "Kafco Slideshow",
    supports: {
        align: ["full"]
    },
    attributes: {
        align: { type: "string", default: "full" }
    },
    edit: EditComponent,
    save: SaveComponent
})

function EditComponent() {
    return (
        <div style={{ backgroundColor: "#333", padding: "35px" }}>
            <p style={{ textAlign: "center", fontSize: "20px", color: "#FFF" }}>Slideshow</p>
            <InnerBlocks allowedBlocks={["ourblocktheme/kafco-slide"]} />
        </div>
    )
}


function SaveComponent() {
    return <InnerBlocks.Content />
}

