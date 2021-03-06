<upgrade>
	<phrases>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>menu_friend_sent_ecards_a441eadc1389cdf0ffe6c4f8babdd66e</var_name>
			<added>1299597849</added>
			<value>Sent ECards</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>invoices</var_name>
			<added>1299598610</added>
			<value>Invoices</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>id</var_name>
			<added>1299598669</added>
			<value>Id</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>status</var_name>
			<added>1299598699</added>
			<value>Status</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>price</var_name>
			<added>1299598718</added>
			<value>Price</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>date</var_name>
			<added>1299598743</added>
			<value>Date</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>sent_to</var_name>
			<added>1299598759</added>
			<value>Sent To</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>you_do_not_have_any_invoices</var_name>
			<added>1299598815</added>
			<value>You do not have any invoices</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>sent_from</var_name>
			<added>1299667618</added>
			<value>From</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>created</var_name>
			<added>1299667836</added>
			<value>Created</value>
		</phrase>
		<phrase>
			<module_id>friend</module_id>
			<version_id>2.0.8</version_id>
			<var_name>paid</var_name>
			<added>1299667848</added>
			<value>Paid</value>
		</phrase>
	</phrases>
	<menus>
		<menu>
			<module_id>friend</module_id>
			<parent_id>0</parent_id>
			<m_connection>friend</m_connection>
			<var_name>menu_friend_sent_ecards_a441eadc1389cdf0ffe6c4f8babdd66e</var_name>
			<ordering>100</ordering>
			<url_value>friend.invoice</url_value>
			<version_id>2.0.8</version_id>
			<disallow_access />
			<module>friend</module>
			<value />
		</menu>
	</menus>
	<hooks>
		<hook>
			<module_id>friend</module_id>
			<hook_type>template</hook_type>
			<module>friend</module>
			<call_name>friend.template_block_congratulate_form</call_name>
			<added>1299062480</added>
			<version_id>2.0.8</version_id>
			<value />
		</hook>
	</hooks>
	<sql><![CDATA[a:1:{s:9:"ADD_FIELD";a:1:{s:22:"phpfox_friend_birthday";a:2:{s:8:"egift_id";a:4:{i:0;s:7:"UINT:11";i:1;N;i:2;s:0:"";i:3;s:3:"YES";}s:9:"status_id";a:4:{i:0;s:6:"TINT:1";i:1;s:1:"0";i:2;s:0:"";i:3;s:3:"YES";}}}}]]></sql>
</upgrade>