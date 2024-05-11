import { registerBlockType } from "@wordpress/blocks";
import { RichText, InspectorControls, MediaUpload, MediaUploadCheck } from "@wordpress/block-editor";
import { PanelBody, PanelRow, Button, ColorPalette } from "@wordpress/components";

registerBlockType("ourblocktheme/ourvaluescard", {
    title: "Our Values Card",
    icon: "feedback",
    category: "kafco-blocks",
    attributes: {
        title: { type: "string", default: "Caring of people" },
        description: { type: "string", default: "Creating a culture where people develop, grow and are positively motivated to contribute to the success of others." },
        imgURL: { type: "string", default: ourvaluescard.fallbackimage },
        backgroundColor: { type: "string", default: "#ffffff" }
    },
    edit: EditComponent,
    save: SaveComponent
});

function EditComponent(props) {
    const { attributes, setAttributes } = props;

    function onFileSelect(media) {
        setAttributes({ imgURL: media.url });
    }

    function handleTitleChange(newTitle) {
        setAttributes({ title: newTitle });
    }

    function handleDescriptionChange(newDescription) {
        setAttributes({ description: newDescription });
    }

    function handleBackgroundColorChange(newColor) {
        setAttributes({ backgroundColor: newColor });
    }

    return (
        <>
            <InspectorControls>
                <PanelBody title="Icon Image" initialOpen={true}>
                    <PanelRow>
                        <MediaUploadCheck>
                            <MediaUpload
                                onSelect={onFileSelect}
                                value={attributes.imgURL}
                                render={({ open }) => {
                                    return <Button onClick={open}>Choose Image</Button>;
                                }}
                            />
                        </MediaUploadCheck>
                    </PanelRow>
                </PanelBody>
            </InspectorControls>

            <div className="our-val" style={{ backgroundColor: attributes.backgroundColor }}>
                <div className="our-val-img">
                    <img src={attributes.imgURL} alt="Value Image" />
                </div>
                <div className="our-val-info">
                    <RichText
                        tagName="b"
                        value={attributes.title}
                        onChange={handleTitleChange}
                    />
                    <RichText
                        tagName="p"
                        value={attributes.description}
                        onChange={handleDescriptionChange}
                    />
                </div>
            </div>
        </>
    );
}

function SaveComponent(props) {
    const { attributes } = props;

    return (
        <section className="bg-white">
            <div className="our-val" style={{ backgroundColor: attributes.backgroundColor }}>
                <div className="our-val-img">
                    {attributes.imgURL && <img src={attributes.imgURL} alt="Value Image" />}
                </div>
                <div className="our-val-info">
                    <b>{attributes.title}</b>
                    <p>{attributes.description}</p>
                </div>
            </div>
        </section>)
}
