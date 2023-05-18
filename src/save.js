import { useBlockProps } from '@wordpress/block-editor';

export default function save() {
	return (
		<p { ...useBlockProps.save() }>
			{ 'Post Type Cards – hello from the saved content!' }
		</p>
	);
}
