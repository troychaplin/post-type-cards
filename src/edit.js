import { useBlockProps } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit() {
	return (
		<p { ...useBlockProps() }>
			Post Type Cards – hello from the editor!
		</p>
	);
}
