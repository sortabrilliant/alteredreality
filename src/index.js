/**
 * WordPress dependencies
 */
import { addFilter } from '@wordpress/hooks';
import { registerBlockStyle } from '@wordpress/blocks';

/**
 * This ticks WP to render block with actual data.
 */
function removeImageBlockExample( settings, name ) {
	if ( name !== 'core/image' ) {
		return settings;
	}

	settings.example = null;

	return settings;
}

addFilter(
	'blocks.registerBlockType',
	'sortabrilliant/altered-reality',
	removeImageBlockExample
);

registerBlockStyle( 'core/image', [
	{
		name: 'default',
		label: 'Default',
		isDefault: true,
	},
	{
		name: 'vhs',
		label: 'VHS',
	},
	{
		name: 'glitch',
		label: 'Glitch',
	},
	{
		name: 'acidtrip',
		label: 'Acid Trip',
	},
	{
		name: '_1977',
		label: '1977',
	},
	{
		name: 'aden',
		label: 'Aden',
	},
	{
		name: 'brannan',
		label: 'Brannan',
	},
	{
		name: 'brooklyn',
		label: 'Brooklyn',
	},
	{
		name: 'clarendon',
		label: 'Clarendon',
	},
	{
		name: 'earlybird',
		label: 'Earlybird',
	},
	{
		name: 'gingham',
		label: 'Gingham',
	},
	{
		name: 'hudson',
		label: 'Hudson',
	},
	{
		name: 'inkwell',
		label: 'Inkwell',
	},
	{
		name: 'kelvin',
		label: 'Kelvin',
	},
	{
		name: 'lark',
		label: 'Lark',
	},
	{
		name: 'lofi',
		label: 'Lo-Fi',
	},
	{
		name: 'maven',
		label: 'Maven',
	},
	{
		name: 'mayfair',
		label: 'Mayfair',
	},
	{
		name: 'moon',
		label: 'Moon',
	},
	{
		name: 'nashville',
		label: 'Nashville',
	},
	{
		name: 'perpetua',
		label: 'Perpetua',
	},
	{
		name: 'reyes',
		label: 'Reyes',
	},
	{
		name: 'rise',
		label: 'Rise',
	},
	{
		name: 'slumber',
		label: 'Slumber',
	},
	{
		name: 'stinson',
		label: 'Stinson',
	},
	{
		name: 'toaster',
		label: 'Toaster',
	},
	{
		name: 'valencia',
		label: 'Valencia',
	},
	{
		name: 'walden',
		label: 'Walden',
	},
	{
		name: 'willow',
		label: 'Willow',
	},
	{
		name: 'xpro2',
		label: 'X-pro II',
	},
] );
