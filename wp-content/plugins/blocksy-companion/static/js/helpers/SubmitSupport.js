import {
	createElement,
	Component,
	useEffect,
	useState,
	Fragment
} from '@wordpress/element'
import { __ } from 'ct-i18n'
import classnames from 'classnames'

const SubmitSupport = () => (
	<div className="ct-support-container">
		<h2>{__('Support', 'blc')}</h2>
		<p>
			{__(
				`Got a question or need some help with the theme? You can always submit a support ticket, and our team will help you out.`,
				'blc'
			)}
		</p>
		<a
			href={ctDashboardLocalizations.support_url}
			className="ct-button"
			data-hover="blue"
			target="_blank">
			{__(`Submit a Ticket`, 'blc')}
		</a>
	</div>
)

export default SubmitSupport
