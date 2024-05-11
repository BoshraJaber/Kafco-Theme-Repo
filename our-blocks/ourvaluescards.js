import { registerBlockType } from "@wordpress/blocks";
import { InnerBlocks } from "@wordpress/block-editor";

registerBlockType("ourblocktheme/ourvaluescards", {
    title: "Our Values Container",
    icon: "feedback",
    category: "kafco-blocks",
    edit: EditComponent,
    save: SaveComponent
});

function EditComponent(props) {
    const ALLOWED_BLOCKS = ["ourblocktheme/ourvaluescard"];
    return (
        <>
            <div className="our-values-cards">
                <InnerBlocks allowedBlocks={ALLOWED_BLOCKS} />
            </div>
        </>
    );
}

function SaveComponent() {
    return (
        <div className="our-values-cards">
            <InnerBlocks.Content />
        </div>
    );
}
